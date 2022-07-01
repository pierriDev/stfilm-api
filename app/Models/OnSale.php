<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OnSale extends Model
{
    use HasFactory;

    protected $fillable = [
        'active',
        'value',
        'product_id',
    ];

    public function product()
    {
        return $this->belongsTo(Product::class, "product_id", "id");
    }


}
