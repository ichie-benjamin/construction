<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index(){
        $services = $this->services();
        $c_services = $this->cServices();
        $projects = $this->projectImgs();
        return view('pages.index',compact('services','projects','c_services'));
    }

    public function service()
    {
        $services = $this->services();
        return view('pages.services',compact('services'));

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
        $projects = $this->projectImgs();
        return view('pages.projects', compact('projects'));
    }
}
