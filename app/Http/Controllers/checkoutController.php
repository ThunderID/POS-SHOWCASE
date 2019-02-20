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
    
    // // init : page datas
    $this->page_datas->data            = [
        'cart' => $this->getCart(),
        'total' => $this->getTotalCart()
    ];
    
    // views
    $this->view                         = view('pages.checkout.index');
    return $this->generateView();
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
}