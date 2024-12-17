<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Product;


class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Product::create([
            'id_user' => 1,
            'title' => 'Honda CBR 150R',
            'status' => 'dijual',
            'price' => 25000000,
            'description' => 'Motor sport dengan desain aerodinamis dan performa tinggi.',
        ]);
    }
}
