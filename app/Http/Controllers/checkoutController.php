<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Client;

class checkoutController extends Controller
{
  public function index () 
  {
    $this->page_attributes->title       = 'Checkout';
    $this->page_attributes->sub_title   = null;
    $this->page_attributes->filter      =  null;

    $client = new Client;
    $request = $client->get('http://128.199.145.173:3100/api/produk/?&per_page=3');
    $response = $request->getBody()->getContents();
    $data = json_decode($response, true);
    
    // // init : page datas
    $this->page_datas->data            = $data;
    
    // views
    $this->view                         = view('pages.checkout.index');
    return $this->generateView();
  }
}