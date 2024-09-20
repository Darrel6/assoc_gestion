<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Newsletter;


class HomeController extends Controller
{
    public function welcome()
    {
        return view('welcome');
    }
 

 
    public function store(Request $request)
    {
        $email = $request->email;  // Assuming email is stored in request->email
    
    
        if (! Newsletter::isSubscribed($email)) {
            Newsletter::subscribePending($request->email);
            
            return view('welcome')->with('success', 'Email address is subscribed');
    
        } else {
            // Handle the case where the email is already subscribed (optional)
            return redirect()->back()->with('error', 'Email address is already subscribed');
        }
    }
    
    
}