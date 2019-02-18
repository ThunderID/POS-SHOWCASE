<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;

class productsController extends Controller
{
  public function index () 
  {
    // init : page attributes
    $this->page_attributes->title       = 'Products List';
    $this->page_attributes->sub_title   = 'Index';
    $this->page_attributes->filter      =  null;

    // init : page datas
    // $this->page_datas->data1            = ['some datas'];
    // $this->page_datas->data2            = ['some datas'];
    
    // views
    $this->view                         = view('pages.products.index');
    return $this->generateView(); 
  }
}