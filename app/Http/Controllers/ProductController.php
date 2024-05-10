<?php

namespace App\Http\Controllers;

use App\Models\product;

use Illuminate\Http\Request;
use function PHPSTORM_META\type;

class ProductController extends Controller
{
    //
    public function index(){
        $product=product::all();
        return view('User.welcome',['product'=> $product]);
    }
    public function index2(){
        $product=product::all();
        return view('Admin.welcome' ,['product'=>$product]);
    }
    public function create()
    {
        return view('Admin.addproduct');
    }

    public function store(Request $request)
    {
        
        request()->validate([
            'photo' =>'required |mimes:jpg,png,jped',
            'price' =>'required |numeric|min:1',
            'type' =>'required',
            'description' =>'required',
            'available_size' => 'required',
        ]);
        
        if ($request->type == "shirt") {
            $photo =$request-> getSchemeAndHttpHost().'/img/Shirt/'.time().'.'.$request->photo->extension();
            $request->photo->move(public_path('/img/Shirt/'),$photo);
        }
        if ($request->type=="t-shirt") {
            $photo =$request->getSchemeAndHttpHost().'/img/T-shirt/'.time().'.'.$request->photo->extension();
            $request->photo->move(public_path('/img/T-Shirt/'),$photo);
        }
        if ($request->type=="pants") {
            $photo =$request->getSchemeAndHttpHost().'/img/Pants/'.time().'.'.$request->photo->extension();
            $request->photo->move(public_path('/img/Pants/'),$photo);
        }
        if ($request->type =="jacket") {
            $photo =$request->getSchemeAndHttpHost().'/img/Jacket/'.time().'.'.$request->photo->extension();
            $request->photo->move(public_path('/img/Jacket/'),$photo);
        }
        if ($request->type== "hoody") {
            $photo =$request->getSchemeAndHttpHost().'/img/Hoody/'.time().'.'.$request->photo->extension();
            $request->photo->move(public_path('/img/Hoody/'),$photo);
        }
        $description = request()->description;
        $price = request()->price;
        $type  = $request->type;
        $size = join('-',$request->available_size);
        $product = new product;

        $product->photo=$photo;
        $product->description=$description;
        $product->price=$price;
        $product->type =$type;
        $product->available_size =$size;
        $product->save();
        return redirect()->back()->with('success' , 'photo uploaded successfully');

    }
    public function edit($id){
        $product = product::where('id',$id)->first();
        return view('Admin.edit_product',['product'=>$product]);
    }
    public function update(Request $request ,$id)
    {
        request()->validate([
            'price'=>'required',
            'description'=>'required',
            'type'=>'required',
            'available_size'=>'required'
        ]);
        $price = request()->price;
        $description=request()->description;
        $type=request()->type;
        $available_size =request()->available_size;

        $product =product::findOrFail($id);
        $product->update([
            'price'=>$price,
            'description'=>$description,
            'type'=>$type,
            'available_size'=>$available_size
        ]);
        return redirect(route('dashboard'))->with('success', 'your product update  successful.');
    }
    public function delete($id){
        $exist_item = product::where('id',$id)->first();
        $exist_item->delete();
        return back()->with('sucsessful',' *your item is delete successfully');
    }
}
