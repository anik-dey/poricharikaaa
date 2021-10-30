<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\ContactFormMail;
use function GuzzleHttp\Promise\all;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Carbon;
use Session;
class ContactFormController extends Controller
{
    public function store(Request $request)
    {
        // dd(request()->all());
        $validated = $request->validate([
            'contact_name' => 'required| regex:/^[A-Za-z][A-Za-z\'\-]+([\ A-Za-z][A-Za-z\'\-]+)*/',
            'contact_phone' => 'required',
            'contact_email' => 'required|email',
            'contact_message' => 'required',

        ]);

        $data = array();
        $data['contact_name'] = $request->contact_name;
        $data['contact_phone'] = $request->contact_phone;
        $data['contact_email'] = $request->contact_email;
        $data['contact_message'] = $request->contact_message;
        $data['created_at']=Carbon::now();
        $data['updated_at']=Carbon::now();
        DB::table('contact_tbl')->insert($data);
        //$data = request()->all();



        Mail::to('anik@oxdoraitech.com')->send(new ContactFormMail($data));
        alert()->success('Your Message Sent Successfully')->persistent('Close')->autoclose(3500);
        return back();
        //return back()->with('message_sent', 'We have received your message and we would like to thank you for writing to us.');
    }
}
