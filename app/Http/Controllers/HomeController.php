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
        $request = $client->get('http://128.199.145.173:3100/api/produk');
        $response = $request->getBody()->getContents();
        $data = json_decode($response, true);
        
        $clients = new Client;
        $requests = $clients->get('http://128.199.145.173:3100/api/promo/');
        $responses = $requests->getBody()->getContents();
        $datas = json_decode($responses, true);
        // dd($datas);
        // init : page datas
        $this->page_datas->data1            = $data['data'];
        $this->page_datas->data2            = $datas['data'];
        
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
}