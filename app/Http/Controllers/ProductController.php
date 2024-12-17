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
        return view('index', compact('product'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("create");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data= [
            'id_user'=>1,
            'title'=> $request->title,
            'price'=>$request->price,
            'description'=>$request->description,
            'status'=>$request->status
        ];
        // dd($data);
        Product::create($data);
        return redirect()->route('product.index');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $p= Product::find($id);
        return view('edit', compact("p"));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $data= [
            'id_user'=>1,
            'title'=> $request->title,
            'price'=>$request->price,
            'description'=>$request->description,
            'status'=>$request->status
        ];

        $product=Product::find($id);
        $product->update($data);
        return redirect()->route('product.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $product=Product::find($id);
        $product->delete();
        return redirect()->route('product.index');
    }
}
