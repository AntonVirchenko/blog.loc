<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function show() {
    	$header = "Coming Soon";
    	$message = "goplae.co.uk is coming soon but in the meantime check out this page and sign up to our newsletter for more information";
    	return view('index')->with(["message"=>$message,"header"=>$header]);
    }
}
