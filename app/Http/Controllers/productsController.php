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

    $request  = $client->get('http://127.0.0.1:8000/api/produk', [
                  'query'  => [
                    'page'      => request()->has('page') ? request()->get('page') : '',
                    'per_page'  => 12
                ]]);

    if (request()->has('cari')) {
      $request  = $client->get('http://127.0.0.1:8000/api/produk', [
                    'query'  => [
                      'cari'        => request()->get('cari'),
                      'page'        => request()->has('page') ? request()->get('page') : '',
                      'per_page'    => 12,
                  ]]);
    }

    if (request()->has('kategoriId')) {
      $request  = $client->get('http://127.0.0.1:8000/api/produk', [
                    'query'  => [
                      'kategoriId'  => request()->get('kategoriId'),
                      'page'        => request()->has('page') ? request()->get('page') : '',
                      'per_page'    => 12,
                  ]]);
    }

    if (request()->has('filterId')) {
      $request  = $client->get('http://127.0.0.1:8000/api/produk', [
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
    $request  = $client->get('http://127.0.0.1:8000/api/filter/' . (request()->has('kategoriId') ? request()->get('kategoriId') : 0), [
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
    $request = $client->get('http://127.0.0.1:8000/api/produk/'.$id);
    $response = $request->getBody()->getContents();
    $data = json_decode($response, true);
    // dd($data);
    $clients = new Client;
    $requests = $clients->get('http://127.0.0.1:8000/api/produk/');
    $responses = $requests->getBody()->getContents();
    $datas = json_decode($responses, true);
    // init : page datas
    $this->page_datas->data1            = $data;
    $this->page_datas->data2            = $datas;
    
    // views
    $this->view                         = view('pages.products.show');
    return $this->generateView(); 
  }
}