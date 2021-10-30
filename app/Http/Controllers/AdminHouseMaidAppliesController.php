<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class AdminHouseMaidAppliesController extends Controller
{
    public function view()
    {
        $all_contact=DB::table('housemaidform_client_tbl')->latest()->paginate();
        return view('pages.admin.clientApplies.housemaidapplies')->with('all_contact',$all_contact);
    }

    public function clientdelete($h_m_client_id)
    {
        DB::table('housemaidform_client_tbl')
       ->where('h_m_client_id',$h_m_client_id)
       ->delete();
       alert()->success('Delete Successfully')->persistent('Close')->autoclose(5500);
        return back();
       //return Redirect::to('/customers-contactlist');

    }
}
