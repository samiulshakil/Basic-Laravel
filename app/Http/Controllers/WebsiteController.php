<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WebsiteController extends Controller
{
    public function __construct(){

    }

    public function index(){
      return view('website.index');
    }

    public function about(){
      return view('website.about');
    }

    public function contact(){
      return view('website.contact');
    }
}
