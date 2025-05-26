<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use GuzzleHttp\Promise\Create;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ProductController extends Controller
{
    public function index()
    {
        // Fetch products from the database
        $products = Product::all();
        return view('product.index', compact('products'));
    }

    public function create()
    {
        $categories = Category::all();
        return view('product.create', compact('categories'));
    }
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'title' => 'required|string|max:255',
            'price' => 'required|string|max:255',
            'sort_description' => 'required|string|max:255',
            'description' => 'required|string',
            'status' => 'required|in:active,inactive',
            'tag' => 'nullable|string|max:255',
            'image' => 'nullable|image|max:2048',
            'images.*' => 'nullable|image|max:2048',
            'category_id' => 'required|exists:categories,id',
        ]);
        // Handle image upload if exists
        if ($request->hasFile('image')) {
            $validated['image'] = $request->file('image')->store('products', 'public');
        }

        $images = [];
        if ($request->hasFile('images')) {
            foreach ($request->file('images') as $img) {
                $images[] = $img->store('products', 'public');
            }
        }
        $validated['images'] = implode(',', $images);

        $product = Product::create($validated);

        return redirect()->route('product.index')->with('success', 'Product created successfully.');
    }
    public function edit($id)
    {
        $product = Product::findOrFail($id);
        $categories = Category::all();
        return view('product.create', compact('product', 'categories'));
    }
    public function update(Request $request, $id)
    {
        $validated = $request->validate([
            'name' => 'nullable|string|max:255',
            'title' => 'nullable|string|max:255',
            'price' => 'nullable|string|max:255',
            'sort_description' => 'nullable|string|max:255',
            'description' => 'nullable|string',
            'status' => 'required|in:active,inactive',
            'tag' => 'nullable|string|max:255',
            'image' => 'nullable|image|max:2048',
            'images.*' => 'nullable|image|max:2048',
            'category_id' => 'required|exists:categories,id',
        ]);

        $product = Product::findOrFail($id);

        // Handle image upload if exists
        if ($request->hasFile('image')) {
            $validated['image'] = $request->file('image')->store('products', 'public');
        }

        $images = [];
        if ($request->hasFile('images')) {
            foreach ($request->file('images') as $img) {
                $images[] = $img->store('products', 'public');
            }
        }
        if (!empty($images)) {
            $validated['images'] = implode(',', $images);
        }

        $product->update($validated);


        return redirect()->route('product.index')->with('success', 'Product updated successfully');
    }

    public function delete($id)
    {
        // Handle the product deletion logic here
        $product = Product::findOrFail($id);
        if ($product->image) {
            // Delete the image from storage
            Storage::disk('public')->delete($product->image);
        }
        $product->delete();
        return redirect()->route('product.index')->with('success', 'Product deleted successfully.');
    }
}
