<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Client;
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

        $client = new Client;
        $request = $client->get('http://127.0.0.1:8000/api/produk/?&per_page=3');
        $response = $request->getBody()->getContents();
        $data = json_decode($response, true);
        
        // // init : page datas
        $this->page_datas->data            = $data;
        
        // views
        $this->view                         = view('pages.cart.index');
        return $this->generateView(); 
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        /*
        [
            'id' => 'pentol',
            'harga' => '1234',
            'qty' => 2,
            'nama' => 'pepsoden',
            'thumbnail' => https://google.com',
            'promo' => []
        ]
        */

        $dt = json_decode($request['cart']);
        $carts = $this->pushCart($dt);
        return($carts);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }


    private function pushCart($data){
        // get whole cart
        $carts = Session()->get('cart') ? Session()->pull('cart') : [];

        // push new cart data
        $idx = array_search($data['id'], array_column($carts, 'id'));
        if ($idx !== false) {
            $carts[$idx]['qty'] = $carts[$idx]['qty'] + $data['qty'];
        }else{
            array_push($carts,$data);
        }

        // update cart
        Session()->put('cart', $carts);

        return $carts;
    }

    private function popCart($data){
        // get whole cart
        $carts = Session()->pull('cart');
        if($carts) return null;

        // push new cart data
        $idx = array_search($data['id'], array_column($carts, 'id'));
        if ($idx !== false) {
            if($carts.length() > 0){
                array_splice($carts, $idx, 1);
            }else{
                $carts = null;
            }
        }else{
            return null;
        }

        // update cart
        Session()->put('cart', $carts);

        return $carts;
    }
    
}
