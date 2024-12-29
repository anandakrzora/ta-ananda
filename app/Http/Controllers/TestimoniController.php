<?php

namespace App\Http\Controllers;

use App\Models\Testimoni;
use Illuminate\Http\Request;

class TestimoniController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $testimoni = Testimoni::all();
        return view('dashboard.testimoni.index', compact('testimoni'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view ('dashboard.testimoni.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // dd(
        //     $request->name,
        //     $request->star,
        //     $request->review,
        //     $request->file('image')
        // );
        $request->validate([
            'name'=> 'required',
            'star' => 'required',
            'review' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        

        if ($request->hasFile('image')) {
            $extension = $request->file('image')->getClientOriginalExtension();
            $imageName =  'Gambar'.'-' . uniqid() . '.' . $extension;
            $request->file('image')->move(public_path('img/testimoni'), $imageName);
        }

        Testimoni::create([
            'name' => $request['name'],
            'star' => $request['star'],
            'review' => $request['review'],
            'image' => $imageName,
        ]);

        return redirect()->route('testimoni.index')->with('success', 'Testimoni berhasil ditambahkan');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Request $request, $id)
    {
        $testimoni = Testimoni::findOrFail($id);
        return view('dashboard.testimoni.edit', compact('testimoni'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $testimoni = Testimoni::findOrFail($id);

        $request->validate([
            'name'=> 'required',
            'star' => 'required',
            'review' => 'required',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        if ($request->hasFile('image')) {
            if ($testimoni->image) {
                $oldImagePath = public_path('img/testimoni/' . $testimoni->image);
                if (file_exists($oldImagePath)) {
                    unlink($oldImagePath);
                }
            }
            $extension = $request->file('image')->getClientOriginalExtension();
            $imageName =  'Gambar'.'-' . uniqid() . '.' . $extension;
            $request->file('image')->move(public_path('img/testimoni'), $imageName);
        } else {
            $imageName = $testimoni->image;
        }

        $testimoni->update([
            'name' => $request['name'],
            'star' => $request['star'],
            'review' => $request['review'],
            'image' => $imageName,
        ]);

        return redirect()->route('testimoni.index')->with('success', 'Testimoni berhasil diubah');
    }


    public function destroy(Request $request, $id)
    {
        $testimoni = Testimoni::findOrFail($id);
        $testimoni->delete();

        return redirect()->route('testimoni.index')->with('success', 'Testimoni berhasil dihapus');
    }
}
