<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AdminContactListController extends Controller
{
    public function view()
    {
        $all_contact=DB::table('contact_tbl')->latest()->paginate();
        return view('pages.admin.customerscontact')->with('all_contact',$all_contact);
    }

    public function clientdelete($contact_id)
    {
        DB::table('contact_tbl')
       ->where('contact_id',$contact_id)
       ->delete();
       alert()->success('Delete Successfully')->persistent('Close')->autoclose(5500);
        return back();
       //return Redirect::to('/customers-contactlist');

    }
}
