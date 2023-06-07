<?php

namespace App\Http\Controllers;
use App\Models\Category;
use App\Models\Collection;
use App\Models\Product;
use Illuminate\Http\Request;

class SearchController extends Controller
{
    //Функция при нажатии на кнопку Search
    public function find(Request $request) {
        $search = $request->input('sSearch');
        // $productsQuery = Product::query();
        $products =  Product::where('title', 'LIKE', '%' . $search . '%')
        ->orWhere('description', 'LIKE', '%' . $search . '%')
        ->orWhere('article', 'LIKE', '%' . $search . '%')
        ->paginate(6);
        $categories = Category::all();
        $collections = Collection::all();
            
        return view('search', compact('categories', 'collections', 'products') );
    }

    //Функция ajax при печатании в текстовом поле поиска
    public function search(Request $request) {
        $search = $request->input('sSearch');
       
        // $productsQuery = Product::query();
        $products_found =  Product::where('title', 'LIKE', '%' . $search . '%')
        ->orWhere('description', 'LIKE', '%' . $search . '%')
        ->orWhere('article', 'LIKE', '%' . $search . '%')
        ->get();
              
        $total_products_found_count = $products_found->count();
        $products_found = $products_found->take(3);// тут вставить то число сколько хотите чтобы отображалось результатов в выпадашке
            
        return view('search-results-mini', compact('products_found', 'total_products_found_count'));
    }
}
