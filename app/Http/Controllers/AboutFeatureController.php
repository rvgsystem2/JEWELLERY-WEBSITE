<?php

namespace App\Http\Controllers;

use App\Models\AboutFeature;
use Illuminate\Http\Request;

class AboutFeatureController extends Controller
{
    public function index()
    {
        // Logic to retrieve and display the list of about features
          $features = AboutFeature::latest()->get();

        return view('about_features.index', compact('features'));
    }

    public function create()
    {
        // Logic to show the form for creating a new about feature
        return view('about_features.form');
    }

  
public function store(Request $request)
{
    $data = $request->validate([
        'title' => 'nullable|string|max:255',
        'subtitle' => 'nullable|string|max:255',
        'icon' => 'nullable|string|max:255',
        'status' => 'required|in:active,inactive',
    ]);

    AboutFeature::create($data);
    return redirect()->route('about.features.index')->with('success', 'Feature created successfully.');
}

public function edit($id)
{
    $aboutFeature = AboutFeature::findOrFail($id);
    return view('about_features.form', compact('aboutFeature'));
}

public function update(Request $request, $id)
{
    $aboutFeature = AboutFeature::findOrFail($id);

    $data = $request->validate([
        'title' => 'nullable|string|max:255',
        'subtitle' => 'nullable|string|max:255',
        'icon' => 'nullable|string|max:255',
        'status' => 'required|in:active,inactive',
    ]);

    $aboutFeature->update($data);
    return redirect()->route('about.features.index')->with('success', 'Feature updated successfully.');
}

public function destroy($id)
{
    AboutFeature::findOrFail($id)->delete();
    return redirect()->route('about.features.index')->with('success', 'Feature deleted.');
}
}
