<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Guest;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //$this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('index');
    }

    public function home()
    {
        return view('home');
    }

    /*
       Lab for php
         */
    public function opit()
    {
        return view('opit');
    }

    public function vote(Request $req)
    {
        $g = new Guest();
        $g->fname = $req->fname;
        $g->lname = $req->lname;
        $checked = '';
        foreach ($req->language as $item => $v) {
            $checked .= $v . ' ';
        }
        $g->languages = $checked;
        $g->special = $req->special;
        $g->save();

        return view('result', ['guest' => Guest::all()]);
    }
}
