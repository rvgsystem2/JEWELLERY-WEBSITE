<?php

namespace App\Http\Controllers;

use App\Models\ProductDetails;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Symfony\Component\HttpFoundation\Session\Storage\SessionStorageFactoryInterface;

class ProductDetailsController extends Controller
{
    public function index()

    {

         $product = ProductDetails::with('product')->get();
    return view('products.details.index', compact('product'));
    }

    public function create()
    {
        return view('product.details.create');
    }

  public function store(Request $request, $productId)
{
    $request->validate([
        'images.*' => 'required|image|mimes:jpg,jpeg,png|max:2048',
    ]);

    if ($request->hasFile('images')) {
        foreach ($request->file('images') as $image) {
            $path = $image->store('products/details', 'public');
            ProductDetails::create([
                'product_id' => $productId,
                'image' => $path
            ]);
        }
    }

    return back()->with('success', 'Images uploaded successfully.');
}

    public function edit($id)
    {
        return view('product.details.edit', compact('id'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'images.*' => 'required|image|mimes:jpg,jpeg,png|max:2048',
        ]);

        if ($request->hasFile('images')) {
            foreach ($request->file('images') as $image) {
                $path = $image->store('products/details', 'public');
                ProductDetails::where('id', $id)->update([
                    'image' => $path
                ]);
            }
        }

        return back()->with('success', 'Images updated successfully.');
    }

    public function delete($id)
    {
        $productDetail = ProductDetails::findOrFail($id);
        // Delete the image file from storage
        if ($productDetail->image) {
            Storage::disk('public')->delete($productDetail->image);
        }
        $productDetail->delete();

        return back()->with('success', 'Image deleted successfully.');
    }
}
