<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BabyCareFormController extends Controller
{
    //
    public function babycareform()
    {
        return view('pages.forms.babycareform');
    }
}
