<?php

namespace App\Http\Controllers;


use App\Mail\SubscribeEmail;
use Illuminate\Http\Request;

class SubsController extends Controller
{
    public function contact(Request $request)
    {
    	

    	return redirect()->back()->with('status','Ваше сообщение принято!');
    }

   
}
