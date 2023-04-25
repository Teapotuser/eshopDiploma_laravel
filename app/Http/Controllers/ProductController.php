<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    public function show(string $article)
    {
    $product = Product::where('article', $article)->first();
    //images это метод в модели Product.php
    //mapToGroups берет одну колонку из DB (preview_path или path)
    $previews = $product->images->mapToGroups(function ($item) {
        return ['preview' => $item->preview_path];
    });
    $images = $product->images->mapToGroups(function ($item) {
        return ['path' => $item->path];
    });
        return view('product.show_product', compact('product', 'previews', 'images'));
    }
}