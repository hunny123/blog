<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index(){
        $title = "Welcome to Home page";
    	return view('pages.index')->with('title',$title);
    }
     public function about(){
        $title = " About page"; 
    	return view('pages.about')->with('title',$title);
    }
    public function service(){
        $title = array('Web Development','SEO','Bootstrap');
    	return view('pages.service')->with('title',$title);
    }
}
