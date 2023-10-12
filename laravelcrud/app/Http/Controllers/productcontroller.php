<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\product;
use PhpParser\Node\Stmt\Return_;

class productcontroller extends Controller
{
    public function index(){
        return view('products.index',[
            'products' => product::latest()->paginate(5)
        ]);
    }
    public function create(){
        return view('products.create');
    }
    public function store(Request $request){
        //validation data
        $request->validate([
            'name' => 'required',
            'Description' => 'required',
            'image' => 'required|mimes:jpeg,jpg,png,gif|max:1000'
        ]);

        //upload image
        $imageName = time(). '.' .$request->image->extension();
        $request->image->move(public_path('products'),$imageName);
        
        $product = new product;
        $product->image = $imageName;
        $product->name = $request->name;
        $product->Description = $request->Description;

        $product->save();
        return back()->withSuccess('product created !!!!');
    }

    public function edit($id){
        
       $product = product::where('id',$id)->first();
       return view('products.edit',['product'=>$product]);
    }

    public function update(Request $request, $id ){

        $request->validate([
            'name' => 'required',
            'Description' => 'required',
            'image' => 'nullable|mimes:jpeg,jpg,png,gif|max:1000'
        ]);

        $product = product::where('id',$id)->first();

        if(isset($request->image)){
             //upload image
        $imageName = time(). '.' .$request->image->extension();
        $request->image->move(public_path('products'),$imageName);
        $product->image = $imageName;
        }
        
        $product->name = $request->name;
        $product->Description = $request->Description;

        $product->save();
        return back()->withSuccess('product updated !!!!');
    
    }
    public function destroy($id){
        $product = product::where('id',$id)->first();
        $product ->delete();
        return back()->withSuccess('product delete !!!!');
    }

    public function show($id){
        $product = product::where('id',$id)->first();
        return view('products.show',['product'=>$product]);
    }
}
