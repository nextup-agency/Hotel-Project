<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LayoutController extends Controller
{
    public function home()
    {

        return view('/home');
    }

    public function residences()
    {

        return view('/residences');
    }

    public function contact()
    {

        return view('/contact');
    }

    public function about()
    {

        return view('/about');
    }

    public function articles()
    {

        return view('/articles');
    }

    public function articleDetails()
    {

        return view('/article-details');
    }
}
