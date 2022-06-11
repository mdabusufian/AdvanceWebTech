<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class pagecontroller extends Controller
{
    public function index(){
        $name = "Mr. Md Abu Sufian";
       $text = "This is home page";
        return view('Home')
        ->with('name', $name)
        ->with('text', $text);
       
    }
    public function about(){
        $name = "Mr. Md Abu Sufian";
       $text = "This is about us page";
        return view('aboutus')
        ->with('name', $name)
        ->with('text', $text);
       
    }

    public function our(){
        $name = "Mr. Md Abu Sufian";
       $text = "This is Our Teams page";
        return view('team')
        ->with('name', $name)
        ->with('text', $text);
       
    }
    public function contact(){
        $name = "Mr. Md Abu Sufian";
       $text = "This is contact page";
        return view('contact')
        ->with('name', $name)
        ->with('text', $text);
       
    }
    public function service(){
       
    
        $name = "Mr. Md Abu Sufian";
       $text = "This is contact page";
    
        return view('service')
        ->with('name', $name)
        ->with('text', $text);
       
    }
}