<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Client;

class HomeController extends Controller
{

    public function index() 
    {
        // init : page attributes
        $this->page_attributes->title       = 'Home';
        $this->page_attributes->sub_title   = 'Index';
        $this->page_attributes->filter      =  null;

        $client = new Client;
        $request = $client->get('http://127.0.0.1:4000/api/produk');
        $response = $request->getBody()->getContents();
        $data = json_decode($response, true);
        
        // init : page datas
        $this->page_datas->data1            = $data['data'];
        $this->page_datas->data2            = ['some datas'];
        
        // views
        $this->view                         = view('pages.home');
        return $this->generateView(); 
    }


    public function exampleStore(Request $request)
    {
        // catch errors : if any
        $this->page_attributes->msg['error'] = ['some errors'];

        // return view
        $this->page_attributes->msg['success'] = 'Data successfully saved';
        return $this->generateRedirect(route('pages.welcome'));
    }  

    public function show($id)
    {
        $this->page_attributes->title       = 'Home';
        $this->page_attributes->sub_title   = 'Index';
        $this->page_attributes->filter      =  null;

        $client = new Client;
        $request = $client->get('http://127.0.0.1:4000/api/produk');
        $response = $request->getBody()->getContents();
        $data = json_decode($response, true);
        
        // init : page datas
        $this->page_datas->data1            = $data['data'][$id];
        $this->page_datas->data2            = ['some datas'];
        
        // views
        $this->view                         = view('pages.detail-product');
        return $this->generateView(); 
    }  
}