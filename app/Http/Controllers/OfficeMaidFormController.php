<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Carbon;
use Session;

class OfficeMaidFormController extends Controller
{
    //
    public function officemaidform()
    {
        return view('pages.forms.officemaidform');
    }
}
