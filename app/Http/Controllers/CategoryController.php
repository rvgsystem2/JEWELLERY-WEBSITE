<?php

namespace App\Http\Controllers;

use App\Models\Category;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class CategoryController extends Controller
{
    public function index()
    {
        // Logic to retrieve and display the list of categories
        $categories = Category::all();
        return view('categories.index', compact('categories'));
    }

    public function create()
    {
        // Logic to show the form for creating a new category
        return view('categories.form');
    }

  public function store(Request $request)
{
    $validated = $request->validate([
        'name' => 'nullable|string|max:255',
        'title' => 'nullable|string|max:255',
        'status' => 'required|in:active,inactive',
        'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
    ]);

    if ($request->hasFile('image')) {
        $validated['image'] = $request->file('image')->store('categories', 'public');
    }

    Category::create($validated);
    return redirect()->route('category.index')->with('success', 'Category created successfully.');
}



public function update(Request $request, $id)
{
    $category = Category::findOrFail($id);

    $validated = $request->validate([
        'name' => 'nullable|string|max:255',
        'title' => 'nullable|string|max:255',
        'status' => 'required|in:active,inactive',
        'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
    ]);

    if ($request->hasFile('image')) {
        if ($category->image) {
            Storage::disk('public')->delete($category->image);
        }
        $validated['image'] = $request->file('image')->store('categories', 'public');
    }

    $category->update($validated);
    return redirect()->route('category.index')->with('success', 'Category updated successfully.');
}

    public function edit($id)
    {
        $category = Category::findOrFail($id);
        return view('categories.form', compact('category'));
    }

   

    public function delete($id)
    {
        $category = Category::findOrFail($id);
        if ($category->image) {
            Storage::disk('public')->delete($category->image);
        }
        // Check if the category has any associated products
        $category->delete();

        return redirect()->route('category.index')->with('success', 'Category deleted successfully.');
    }
}
