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
    public function __construct() {
        //$this->middleware('auth');
        $this->middleware(['auth', '2fa']);
    }

    /**
     * Show the application dashboard.
     *
     * @param Request $request
     * @return \Illuminate\Http\Response
     */


    public function index() {
        $ip= trim(shell_exec("dig +short myip.opendns.com @resolver1.opendns.com"));
        //$ip = "2.136.0.0";
        $data = \Location::get($ip);
        if (!empty($data)) {
            if ($data->regionName == "Lima") {
                return view('home')->with('ip', $data);
            } else {
                return view('location')->with('ip', $data);
            }
        }

    }



}
