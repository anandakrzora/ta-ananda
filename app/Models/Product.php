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
        'dp_price',
        'description',
        'gambar1',
        'gambar2',
        'gambar3',
        'kondisi_body',
        'kondisi_kelistrikan',
        'kondisi_surat',
        'kondisi_mesin',
        'transmision',
    ];
    public function user()
    {
        return $this->belongsTo(User::class, 'id_user');
    }
}
