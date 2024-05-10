<?php

namespace App\Http\Controllers;

use App\Models\product;
use Illuminate\Http\Request;

class CartController extends Controller
{
    public function show(){
        return view('User.card');
    }
    public function store($id){
        $product = product::findOrFail($id);
        $cart = session()->get('cart',[]);
        if(isset($cart[$id])){
            $cart[$id]['qunantity'] ++ ;  
        }
        else{
            $cart[$id]=[
                "type"       => $product->type ,
                "price"      => $product->price,
                "description"=>$product->description,
                'photo'      => $product->photo,
                "qunantity"  => 1
            ];
        }
        session()->put('cart',$cart);
        return redirect()->back()->with('add_successfully','product add to cart successfully');
    }
    public function delet(Request $request){
        if($request->id){
            $cart = session()->get('cart');
            if(isset($cart[$request->id])){
                unset($cart[$request->id]);
                session()->put('cart',$cart);
        }
        }
        //session()->flash('success','product sucssfully removed');
        return redirect()->back()->with('success', 'Item deleted from session.');;
    }
}
