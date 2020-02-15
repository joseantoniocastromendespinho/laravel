<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Autenticado extends Controller
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
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return dd("coiso");
    }

    public function test1(Request $request)
    {
        

        return view("formul");

    }
}