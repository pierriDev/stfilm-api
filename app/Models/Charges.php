<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Charges extends Model
{
    use HasFactory;

    protected $fillable = [
        'status',
        'installmentNumber',
        'paymentDate',
        'value',
        'transaction_id',
    ];

    public function transaction()
    {
        return $this->belongsTo(Transactions::class, "transction_id", "id")
    }
}
