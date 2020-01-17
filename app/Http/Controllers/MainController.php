<?php

namespace App\Http\Controllers;

use App\Category;
use Illuminate\Http\Request;

class MainController extends Controller
{
    public function index()
    {
        return view('index');
    }
    public function categories()
    {
        $categories = Category::all();
        return view('categories',compact('categories'));
    }

}
