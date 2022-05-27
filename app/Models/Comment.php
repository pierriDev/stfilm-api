<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    use HasFactory;

    protected $fillable = [
        'comment',
        'product_id',
        'buyer_id',
    ];

    public function product()
    {
        return $this->belongsTo(Product::class, "id", "product_id");
    }

    public function buyer()
    {
        return $this->belongsTo(buyer::class, "id", "buyer_id");
    }
}
