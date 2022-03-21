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

    public function product()
    {
        return (view('catalog.product'));
    }
}
