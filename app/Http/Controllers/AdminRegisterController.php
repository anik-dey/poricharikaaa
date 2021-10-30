<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Carbon;
use Session;

class AdminRegisterController extends Controller
{
    public function show()
    {
        return view('pages.admin.adminregister');
    }

    public function saveregister(Request $request)
    {
        //dd(request()->all());
        $validated = $request->validate([
            'name' => 'required| regex:/^[A-Za-z][A-Za-z\'\-]+([\ A-Za-z][A-Za-z\'\-]+)*/',
            'email' => 'required|email',
             //'client_phone' => 'required|max:11|min:11|',
             'password' => 'required|min:8|',
             'password_confirmation' => 'required',
             'mypass' => 'required',

        ]);

        $data= array();
        $data['name']= $request->name;
        $data['email']= $request->email;
        $data['password']= Hash::make($request->password);
        $data['role_as']="admin";
        $data['created_at']=Carbon::now();
        $data['updated_at']=Carbon::now();
        $data['image']="public/image/abc";
        $mypass=$request->mypass;
        $password=$request->password;
        $password_confirmation=$request->password_confirmation;

            if($password==$password_confirmation)
            {
                $user = DB::table('users')->find( Auth::user()->id);
                if (Hash::check($mypass, $user->password))
                {
                    DB::table('users')->insert($data);
                    alert()->success('Admin Register Successfully')->persistent('Close')->autoclose(5500);
                    return back();
                }
                else{
                    alert()->warning('Admin Password Does Not Match')->persistent('Close')->autoclose(5500);
                    return back();
                }
            }
            else
            {
                alert()->error('Confirm Password Does Not Match')->persistent('Close')->autoclose(5500);
                return back();
            }



    }
}
