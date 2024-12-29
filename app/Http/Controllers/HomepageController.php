<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Testimoni;
use Illuminate\Http\Request;

class HomepageController extends Controller
{
    public function index()
    {
        $testimoni = Testimoni::orderBy('created_at', 'desc')->take(5)->get();
        $product = Product::where('status', 'dijual')
            ->orderBy('created_at', 'desc')
            ->take(4)
            ->get(['id','title', 'price', 'transmision', 'passenger','gambar1']);
        return view('public.index', compact('product', 'testimoni'));
    }

    public function detail(string $id)
    {
        $product = Product::find($id);
        // dd($product);
        return view('public.detail-product', compact('product'));
    }

    public function allProduct()
    {
        $product = Product::where('status', 'dijual')
        ->orderBy('created_at', 'desc')
        ->get(['id','title', 'price', 'transmision', 'passenger','gambar1']);
        return view('public.all-product', compact('product'));
    }
}
