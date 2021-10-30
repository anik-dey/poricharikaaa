<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
    {
        return view('layouts.admin');
    }
    public function home()
    {
        return view('pages.admin.home');
    }
    public function housemaidlist()
    {
        return view('pages.admin.housemaid');
    }
    public function housemaidform()
    {
        return view('pages.admin.forms.housemaidform');
    }
}
