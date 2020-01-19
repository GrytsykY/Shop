<?php

namespace App\Http\Controllers;

use App\Category;
use App\Product;
use Illuminate\Http\Request;

class MainController extends Controller
{
    public function index()
    {
        $products = Product::all();
        return view('index',compact('products'));
    }
    public function categories()
    {
        $categories = Category::all();
        return view('categories',compact('categories'));
    }
    public function category($code)
    {
        $category = Category::where('code',$code)->first();
        return view('category',compact('category'));
    }
    public function product($category, $productCode)
    {
        $product = Product::all();
        //->firstOrFail();
        //dd($product);
        return view('product', compact('product'));
    }

}
