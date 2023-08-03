<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Product extends Model
{
    use SoftDeletes;

    protected $attributes = [
        'sort_order' => 0,
        'status' => 1
    ];

    protected $fillable = [
        'uuid',
        'title',
        'slug',
        'summary',
        'description',
        'price',
        'stock',
        'sort_order',
        'status',
    ];

    protected $casts = [
        'status' => 'boolean',
    ];


    /**
     * The "booted" method of the model.
     */
    protected static function booted(): void
    {
        static::creating(function (Product $product) {

        });

        static::created(function (Product $product) {

        });

        static::saving(function (Product $product) {
            $product->uuid = (string) \Ramsey\Uuid\Uuid::uuid4();
        });

        static::saved(function (Product $product) {

        });
    }
}
