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
        return $this->hasOne(Stock::class, "id", "product_id");
    }

    public function avaliation()
    {
        return $this->hasMany(Avaliation::class, "id", "product_id");
    }
}

