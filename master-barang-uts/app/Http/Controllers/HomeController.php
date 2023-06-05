<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    function index()
    {
        $pageTitle = 'My Idol';

        return view('home', ['pageTitle' => $pageTitle]);
    }
}
