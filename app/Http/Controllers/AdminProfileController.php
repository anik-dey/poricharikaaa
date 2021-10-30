<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Carbon;
use Illuminate\Support\Str;
use Session;


class AdminProfileController extends Controller
{
    public function view()
    {
        return view('pages.admin.adminprofile');
    }

    public function saveprofile(Request $request)
    {  //dd(request()->all());
        $validated = $request->validate([
            'name' => 'required| regex:/^[A-Za-z][A-Za-z\'\-]+([\ A-Za-z][A-Za-z\'\-]+)*/',
            'email' => 'required|email',
             //'client_phone' => 'required|max:11|min:11|',
             //'password' => '|min:8|',
             //'password_confirmation' => 'required',
             'mypass' => 'required',
             //'image' => 'required|image|mimes:jpeg,png,jpg|max:2048',


        ]);

        $data= array();
        $data['name']= $request->name;
        $data['email']= $request->email;
        //$data['password']= Hash::make($request->password);
       // $data['role_as']="admin";
       // $data['created_at']=Carbon::now();
        $data['updated_at']=Carbon::now();
        $mypass=$request->mypass;
        $password=$request->password;
        $password_confirmation=$request->password_confirmation;

        $image = $request->file('image');






                $user = DB::table('users')->find( Auth::user()->id);
                if (Hash::check($mypass, $user->password))
                {

                    if ($image) {
                        $image_name = Str::random(40);
                        $ext = strtolower($image->getClientOriginalExtension());
                        $image_full_name = $image_name . '.' . $ext;
                        $upload_path = 'image/';
                        $image_url = $upload_path . $image_full_name;
                        $success = $image->MOVE($upload_path, $image_full_name);
                        if ($success) {
                            $data['image'] = $image_url;
                            $update = \DB::table('users') ->where('id', Auth::user()->id) ->limit(1) ->update( [ 'name' => $data['name'], 'email' => $data['email'], 'image' => $data['image'] ]);

                        }
                    }
                   // $data['image'] = $image_url;
                   // $update = \DB::table('users') ->where('id', Auth::user()->id) ->limit(1) ->update( [ 'name' => $data['name'], 'email' => $data['email'], 'image' => $data['image'] ]);
                    $update = \DB::table('users') ->where('id', Auth::user()->id) ->limit(1) ->update( [ 'name' => $data['name'], 'email' => $data['email'] ]);
                    //DB::table('users')->insert($data);
                    alert()->success('Update Profile Successfully')->persistent('Close')->autoclose(5500);
                    return back();
                }
                else{
                    alert()->warning('Admin Password Does Not Match')->persistent('Close')->autoclose(5500);
                    return back();
                }




    }
    public function show()
    {
        return view('pages.admin.adminchangepass');
    }

    public function savepassword(Request $request){
        //dd(request()->all());
        $validated = $request->validate([

            'password' => 'required|min:8|',
            'password_confirmation' => 'required',
            'mypass' => 'required',
        ]);
        $data= array();
        $data['password']= Hash::make($request->password);
        $data['updated_at']=Carbon::now();
        $mypass=$request->mypass;
        $password=$request->password;
        $password_confirmation=$request->password_confirmation;
        if($password==$password_confirmation){
            $user = DB::table('users')->find( Auth::user()->id);
            if (Hash::check($mypass, $user->password))
                {
                    $update = \DB::table('users') ->where('id', Auth::user()->id) ->limit(1) ->update( [ 'password' => $data['password'] ]);
                    alert()->success('Password Update Successfully')->persistent('Close')->autoclose(5500);
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
