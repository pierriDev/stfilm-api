<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TransactionsProducts extends Model
{
    use HasFactory;

    protected $fillable = [
        'transaction_id',
    ];

    public function transaction()
    {
        return $this->belongsTo(Transactions::class, "id", "transction_id")
    }
}
