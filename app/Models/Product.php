<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use App\Models\Category;
use App\Models\Collection;
use App\Models\ProductImages;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Builder;

class Product extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $fillable = [
        'article', 'title', 'description', 'price', 'category_id', 'collection_id', 'size', 'picture', 'discount', 'is_new', 'height', 'width', 'depth', 'material', 'material_filling', 'age_from', 'care_recommend'
       ];
    
    public function category() : BelongsTo {
        return $this->belongsTo(Category::class);
    }   
    public function collection() : BelongsTo {
        return $this->belongsTo(Collection::class);
    }  

    //округление цены и расчет копеек
    public function price(): Attribute {
        return Attribute::make(get: fn($value) => round($value / 100, 2));
    }

    // есть ли скидка у продукта, используется во View
    public function issetDiscount(): bool
    {
        return $this->discount ? true : false;
    }

    /// Даниил добавил тут: для фильтра
    public function scopeMaxPrice(Builder $query, $price)
    {
        return $query->whereRaw('ROUND(`products`.`price` * (100 - `products`.`discount`) / 100,2)<=' . $price*100);
    }
    public function scopeMinPrice(Builder $query, $price)
    {
        return $query->whereRaw('ROUND(`products`.`price` * (100 - `products`.`discount`) / 100,2)>=' . $price*100);
    }


    //Подсчитывает цену со скидкой, округляет + копейки
    public function getPriceWithDiscount(): float
    {
        if ($this->discount == 0)
            return $this->price;

        $price = round($this->price * (100 - $this->discount) / 100, 2);
        return $price;
    }
    // Продукт имеет много images (карусель на странице товара)
    public function images()
	{
		return $this->hasMany(ProductImages::class, 'product_id', 'id');
	}
}
