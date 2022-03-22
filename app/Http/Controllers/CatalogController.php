<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class CatalogController extends Controller
{
    public function showAllMess(Request $request)
    {
        $products = Product::query()->orderByDesc('id')->paginate();

        return view('catalog.allmess',compact( 'products'));
    }

    public function appliances(Request $request)
    {
        $products = Product::query()->paginate(15);
        return (view('catalog.appliances', compact('products')));
    }

    public function services(Request $request)
    {
        $products = Product::query()->paginate(15);
        return (view('catalog.services', compact('products')));
    }

    public function electronics(Request $request)
    {
        $products = Product::query()->paginate(15);
        return (view('catalog.electronics', compact('products')));
    }

    public function decor(Request $request)
    {
        $products = Product::query()->paginate(15);
        return (view('catalog.decor', compact('products')));
    }

    public function product()
    {
        return (view('catalog.product'));
    }
}
