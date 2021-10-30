<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BaseController extends Controller
{
    public function index()
    {
        return view('layouts.app');
    }
    public function home()
    {
        return view('pages.home');
    }

    //Services Pages

    public function babycare()
    {
        return view('pages.services.babycare');
    }
    public function nurse()
    {
        return view('pages.services.nurse');
    }
    public function housemaid()
    {
        return view('pages.services.housemaid');
    }
    public function officemaid()
    {
        return view('pages.services.officemaid');
    }
    public function officeassistant()
    {
        return view('pages.services.officeassistant');
    }
    public function beautician()
    {
        return view('pages.services.beautician');
    }
    public function tailor()
    {
        return view('pages.services.tailor');
    }
    public function rapidservice()
    {
        return view('pages.services.rapidservice');
    }

    //Coming Soon
    public function soon()
    {
        return view('pages.comingsoon');
    }


}
