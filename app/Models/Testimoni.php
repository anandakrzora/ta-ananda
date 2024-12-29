<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Testimoni extends Model
{
    protected $table = 'testimoni';

    protected $fillable = [
        'name',
        'star',
        'review',
        'image',
    ];

    protected $casts = [
        'star' => 'integer',
    ];
}
