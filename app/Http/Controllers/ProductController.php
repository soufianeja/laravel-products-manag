<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Product;

class ProductController extends Controller
{
    public function add_category(){
        return view('products.add_category');
    }

    public function add_product(){
        $categories = Product::with('category')->get();
        return view('products.add_product', compact('categories'));
    }
    public function store_category(Request $request){
        $request->validate([
            'name'=> 'required',
        ]);
        $category = new Category();
        $category->name =$request->name;
        $category->save();
        return redirect('/add_category')->with('status', 'category added successfuly');
    }

    public function store_product(Request $request){
        $request->validate([
            'name'=> 'required',
            'category_id' => 'required',
            'price' => 'required',
        ]);
        $product = new Product();
        $product->name =$request->name;
        $product->category_id =$request->category_id;
        $product->price =$request->price;
        $product->save();
        return redirect('/add_product')->with('status', 'product added successfuly');
    }

    public function show_products(){
        $products = Product::all();
        return view('/products.show_products',compact('products'));
    }
}
