<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use App\Models\Category;
use App\Models\Collection;

class Product extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $fillable = [
        'article', 'title', 'description', 'price', 'category_id', 'collection_id', 'height', 'picture', 'discount'
       ];
    
    public function category() : BelongsTo {
        return $this->belongsTo(Category::class);
    }   
    public function collection() : BelongsTo {
        return $this->belongsTo(Collection::class);
    }  
}
