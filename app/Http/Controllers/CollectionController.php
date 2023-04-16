<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Collection;
use App\Models\Product;

class CollectionController extends Controller
{
    public function show(string $code)
{
    $categories = Category::all();
    $collections = Collection::all();
    $collection = Collection::where('code', $code)->first();
    $products = Product::where('collection_id', $collection->id)->paginate(6);
    // dd($collection);
    return view('collection', compact('collection', 'categories', 'collections', 'products'));
}
}
