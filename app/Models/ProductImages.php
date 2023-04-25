<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Product;

class ProductImages extends Model
{
    use HasFactory;
    // use SoftDeletes;

    protected $fillable = [
        'product_id', 'path', 'preview_path', 'parent_id', 'type', 'counter'
       ];

    public function product()
    {
        return $this->belongsTo(Product::class, 'product_id', 'id');
    }   
}
