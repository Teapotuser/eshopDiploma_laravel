<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Collection;
use App\Models\Product;

class CategoryController extends Controller
{
    public function show(string $code)
    {
        $categories = Category::all();
        $collections = Collection::all();
        $category = Category::where('code', $code)->first();
        $products = Product::where('category_id', $category->id)->paginate(6);
        //для карусели популярных товаров
        $products_bestsellers = Product::where('category_id', $category->id)->where('is_best_selling', 1)->get();
        return view('category', compact('category', 'categories', 'collections', 'products', 'products_bestsellers'));
    }
}
