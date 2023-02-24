<?php

namespace App\Http\Controllers;

use App\Models\Home;
use Illuminate\Http\Request;
use Illuminate\View\View;

class HomeController extends Controller
{

    public function index()
    {
        return view('users.index');
    }

    public function gallery()
    {
        return view('users.gallery');
    }

    public function contact()
    {
        return view('users.contact');
    }

    public function about()
    {
        return view('users.about');
    }

}
