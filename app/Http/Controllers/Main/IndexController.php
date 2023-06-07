<?php

namespace App\Http\Controllers\Main;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Collection;
use App\Models\Product;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index() {
        $categories = Category::all();
        $collections = Collection::all();
        $products = Product::paginate(6);
        return view('index', compact('categories', 'collections', 'products') );  
        }

    //Фильтр товаров
    public function indexFilter(Request $request) {
        $categories = Category::all();
        $collections = Collection::all();
        // $products = Product::paginate(6);
        // $productsQuery = Product::query();
        $productsQuery = Product::query()->with(['collection','category']); //Даниил добавил with
        

        $minPrice = $request->minPrice;
        $maxPrice = $request->maxPrice;
        // $sorto = $request->sort; $ascDesc = 'asc';
        
        /* if ($request->filled('discount')) {
            $productsQuery->where('discount', $request->discount);
        } */

        if ($minPrice) {
            $productsQuery->minPrice($minPrice);
        }
        if ($maxPrice) {
            $productsQuery->maxPrice($maxPrice);
        }

        if ($request->has('discount')) {
            $productsQuery->where('discount', '>', 0);
        }

        if ($request->has('new')) {
            $productsQuery->where('is_new', 1);
        }

        $filters = [ 'minPrice' => $minPrice, 'maxPrice' => $maxPrice, 'discount' => $request->discount, 'new' => $request->new /*,  'sort' => $sorto */ ];
        // dd($filters);
        $products = $productsQuery->paginate(6)/* ->withPath("?" . $request->getQueryString()) */;
        return view('index', compact('categories', 'collections', 'products', 'filters') ); 
    }    
}
