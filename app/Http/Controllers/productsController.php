<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Client;

class productsController extends Controller
{
  public function index () 
  {
    // init : page attributes
    $this->page_attributes->title       = 'Products';
    $this->page_attributes->sub_title   = 'List';
    $this->page_attributes->filter      =  null;

    // GET DATA PRODUCT FROM API
    $client   = new Client;

    $request  = $client->get('http://128.199.145.173:3100/api/produk', [
                  'query'  => [
                    'page'      => request()->has('page') ? request()->get('page') : '',
                    'per_page'  => 12
                ]]);

    if (request()->has('cari')) {
      $request  = $client->get('http://128.199.145.173:3100/api/produk', [
                    'query'  => [
                      'cari'        => request()->get('cari'),
                      'page'        => request()->has('page') ? request()->get('page') : '',
                      'per_page'    => 12,
                  ]]);
    }

    if (request()->has('kategoriId')) {
      $request  = $client->get('http://128.199.145.173:3100/api/produk', [
                    'query'  => [
                      'kategoriId'  => request()->get('kategoriId'),
                      'page'        => request()->has('page') ? request()->get('page') : '',
                      'per_page'    => 12,
                  ]]);
    }

    if (request()->has('filterId')) {
      $request  = $client->get('http://128.199.145.173:3100/api/produk', [
                    'query'  => [
                      'filterId'    => request()->get('filterId'),
                      'kategoriId'  => request()->get('kategoriId'),
                      'page'        => request()->has('page') ? request()->get('page') : '',
                      'per_page'    => 12,
                  ]]); 
    }

    $response = $request->getBody()->getContents();
    $dataProduct  = json_decode($response, true);

    // GET DATA FILTER FROM API
    $request  = $client->get('http://128.199.145.173:3100/api/filter/' . (request()->has('kategoriId') ? request()->get('kategoriId') : 0), [
                  'query' => [
                    'per_page'  => 5
                ]]);

    $response = $request->getBody()->getContents();
    $dataFilter = json_decode($response, true);

    // init : page datas
    $this->page_datas->data             = $dataProduct;
    $this->page_datas->filter           = $dataFilter;
    
    // views
    $this->view                         = view('pages.products.index');
    return $this->generateView(); 
  }

  public function show ($id) 
  {
    $this->page_attributes->title       = 'Home';
    $this->page_attributes->sub_title   = 'Index';
    $this->page_attributes->filter      =  null;

    $client = new Client;
    $request = $client->get('http://128.199.145.173:3100/api/produk/'.$id);
    $response = $request->getBody()->getContents();
    $data = json_decode($response, true);

    $clients = new Client;
    $requests = $clients->get('http://128.199.145.173:3100/api/produk/');
    $responses = $requests->getBody()->getContents();
    $datas = json_decode($responses, true);

    // get carts
    $cart  = session()->get('cart');
    if($cart){
      $idx = array_search($data['id'], array_column($cart, 'id'));
      if ($idx !== false) {
        $data['cart'] = $cart[$idx]['qty'];
      }else{
        $data['cart'] = null;
      } 
    }else{
      $data['cart'] = null;
    }

    // init : page datas
    $this->page_datas->data            = $data;
    $this->page_datas->data2           = $datas;
    
    // views
    $this->view                         = view('pages.products.show');
    return $this->generateView(); 
  }
}