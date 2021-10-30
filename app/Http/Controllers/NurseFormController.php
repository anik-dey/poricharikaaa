<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NurseFormController extends Controller
{
    //
    public function nurseform()
    {
        return view('pages.forms.nurseform');
    }
}
