<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Hash;

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
    public function index($show = '')
    {
        if($show == 'show-ho')
        {
            return view('tree-ho');
        }

        if ($show == 'show-name')
        {
            return view('tree-name');
        }

        if($show == 'show-full')
        {
            return view('tree-full');
        }

        return view('home');
    }

    public function detail($id=''){
        return view('detail.detail');
    }


}
