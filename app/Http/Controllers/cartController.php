<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;

class cartController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $this->page_attributes->title       = 'Cart';
        $this->page_attributes->sub_title   = 'List';
        $this->page_attributes->filter      =  null;
       
        // // init : page datas
        $this->page_datas->data            = ['cart' => $this->getCart()];
        
        // views
        $this->view                         = view('pages.cart.index');
        return $this->generateView(); 
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show () {
        $dt  = new Request;
        $this->store($dt);
    }

    public function store(Request $request)
    {
        // $dt = [
        //     'id'        => 16,
        //     'harga'     => 609000,
        //     'qty'       => 2,
        //     'nama'      => 'Xiaomi Redmi 2 4G ( Ram 1gb /8gb) Garansi Distributor Warna Hitam',
        //     'thumbnail' => 'https://ik.imagekit.io/inponsel/images/galeri/0-inponsel-xiaomi-redmi-2s-150105-44-31.jpg',
        //     'promo'     => []
        // ];

        $dt = json_decode($request['cart']);
        $carts = $this->updateCart($dt);

        return($carts);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $carts = $this->pushCart($id);
        return($carts);
    }

    private function getCart(){
        return Session()->get('cart');
    }

    private function updateCart($data){
        // get whole cart
        $carts = Session()->get('cart') ? Session()->pull('cart') : [];

        // push new cart data
        $idx = array_search($data['id'], array_column($carts, 'id'));
        if ($idx !== false) {
            // $carts[$idx]['qty'] = $carts[$idx]['qty'] + $data['qty'];
            $carts[$idx]['qty'] = $data['qty'];
        }else{
            array_push($carts,$data);
        }

        // update cart
        Session()->put('cart', $carts);

        return $carts;
    }

    private function popCart($id){
        // get whole cart
        $carts = Session()->pull('cart');
        if($carts) return null;

        // delete all?
        if(strtolower($id) == 'all'){
            $carts == null;
        }else{
            // pop selected cart
            $idx = array_search($id, array_column($carts, 'id'));
            if ($idx !== false) {
                if($carts.length() > 0){
                    array_splice($carts, $idx, 1);
                }else{
                    $carts = null;
                }
            }else{
                return null;
            }
        }

        // update cart
        Session()->put('cart', $carts);

        return $carts;
    }
    
}
