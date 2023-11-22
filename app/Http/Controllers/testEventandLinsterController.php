<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Purchase;
use App\Events\UserSubscribed;

class testEventandLinsterController extends Controller
{

    public function show(){
        return view('testEventandLinster');
    }
    public function page(){

        $pageshow = Purchase::all();  
        return view('page',compact('pageshow'));

    }

    public function showSave(Request $request){
        Purchase::create([
            'email' =>$request->email,
            'password'=>$request->password
        ]);
        
        return redirect()->route('page');
        
    }

    public function index(){
        return view('index');
    }

    public function subscribe(Request $request)
    {
        
        $request->validate([
            'email'=>'required|unique:newsletter,email'
        ]);
        event(new UserSubscribed($request->input('email')));
        // pass in a object of the Usersubscribed
        // passing the email that't getting from the input field
        return back();
    }
}
