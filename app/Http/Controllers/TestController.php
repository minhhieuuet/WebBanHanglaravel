<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\customer;

class TestController extends Controller
{
    //
    public function test(){
    $customer=customer::all();
    return view('hi',['customer'=>$customer]);
	}
}
