<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function index()
    {
        $data['page_title'] = 'Welcome to SeaFoods';
        return view('welcome',$data);
    }
 
    public function about()
    {
        $data['page_title'] = 'About of SeaFoods';
        return view('about',$data);
    }
 
    public function contact_us()
    {
        $data['page_title'] = 'contact us of SeaFoods';
        return view('contact-us',$data);
    }
}
