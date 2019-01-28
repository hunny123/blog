<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController2 extends Controller
{
    public function helloThings(){
    	return '<p style="font-size:100;color:grey;font-family:"Times New Roman", Times, serif;">You Do greats things with Laravel</p>';
    }
}
