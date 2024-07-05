<?php

namespace App\Http\Controllers\web;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $aboutData = Product::all();
        return view('product.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('product.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required',
            'image' => 'required|string|max:255',
            'image_product' => 'required|string|max:255',
            'title_product' => 'required|string|max:255',
            'desc_product' => 'required',
        ]);

        Product::create($request->all());

        return redirect()->route('product.index')
                         ->with('success', 'About section created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $about = Product::findOrFail($id);
        return view('product.show', compact('about'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $about = Product::findOrFail($id);
        return view('product.edit', compact('about'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required',
            'image' => 'required|string|max:255',
            'image_product' => 'required|string|max:255',
            'title_product' => 'required|string|max:255',
            'desc_product' => 'required',
        ]);

        $about = Product::findOrFail($id);
        $about->update($request->all());

        return redirect()->route('product.index')
                         ->with('success', 'About section updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $about = Product::findOrFail($id);
        $about->delete();

        return redirect()->route('product.index')
                ->with('success', 'About section deleted successfully.');
    }
}
