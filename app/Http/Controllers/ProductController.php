<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    public $product;
    public function index()
    {
        return view('product.add');
    }

    public function store(Request $request)
    {

        Product::newProduct($request);
        return redirect()->back()->with('message','Product info save successfully');

    }

    public function show()
    {
        $this->product = Product::orderBy('id','desc')->get();

        return view('product.manage',['products'=>$this->product]);
    }

    public function edit($id)
    {
        $this->product = Product::find($id);
        return view('product.edit',['product'=>$this->product]);

    }

    public function update(Request $request,$id)
    {



        $this->product = Product::find($id);
        $this->product->product_name = $request->product_name;
        $this->product->category_name = $request->category;
        $this->product->brand_name = $request->brand;
        $this->product->price = $request->price;
        $this->product->description = $request->description;

        $this->product->save();

        return redirect('/manage-product')->with('message','Product info updated  successfully');


    }
    public function destroy($id)
    {


        $this->product = Product::find($id);
        $this->product->delete();
        return redirect('/manage-product')->with('message','Product Deleted successfully');


    }
}
