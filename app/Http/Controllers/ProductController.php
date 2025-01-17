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
        $validatedData = $request->validate([
            'title' => 'required|string|max:255',
            'status' => 'required|in:dijual,terjual',
            'price' => 'required|numeric|min:1',
            'dp_price' => 'required|numeric|min:1',
            'description' => 'required|string|max:500',
            'gambar1' => 'required|image|mimes:jpeg,png,jpg|max:2048',
            'gambar2' => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
            'gambar3' => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
            'kondisi_body' => 'required|string|max:255',
            'kondisi_kelistrikan' => 'required|string|max:255',
            'kondisi_surat' => 'required|string|max:255',
            'kondisi_mesin' => 'required|string|max:255',
            'transmision' => 'required|string|max:255',
        ], [
            'title.required' => 'Nama produk wajib diisi.',
            'title.string' => 'Nama produk harus berupa teks.',
            'title.max' => 'Nama produk tidak boleh lebih dari 255 karakter.',

            'status.required' => 'Status produk wajib dipilih.',
            'status.in' => 'Status produk harus salah satu dari "Dijual" atau "Terjual".',

            'price.required' => 'Harga produk wajib diisi.',
            'price.numeric' => 'Harga produk harus berupa angka.',
            'price.min' => 'Harga produk harus lebih dari 0.',

            'dp_price.required' => 'DP harga produk wajib diisi.',
            'dp_price.numeric' => 'DP harga produk harus berupa angka.',
            'dp_price.min' => 'DP harga produk harus lebih dari 0.',

            'description.required' => 'Deskripsi produk wajib diisi.',
            'description.string' => 'Deskripsi produk harus berupa teks.',
            'description.max' => 'Deskripsi produk tidak boleh lebih dari 500 karakter.',

            'gambar1.required' => 'Gambar produk 1 wajib diunggah.',
            'gambar1.image' => 'File gambar yang diunggah harus berupa gambar.',
            'gambar1.mimes' => 'File gambar harus memiliki ekstensi jpeg, png, jpg.',
            'gambar1.max' => 'Ukuran gambar tidak boleh lebih dari 2MB.',

            'gambar2.image' => 'File gambar yang diunggah harus berupa gambar.',
            'gambar2.mimes' => 'File gambar harus memiliki ekstensi jpeg, png, jpg.',
            'gambar2.max' => 'Ukuran gambar tidak boleh lebih dari 2MB.',

            'gambar3.image' => 'File gambar yang diunggah harus berupa gambar.',
            'gambar3.mimes' => 'File gambar harus memiliki ekstensi jpeg, png, jpg.',
            'gambar3.max' => 'Ukuran gambar tidak boleh lebih dari 2MB.',

            'kondisi_body.required' => 'Kondisi body wajib diisi.',
            'kondisi_body.string' => 'Kondisi body harus berupa teks.',
            'kondisi_body.max' => 'Kondisi body tidak boleh lebih dari 255 karakter.',

            'kondisi_kelistrikan.required' => 'Kondisi kelistrikan wajib diisi.',
            'kondisi_kelistrikan.string' => 'Kondisi kelistrikan harus berupa teks.',
            'kondisi_kelistrikan.max' => 'Kondisi kelistrikan tidak boleh lebih dari 255 karakter.',

            'kondisi_surat.required' => 'Kondisi surat wajib diisi.',
            'kondisi_surat.string' => 'Kondisi surat harus berupa teks.',
            'kondisi_surat.max' => 'Kondisi surat tidak boleh lebih dari 255 karakter.',

            'kondisi_mesin.required' => 'Kondisi mesin wajib diisi.',
            'kondisi_mesin.string' => 'Kondisi mesin harus berupa teks.',
            'kondisi_mesin.max' => 'Kondisi mesin tidak boleh lebih dari 255 karakter.',

            'transmision.required' => 'Transmisi wajib diisi.',
            'transmision.string' => 'Transmisi harus berupa teks.',
            'transmision.max' => 'Transmisi tidak boleh lebih dari 255 karakter.',
        ]);

        $titleSlug = str_replace(' ', '', $validatedData['title']);

        $images = [];
        foreach (['gambar1', 'gambar2', 'gambar3'] as $key) {
            if ($request->hasFile($key)) {
                $extension = $request->file($key)->getClientOriginalExtension();
                $imageName = $titleSlug . '_' . $key . '_' . uniqid() . '.' . $extension;
                $request->file($key)->move(public_path('img/product'), $imageName);
                $images[$key] = $imageName;
            } else {
                $images[$key] = null;
            }
        }

        $data = [
            'id_user' => 1, // Harusnya sesuai autentikasi user
            'title' => $validatedData['title'],
            'status' => $validatedData['status'],
            'price' => $validatedData['price'],
            'dp_price' => $validatedData['dp_price'],
            'description' => $validatedData['description'],
            'gambar1' => $images['gambar1'],
            'gambar2' => $images['gambar2'],
            'gambar3' => $images['gambar3'],
            'kondisi_body' => $validatedData['kondisi_body'],
            'kondisi_kelistrikan' => $validatedData['kondisi_kelistrikan'],
            'kondisi_surat' => $validatedData['kondisi_surat'],
            'kondisi_mesin' => $validatedData['kondisi_mesin'],
            'transmision' => $validatedData['transmision'],
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

        if (!$product) {
            return redirect()->route('product.index')->with("error", "Produk tidak ditemukan!");
        }

        $validatedData = $request->validate([
            'title' => 'required|string|max:255',
            'status' => 'required|in:dijual,terjual',
            'price' => 'required|numeric|min:1',
            'dp_price' => 'required|numeric|min:1',
            'description' => 'required|string|max:500',
            'gambar1' => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
            'gambar2' => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
            'gambar3' => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
            'kondisi_body' => 'required|string|max:255',
            'kondisi_kelistrikan' => 'required|string|max:255',
            'kondisi_surat' => 'required|string|max:255',
            'kondisi_mesin' => 'required|string|max:255',
            'transmision' => 'required|string|max:255',
        ], [
            'title.required' => 'Nama produk wajib diisi.',
            'title.string' => 'Nama produk harus berupa teks.',
            'title.max' => 'Nama produk tidak boleh lebih dari 255 karakter.',

            'status.required' => 'Status produk wajib dipilih.',
            'status.in' => 'Status produk harus salah satu dari "Dijual" atau "Terjual".',

            'price.required' => 'Harga produk wajib diisi.',
            'price.numeric' => 'Harga produk harus berupa angka.',
            'price.min' => 'Harga produk harus lebih dari 0.',

            'dp_price.required' => 'DP harga produk wajib diisi.',
            'dp_price.numeric' => 'DP harga produk harus berupa angka.',
            'dp_price.min' => 'DP harga produk harus lebih dari 0.',

            'description.required' => 'Deskripsi produk wajib diisi.',
            'description.string' => 'Deskripsi produk harus berupa teks.',
            'description.max' => 'Deskripsi produk tidak boleh lebih dari 500 karakter.',

            'gambar1.image' => 'File gambar yang diunggah harus berupa gambar.',
            'gambar1.mimes' => 'File gambar harus memiliki ekstensi jpeg, png, jpg.',
            'gambar1.max' => 'Ukuran gambar tidak boleh lebih dari 2MB.',

            'gambar2.image' => 'File gambar yang diunggah harus berupa gambar.',
            'gambar2.mimes' => 'File gambar harus memiliki ekstensi jpeg, png, jpg.',
            'gambar2.max' => 'Ukuran gambar tidak boleh lebih dari 2MB.',

            'gambar3.image' => 'File gambar yang diunggah harus berupa gambar.',
            'gambar3.mimes' => 'File gambar harus memiliki ekstensi jpeg, png, jpg.',
            'gambar3.max' => 'Ukuran gambar tidak boleh lebih dari 2MB.',

            'kondisi_body.required' => 'Kondisi body wajib diisi.',
            'kondisi_body.string' => 'Kondisi body harus berupa teks.',
            'kondisi_body.max' => 'Kondisi body tidak boleh lebih dari 255 karakter.',

            'kondisi_kelistrikan.required' => 'Kondisi kelistrikan wajib diisi.',
            'kondisi_kelistrikan.string' => 'Kondisi kelistrikan harus berupa teks.',
            'kondisi_kelistrikan.max' => 'Kondisi kelistrikan tidak boleh lebih dari 255 karakter.',

            'kondisi_surat.required' => 'Kondisi surat wajib diisi.',
            'kondisi_surat.string' => 'Kondisi surat harus berupa teks.',
            'kondisi_surat.max' => 'Kondisi surat tidak boleh lebih dari 255 karakter.',

            'kondisi_mesin.required' => 'Kondisi mesin wajib diisi.',
            'kondisi_mesin.string' => 'Kondisi mesin harus berupa teks.',
            'kondisi_mesin.max' => 'Kondisi mesin tidak boleh lebih dari 255 karakter.',

            'transmision.required' => 'Transmisi wajib diisi.',
            'transmision.string' => 'Transmisi harus berupa teks.',
            'transmision.max' => 'Transmisi tidak boleh lebih dari 255 karakter.',
        ]);

        $titleSlug = str_replace(' ', '', $validatedData['title']);

        $images = [];
        foreach (['gambar1', 'gambar2', 'gambar3'] as $key) {
            if ($request->hasFile($key)) {
                if ($product->$key) {
                    unlink(public_path('img/product/' . $product->$key));
                }
                $extension = $request->file($key)->getClientOriginalExtension();
                $imageName = $titleSlug . '_' . $key . '_' . uniqid() . '.' . $extension;
                $request->file($key)->move(public_path('img/product'), $imageName);
                $images[$key] = $imageName;
            } else {
                $images[$key] = $product->$key;
            }
        }

        $data = [
            'id_user' => 1, // Harusnya sesuai autentikasi user
            'title' => $validatedData['title'],
            'status' => $validatedData['status'],
            'price' => $validatedData['price'],
            'dp_price' => $validatedData['dp_price'],
            'description' => $validatedData['description'],
            'gambar1' => $images['gambar1'],
            'gambar2' => $images['gambar2'],
            'gambar3' => $images['gambar3'],
            'kondisi_body' => $validatedData['kondisi_body'],
            'kondisi_kelistrikan' => $validatedData['kondisi_kelistrikan'],
            'kondisi_surat' => $validatedData['kondisi_surat'],
            'kondisi_mesin' => $validatedData['kondisi_mesin'],
            'transmision' => $validatedData['transmision'],
        ];

        $product->update($data);
        return redirect()->route('product.index')->with("updated", "Data Product Berhasil Diperbarui!");
    }

    public function destroy(string $id)
    {
        $product = Product::find($id);

        if (!$product) {
            return redirect()->route('product.index')->with("error", "Produk tidak ditemukan!");
        }

        // Menghapus gambar jika ada
        foreach (['gambar1', 'gambar2', 'gambar3'] as $key) {
            $imagePath = public_path('img/product/' . $product->$key);
            if (file_exists($imagePath) && !empty($product->$key)) {
                unlink($imagePath);
            }
        }

        $product->delete();
        return redirect()->route('product.index')->with("success", "Produk berhasil dihapus!");
    }
}
