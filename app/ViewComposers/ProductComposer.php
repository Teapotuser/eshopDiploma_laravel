<?php

namespace App\ViewComposers;

use App\Models\Product;
use Illuminate\Contracts\View\View;

class ProductComposer
{
    public function compose(View $view): View
    {
        return $view->with('products', Product::all());
    }
}