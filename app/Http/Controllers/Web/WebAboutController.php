<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Models\About;
use Illuminate\Http\Request;

class WebAboutController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $aboutData = About::all();
        return view('about.index', compact('aboutData'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('about.create');
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

        About::create($request->all());

        return redirect()->route('about.index')
                         ->with('success', 'About section created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $about = About::findOrFail($id);
        return view('about.show', compact('about'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $about = About::findOrFail($id);
        return view('about.edit', compact('about'));
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

        $about = About::findOrFail($id);
        $about->update($request->all());

        return redirect()->route('about.index')
                         ->with('success', 'About section updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $about = About::findOrFail($id);
        $about->delete();

        return redirect()->route('about.index')
                ->with('success', 'About section deleted successfully.');
    }
}
