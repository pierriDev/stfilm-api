<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class buyer extends Model
{
    use HasFactory;

    protected $fillable = [
        'cep',
        'cpf',
        'birth_date',
        'address',
        'number',
        'phone',
        'user_id'
    ];

    public function user()
    {
        return $this->belongsTo(User::class, "user_id", "id");
    }

    public function avaliation()
    {
        return $this->hasMany(Avaliation::class, "id", "buyer_id"); 
    }

    public function comment()
    {
        return $this->hasMany(Comment::class, "id", "buyer_id"); 
    }
}
