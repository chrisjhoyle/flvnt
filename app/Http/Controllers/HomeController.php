<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function __construct()
    {
        // Middleware will send it back to
        // the login page. The if statement
        // in index will handle where to go
        // $this->middleware('auth');
    }

    public function index()
    {
        if (\Auth::check()) {
            return view('home');
        }

        return view('index');
    }
}
