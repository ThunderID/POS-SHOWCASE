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
        $this->page_datas->data            = [
            'cart' => $this->getCart(),
            'total' => $this->getTotalCart()
        ];
        
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

        $dt = $request['cart'];
        $carts = $this->updateCart($dt);

        return($carts);
    }

    public function show(){
        return $this->index();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id, Request $request)
    {
        $carts = $this->popCart($request['id']);
        return($carts);
    }

    private function getCart(){
        return Session()->get('cart');
    }

    private function getTotalCart(){
        $collection = collect(Session()->get('cart'));
        return [
            'price' => $collection->sum('total'),
            'qty' => $collection->sum('qty')
        ];
    }

    private function updateCart($data){
        // get whole cart
        $carts = Session()->get('cart') ? Session()->pull('cart') : [];

        // push new cart data
        $idx = array_search($data['id'], array_column($carts, 'id'));
        if ($idx !== false) {
            if($data['qty'] > 0){
                // $carts[$idx]['qty'] = $carts[$idx]['qty'] + $data['qty'];
                $carts[$idx]['qty'] = $data['qty'];
                
                if($data['promo']){
                    $carts[$idx]['total'] = $data['promo']['harga'] * $data['qty'];
                }else{
                    $carts[$idx]['total'] = $data['harga'] * $data['qty'];
                }
            }else{
                return $this->popCart($data['id'], $carts);
            }
        }else{
            if($data['qty'] > 0){
                if($data['promo']){
                    $data['total'] = $data['promo']['harga'] * $data['qty'];
                }else{
                    $data['total'] = $data['harga'] * $data['qty'];
                }
                array_push($carts,$data);
            }
        }

        // update cart
        Session()->put('cart', $carts);

        return $carts;
    }

    private function popCart($id, $_cart = null){
        // get whole cart
        $carts = Session()->pull('cart');
        if(!$carts) {
            if(!$_cart){
                return [];
            }else{
                $carts = $_cart;
            }
        }

        // delete all?
        if(strtolower($id) == 'all'){
            $carts == [];
        }else{
            // pop selected cart
            $idx = array_search($id, array_column($carts, 'id'));
            
            if ($idx !== false) {
                if(sizeof($carts) > 0){
                    unset($carts[$idx]);
                    $carts = array_values($carts); 
                }else{
                    $carts = [];
                }
            }else{
                $carts = [];
            }
        }

        // update cart
        Session()->put('cart', $carts);

        return $carts;
    }
    
}
