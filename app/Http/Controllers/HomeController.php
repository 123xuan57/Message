<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Msg;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $msgs = Msg::all();
        return view('manage')->withMsgs($msgs);
    }
}
