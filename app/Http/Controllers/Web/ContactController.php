<?php

namespace App\Http\Controllers\web;

use App\Http\Controllers\Controller;
use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
        /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $aboutData = Contact::all();
        return view('contact.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('contact.create');
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

        Contact::create($request->all());

        return redirect()->route('contact.index')
                         ->with('success', 'About section created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $about = Contact::findOrFail($id);
        return view('contact.show', compact('about'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $about = Contact::findOrFail($id);
        return view('contact.edit', compact('about'));
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

        $about = Contact::findOrFail($id);
        $about->update($request->all());

        return redirect()->route('contact.index')
                         ->with('success', 'About section updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $about = Contact::findOrFail($id);
        $about->delete();

        return redirect()->route('contact.index')
                ->with('success', 'About section deleted successfully.');
    }
}
