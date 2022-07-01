<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'image',
        'description',
        'value',
        'weight',
        'dimensions',
        'category_id',
    ];

    public function category()
    {
        return $this->belongsTo(Category::class, "category_id", "id");
    }

    public function stock()
    {
        return $this->hasOne(Stock::class, "product_id", "id");
    }

    public function avaliation()
    {
        return $this->hasMany(Avaliation::class, "product_id", "id");
    }

    public static function getHighlights(Product $products) {
        $highlights = $products;

        return $highlights;
    }

    public function onSale()
    {
        return $this->hasOne(OnSale::class, "product_id", "id");
    }

}

