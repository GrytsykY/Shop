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
        return view('categories',compact('category'));
    }
    public function product($category, $product = null)
    {
        $category = Category::all();
        return view('product',compact('product'));
    }

}
