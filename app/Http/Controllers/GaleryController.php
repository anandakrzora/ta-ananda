<?php

namespace App\Http\Controllers;

use App\Models\Galery;
use Illuminate\Http\Request;

class GaleryController extends Controller
{
    public function index()
    {
        $galery =Galery::all();
        return view('dashboard.galery.index', compact('galery'));
    }

    public function create()
    {
        return view('dashboard.galery.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ],[
            'image.required' => 'Gambar wajib diisi',
            'image.image' => 'File harus berupa gambar',
            'image.mimes' => 'File harus berupa gambar dengan format jpeg, png, jpg, gif, svg',
            'image.max' => 'Ukuran gambar maksimal 2MB',
        ]);
        if ($request->hasFile('image')) {
            $extension = $request->file('image')->getClientOriginalExtension();
            $imageName =  'Gambar'.'-' . uniqid() . '.' . $extension;
            $request->file('image')->move(public_path('img/galeri'), $imageName);
        }

        Galery::create([
            'image' => $imageName,
        ]);

        return redirect()->route('galery.index');
    }

    public function destroy($id)
    {
        $galery = Galery::find($id);
        $galery->delete();

        return redirect()->route('galery.index');
    }

}
