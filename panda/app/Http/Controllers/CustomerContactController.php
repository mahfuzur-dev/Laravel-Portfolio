<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use Illuminate\Http\Request;

class CustomerContactController extends Controller
{
    function customer_contact(Request $request){
        $request->validate([
            'name'=>'required',
            'email'=>'required',
            'message'=>'required',
        ]);
        Customer::insert([
            'name'=>$request->name,
            'email'=>$request->email,
            'subject'=>$request->subject,
            'message'=>$request->message,
        ]);
        return redirect()->route('welcome')->with('success','Your Message is  Successfully Send');
    }
    function customer_view(){
        $all_customer = Customer::all();
        return view('backend.contact.view_contact',[
            'all_customer'=>$all_customer,
        ]);
    }
    function customer_delete($customer_id){
        Customer::find($customer_id)->delete();
        return back();
    }
}
