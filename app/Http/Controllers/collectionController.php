<?php

namespace App\Http\Controllers;

use App\Models\collection;
use Illuminate\Http\Request;

class collectionController extends Controller
{
    public function index()
    {
        // Logic to retrieve and display the list of collections
        $collections = collection::all();
        return view('collections.index', compact('collections'));
    }

    public function create()
    {
        // Logic to show the form for creating a new collection
        return view('collections.form');
    }

  public function store(Request $request)
{
    $request->validate([
        'title' => 'nullable',
        'images.*' => 'nullable|image|mimes:jpeg,jpg,png,gif|max:2048',
    ]);

    $imagePaths = [];
    if ($request->hasFile('images')) {
        foreach ($request->file('images') as $image) {
            $imagePaths[] = $image->store('collections', 'public');
        }
    }

    collection::create([
        'title' => $request->title,
        'category' => $request->category,
        'price' => $request->price,
        'image' => implode(',', $imagePaths),
    ]);

    return redirect()->route('collection.index')->with('success', 'Collection created.');
}




 public function edit($id)
    {
        $collection = collection::findOrFail($id);
        return view('collections.form', compact('collection'));
    }

public function update(Request $request, $id)
{
    $collection = collection::findOrFail($id);

    $request->validate([
        'title' => 'required',
        'images.*' => 'nullable|image|mimes:jpeg,jpg,png,gif|max:2048',
    ]);

    $imagePaths = explode(',', $collection->image ?? '');

    if ($request->hasFile('images')) {
        foreach ($request->file('images') as $image) {
            $imagePaths[] = $image->store('collections', 'public');
        }
    }

    $collection->update([
        'title' => $request->title,
        'category' => $request->category,
        'price' => $request->price,
        'image' => implode(',', $imagePaths),
    ]);

    return redirect()->route('collection.index')->with('success', 'Collection updated.');
}


   

   

    public function delete($id)
    {
        $collection = collection::findOrFail($id);
        // Delete the images from storage if necessary
        $imagePaths = explode(',', $collection->image ?? '');
        foreach ($imagePaths as $imagePath) {
            if (file_exists(public_path('storage/' . $imagePath))) {
                unlink(public_path('storage/' . $imagePath));
            }
        }
        // Delete the collection from the database
        $collection->delete();

        return redirect()->route('collection.index')->with('success', 'Collection deleted successfully.');
    }
}
