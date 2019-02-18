<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class exampleController extends Controller
{

    public function example() 
    {
        // init : page attributes
        $this->page_attributes->title       = 'Portofolio';
        $this->page_attributes->sub_title   = 'Index';
        $this->page_attributes->filter      =  null;

        // init : page datas
        $this->page_datas->data1            = ['some datas'];
        $this->page_datas->data2            = ['some datas'];
        
        // views
        $this->view                         = view('pages.welcome');
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
