<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index(){
        $services = $this->services();
        $projects = $this->projectImgs();
        return view('pages.index',compact('services','projects'));
    }
    public function ceo(){
        return view('pages.ceo');
    }

    public function about(){
        return view('pages.about');
    }
    public function contact(){
        return view('pages.contact');
    }
    public function projects(){
        return view('pages.projects');
    }
}
