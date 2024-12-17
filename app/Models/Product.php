<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table = 'product';

    protected $fillable = [
        'id_user',
        'title',
        'status',
        'price',
        'description',
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'id_user');
    }
}
