<?php

namespace App\Http\Controllers;

use App\Models\About;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class AboutController extends Controller
{
    public function index()
    {
         $abouts = About::latest()->get();
        return view('about.index', compact('abouts'));
    }

    public function create()
    {
        return view('about.form');
    }

   public function store(Request $request)
{
    $validated = $request->validate([
        'title' => 'nullable|string|max:255',
        'subtitle' => 'nullable|string|max:255',
        'description' => 'nullable|string',
        'image' => 'nullable|image|mimes:jpg,jpeg,png,gif|max:2048',
    ]);

    if ($request->hasFile('image')) {
        $validated['image'] = $request->file('image')->store('abouts', 'public');
    }

    About::create($validated);
    return redirect()->route('about.index')->with('success', 'About section created successfully.');
}

public function edit($id)
{
    $about = About::findOrFail($id);
    return view('about.form', compact('about'));
}

public function update(Request $request, $id)
{
    $about = About::findOrFail($id);

    $validated = $request->validate([
        'title' => 'nullable|string|max:255',
        'subtitle' => 'nullable|string|max:255',
        'description' => 'nullable|string',
        'image' => 'nullable|image|mimes:jpg,jpeg,png,gif|max:2048',
    ]);

    if ($request->hasFile('image')) {
        if ($about->image) {
            Storage::disk('public')->delete($about->image);
        }
        $validated['image'] = $request->file('image')->store('abouts', 'public');
    }

    $about->update($validated);
    return redirect()->route('about.index')->with('success', 'About section updated successfully.');
}

    public function delete($id)
    {
        // Delete the about entry by ID
        // Redirect or return a response
        $about = About::findOrFail($id);
        if ($about->image) {
            Storage::disk('public')->delete($about->image);
        }
        $about->delete();
        return redirect()->route('about.index')->with('success', 'About section deleted successfully.');
    }
}
