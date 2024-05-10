<?php

namespace App\Http\Controllers;

use App\Models\product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public function index(){
        if(Auth::user()->usertype ==='admin'){
            $product = product::all();
            return view('Admin.welcome',['product'=>$product]);
        }
        else{
            return redirect(route('home'));
        }
    }
}
