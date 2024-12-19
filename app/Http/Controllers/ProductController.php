<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        $product = Product::all();
        return view('dashboard.product.index', compact('product'));
    }


    public function create()
    {
        return view('dashboard.product.create');
    }


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
        return redirect()->route('product.index')->with("success", "Data Product Berhasil Ditambahkan!");
    }


    public function edit(string $id)
    {
        $product = Product::find($id);
        return view('dashboard.product.edit', compact("product"));
    }


    public function update(Request $request, string $id)
    {
        $product = Product::find($id);

        $validatedData = $request->validate([
            'title' => 'required|string|max:255',
            'status' => 'required|in:dijual,terjual',
            'price' => 'required|numeric|min:1',
            'description' => 'required|string|max:500',
            'image' => 'nullable|image|mimes:jpeg,png,jpg|max:2048'
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

            'image.image' => 'File gambar yang diunggah harus berupa gambar.',
            'image.mimes' => 'File gambar harus memiliki ekstensi jpeg, png, jpg, gif, atau svg.',
            'image.max' => 'Ukuran gambar tidak boleh lebih dari 2MB.',
        ]);
        if ($request->hasFile('image')) {
            if ($product->image) {
                unlink(public_path('img/product/' . $product->image));
            }

            $imageName = str_replace(' ', '', $validatedData['title']) . '_' . uniqid() . '.' . $request->file('image')->getClientOriginalExtension();
            $request->file('image')->move(public_path('img/product'), $imageName);

            $imageData = $imageName;
        } else {
            $imageData = $product->image;
        }

        $data = [
            'id_user' => 1,
            'title' => $request->title,
            'price' => $request->price,
            'description' => $request->description,
            'status' => $request->status,
            'image' => $imageData
        ];

        $product->update($data);
        return redirect()->route('product.index')->with("updated", "Data Product Berhasil Diperbarui!");
    }

    
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
