<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $data['page_title'] = 'Home';
        return view('crm.admin.home.home', $data);
    }

    public function mail_test(Request $request)
    {
        $pos_profile['id'] = 0;

        $mail_data = [];
        $mail_data['user_data']  = $pos_profile;
        $mail_data['user_type']  = "pos";
        $mail_data['email_id']   = $request->mail_id ?? "sajidjalal@gmail.com";
        $mail_data['template_name'] = "emails.myTestMail";
        $mail_data['subject']       =  "Mail test";
        $mail_data['certificate_date'] =  date('Y-m-d');
        mail_sending_helper($mail_data);

    }
}
