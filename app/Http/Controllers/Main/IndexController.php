<?php

namespace App\Http\Controllers\Main;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Collection;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index() {
        $categories = Category::all();
        $collections = Collection::all();
        return view('index', compact('categories', 'collections')); 
        }
}
