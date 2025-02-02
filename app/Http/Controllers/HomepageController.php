<?php

namespace App\Http\Controllers;

use App\Models\Galery;
use App\Models\Product;
use App\Models\Testimoni;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomepageController extends Controller
{
    public function index()
    {
        $testimoni = Testimoni::orderBy('created_at', 'desc')->take(5)->get();
        $galery = Galery::all();
        $product = Product::where('status', 'dijual')
            ->orderBy('created_at', 'desc')
            ->take(4)
            ->get(['id', 'title', 'price', 'transmision', 'passenger', 'gambar1', 'status']);
        return view('public.index', compact('product', 'testimoni', 'galery'));
    }

    public function detail(string $id)
    {
        $product = Product::find($id);
        // dd($product);
        return view('public.detail-product', compact('product'));
    }

    public function allProduct()
    {
        $product_dijual = Product::where('status', 'dijual')
            ->orderBy('created_at', 'desc')
            ->get(['id', 'title', 'price', 'transmision', 'passenger', 'gambar1', 'status']);

        $product_terjual = Product::where('status', 'terjual')
                    ->orderBy('created_at', 'desc')
                    ->limit(5) // Membatasi hanya 5 produk dengan status 'terjual'
                    ->get(['id', 'title', 'price', 'transmision', 'passenger', 'gambar1', 'status']);

        // Gabungkan produk 'dijual' dan 'terjual'
        $product = $product_dijual->merge($product_terjual);
        return view('public.all-product', compact('product'));
    }

    public function login()
    {
        return view('dashboard.login');
    }


    public function dologin(Request $request)
    {
        $request->validate([
            'email' => 'required',
            'password' => 'required'
        ], [
            'email.required' => 'Email wajib diiisi',
            'password.required' => 'password wajib diiisi'
        ]);

        $infoLogin = [
            'email' => $request->email,
            'password' => $request->password,
        ];

        if (Auth::attempt($infoLogin)) {
            return redirect('/dashboard');
        } else {
            return redirect('/login')->withErrors('Email dan Password tidak sesuai!')->withInput();
        }
    }

    public function logout()
    {
        Auth::logout();
        return redirect()->route('login');
    }

    public function dashboard()
    {
        $totalProducts = Product::count();
        $soldProducts = Product::where('status', 'terjual')->count();
        $forSaleProducts = Product::where('status', 'dijual')->count();
        return view('dashboard.main', compact('totalProducts', 'soldProducts', 'forSaleProducts'));
    }
}
