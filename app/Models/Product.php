<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Product
 * @package App\Models
 */
class Product extends Model
{
    use SoftDeletes;

    /**
     * @var int[]
     */
    protected $attributes = [
        'sort_order' => 0,
        'status' => 1
    ];

    /**
     * @var string[]
     */
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

    /**
     * @var string[]
     */
    protected $casts = [
        'status' => 'boolean',
    ];

    protected $with = [
        'categories'
    ];

    /**
     * The "booted" method of the model.
     */
    protected static function booted(): void
    {

        static::retrieved(function (Product $product) {

        });

        static::creating(function (Product $product) {

        });

        static::created(function (Product $product) {

        });

        static::saving(function (Product $product) {
            $product->uuid = (string)\Ramsey\Uuid\Uuid::uuid4();
        });

        static::saved(function (Product $product) {
            cache()->forget('home_products');
        });
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function categories()
    {
        return $this->belongsToMany(Category::class, 'product_categories');
    }

    public function scopePublished(Builder $builder)
    {
        return $builder->where('status', 1);
    }

    public function scopeSortByOrder(Builder $builder)
    {
        return $builder->orderBy('sort_order', 'asc');
    }
}
