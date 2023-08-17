<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ModelHit extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'model_name',
        'model_id',
        'analytic_data_type',
        'timestamp',
        'user_id',
    ];

    protected $casts = [
        'timestamp' => 'datetime',
    ];
}
