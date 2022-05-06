<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transactions extends Model
{
    use HasFactory;

    protected $fillable = [
        'value',
        'payment_method',
        'installments',
        'hasInstallments',
        'buyer_id',
    ];

    public function buyer()
    {
        return $this->belongsTo(buyer::class, "buyer_id", "id");
    }

    public function products()
    {
        return $this->hasMany(TransactionsProducts::class, "id", "transction_id")
    }

    public function charges()
    {
        return $this->hasMany(Charges::class, "id", "transction_id")
    }
}
