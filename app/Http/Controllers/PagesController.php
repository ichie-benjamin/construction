<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index(){
        $services = $this->services();
        $c_services = $this->cServices();
        $awards = $this->awards();

        $projects = $this->projectImgs();
        return view('pages.index',compact('services','projects','c_services','awards'));
    }

    public function service()
    {
        $services = $this->services();
        $projects = $this->projectImgs();
        $c_services = $this->cServices();

        return view('pages.services',compact('services','c_services','projects'));

    }
    public function ceo(){
        return view('pages.ceo');
    }

    public function about(){
        $c_services = $this->cServices();
        $awards = $this->awards();
        return view('pages.about', compact('c_services','awards'));
    }
    public function contact(){
        return view('pages.contact');
    }
    public function projects(){
        $projects = $this->projectImgs();
        return view('pages.projects', compact('projects'));
    }
}
