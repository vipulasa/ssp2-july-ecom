<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    protected $fillable = [
        'user_id',
        'is_paid',
        'total',
    ];

    protected $with = ['products'];

    public function products()
    {
        return $this
            ->belongsToMany(Product::class)
            ->withPivot('quantity', 'total');
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
