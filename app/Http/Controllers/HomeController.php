<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        $categories = Category::all();
        $products = Product::query()->orderByDesc('id')->paginate();

        return (view('home.main', compact('categories', 'products')));
    }
}
