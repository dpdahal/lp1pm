<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;

class ApplicationController extends Controller
{

    public function index()
    {

        return view('home');
    }

    public function contact()
    {

        return view('contact');
    }

    public function contactAction(Request $request)
    {

       dump($request);

    }
}
