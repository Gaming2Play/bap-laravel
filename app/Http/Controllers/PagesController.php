<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index(){
        $title = 'Welcome to Laravel';
        return view('pages.index')->with('title', $title);
    }

    public function about(){
        $title = 'About Us';
        return view('pages.about')->with('title', $title);
    }

    public function services(){
        $data = array(
          'title' => 'Info',
          'services' => ['Games', 'Players', 'Coach']
        );
        return view('pages.services')->with($data);
    }
    public function login(){
        $title = 'Login Page';
        return view('pages.login')->with('title', $title);
    }
    public function register(){
        $title = 'Register Page';
        return view('pages.register')->with('title', $title);
    }
}
