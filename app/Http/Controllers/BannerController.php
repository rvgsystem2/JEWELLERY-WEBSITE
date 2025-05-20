<?php

namespace App\Http\Controllers;

use App\Models\Banner;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;


class BannerController extends Controller
{
    public function index()
    {
        // Fetch all banners
        $bannerData = Banner::all();
        // Pass the banners to the view
        return view('banners.index', compact('bannerData'));
    }

    public function create()
    {
        return view('banners.create');
    }

  public function store(Request $request)
{
    $validated = $request->validate([
        'title' => 'nullable|string|max:255',
        'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        'url' => 'nullable|url',
        'status' => 'nullable|in:active,inactive',
    ]);

    if ($request->hasFile('image')) {
        $validated['image'] = $request->file('image')->store('banners', 'public');
    }

    Banner::create($validated);
    return redirect()->route('banner.index')->with('success', 'Banner created successfully.');
}

public function edit($id)
{
    $banner = Banner::findOrFail($id);
    return view('banners.create', compact('banner'));
}

public function update(Request $request, $id)
{
    $banner = Banner::findOrFail($id);

    $validated = $request->validate([
        'title' => 'nullable|string|max:255',
        'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        'url' => 'nullable|url',
        'status' => 'nullable|in:active,inactive',
    ]);

    if ($request->hasFile('image')) {
        if ($banner->image) {
            Storage::disk('public')->delete($banner->image);
        }
        $validated['image'] = $request->file('image')->store('banners', 'public');
    }

    $banner->update($validated);
    return redirect()->route('banner.index')->with('success', 'Banner updated successfully.');
}


    public function delete($id)
    {
        $banner = Banner::findOrFail($id);
        Storage::disk('public')->delete($banner->image);

        $banner->delete();

        return redirect()->route('banner.index')->with('success', 'Banner deleted successfully.'); 
    }
}
