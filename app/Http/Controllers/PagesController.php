<?php

namespace App\Http\Controllers;

use App\Pages;
use Illuminate\Http\Request;

class PagesController extends Controller
{

    public function index()
    {
        $title = 'Welcome! Index';
        return view('pages.index', compact('title'));
    }

    public function about() {
//        dd('pages.about');
        $title = 'Welcome! About';
        return view('pages.about', compact('title'));
    }

    public function services() {
        $title = 'Welcome! Services';
        $servises = ['Web Design', 'Programming', 'SEO'];
        return view('pages.services', compact('title', 'servises'));
    }
}
