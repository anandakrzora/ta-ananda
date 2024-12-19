<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $product = Product::all();
        return view('dashboard.product.index', compact('product'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('dashboard.product.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // dd($request->all());
        $validatedData = $request->validate([
            'title' => 'required|string|max:255',
            'status' => 'required|in:dijual,terjual',
            'price' => 'required|numeric|min:1',
            'description' => 'required|string|max:500',
            'image' => 'required|image|mimes:jpeg,png,jpg|max:2048'
        ], [
            'title.required' => 'Nama produk wajib diisi.',
            'title.string' => 'Nama produk harus berupa teks.',
            'title.max' => 'Nama produk tidak boleh lebih dari 255 karakter.',

            'status.required' => 'Status produk wajib dipilih.',
            'status.in' => 'Status produk harus salah satu dari "Dijual" atau "Terjual".',

            'price.required' => 'Harga produk wajib diisi.',
            'price.numeric' => 'Harga produk harus berupa angka.',
            'price.min' => 'Harga produk harus lebih dari 0.',

            'description.required' => 'Deskripsi produk wajib diisi.',
            'description.string' => 'Deskripsi produk harus berupa teks.',
            'description.max' => 'Deskripsi produk tidak boleh lebih dari 500 karakter.',

            'image.required' => 'Gambar produk wajib diunggah.',
            'image.image' => 'File gambar yang diunggah harus berupa gambar.',
            'image.mimes' => 'File gambar harus memiliki ekstensi jpeg, png, jpg, gif, atau svg.',
            'image.max' => 'Ukuran gambar tidak boleh lebih dari 2MB.',
        ]);

        $titleSlug = str_replace(' ', '', $validatedData['title']);

        if ($request->hasFile('image')) {
            $extension = $request->file('image')->getClientOriginalExtension();

            $imageName = $titleSlug . '_' . uniqid() . '.' . $extension;

            $imagePath = $request->file('image')->move(public_path('img/product'), $imageName);
        }

        $data = [
            'id_user' => 1,
            'title' => $validatedData['title'],
            'status' => $validatedData['status'],
            'price' => $validatedData['price'],
            'description' => $validatedData['description'],
            'image' => $imageName,
        ];

        Product::create($data);
        return redirect()->route('product.index');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $product = Product::find($id);
        return view('edit', compact("product"));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $data = [
            'id_user' => 1,
            'title' => $request->title,
            'price' => $request->price,
            'description' => $request->description,
            'status' => $request->status
        ];

        $product = Product::find($id);
        $product->update($data);
        return redirect()->route('product.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $product = Product::find($id);
        $imagePath = public_path('img/product/' . $product->image);
        if (file_exists($imagePath)) {
            unlink($imagePath);
        }
        $product->delete();
        return redirect()->route('product.index')->with("success", "Produk berhasil dihapus!");
    }
}
