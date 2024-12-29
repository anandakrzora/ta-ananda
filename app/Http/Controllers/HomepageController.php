<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class HomepageController extends Controller
{
    public function index()
    {
        $product = Product::where('status', 'dijual')
            ->orderBy('created_at', 'desc')
            ->take(4)
            ->get(['title', 'price', 'transmision', 'passenger']);
        return view('public.index', compact('product'));
    }
}
