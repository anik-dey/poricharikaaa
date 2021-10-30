<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Carbon;
use Session;
class HouseMaidFormController extends Controller
{
    // Forms Pages

    public function housemaidform()
    {
        return view('pages.forms.housemaidform');
    }

    public function savehousemaidform(Request $request)
    {
        // dd(request()->all());
         $validated = $request->validate([
           'client_name' => 'required| regex:/^[A-Za-z][A-Za-z\'\-]+([\ A-Za-z][A-Za-z\'\-]+)*/',
           'client_address' => 'required',
            'client_email' => 'required|email',
            //'client_phone' => 'required|max:11|min:11|',
            'client_phone' => 'required| regex:/(01)[3-9]{1}[0-9]{8}/',
            'sex' => 'required',
            'client_members' => 'required',
            'client_home' => 'required',
            'client_bedroom' => 'required',
            'client_toilet' => 'required',
            'task' => 'required',


        ]);

        // $task=array();
        // $task= $request->task;
        // $data['task']=implode(",",$task);

        $data= array();
        $data['client_name']= $request->client_name;
        $data['client_address']= $request->client_address;
        $data['client_email']= $request->client_email;
        $data['client_phone']= $request->client_phone;
        $data['sex']= $request->sex;
        $data['client_members']= $request->client_members;
        $data['client_home']= $request->client_home;
        $data['client_bedroom']= $request->client_bedroom;
        $data['client_toilet']= $request->client_toilet;
        $data['task']=json_encode($request->task) ;
        $data['client_txt']= $request->client_txt;
        $data['created_at']=Carbon::now();
        $data['updated_at']=Carbon::now();
        DB::table('housemaidform_client_tbl')->insert($data);

        alert()->success('Form Submitted Successfully')->persistent('Close')->autoclose(5500);
        return back();
        //return back()->with('message_sent', 'Form Submit Successfully.');
    }

}
