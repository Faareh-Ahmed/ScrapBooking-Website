<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ProductController extends Controller
{
    public function index()
    {
        // Retrieve all products
        $products = Product::all();
        return view('services', compact('products'));
    }

    public function create()
    {
        // Optional: Used if you need a form view for creating a product (for web apps)
    }


    public function show($id)
    {
        // Retrieve a single product
        $product = Product::findOrFail($id);

        // Add a full URL for the image path (optional for API response)
        $product->image_url = $product->image ? asset('storage/' . $product->image) : null;

        return response()->json($product);
    }

    public function edit($id)
    {
        // Optional: Used if you need a form view for editing a product (for web apps)
    }

    public function update(Request $request, $id)
    {
        // Validate the request
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'required|string',
            'delivery_time' => 'required|string',
            'image' => 'nullable|file|mimes:jpeg,png,jpg,gif|max:2048', // Validate image file
        ]);

        // Find the existing product
        $product = Product::findOrFail($id);

        $product->name = $validated['name'];
        $product->description = $validated['description'];
        $product->delivery_time = $validated['delivery_time'];

        if ($request->hasFile('image')) {
            // Delete the old image if it exists
            if ($product->image && file_exists(public_path($product->image))) {
                unlink(public_path($product->image));
            }

            // Generate a new filename: addedproduct{id}.extension
            $imageName = 'addedproduct' . $id . '.' . $request->file('image')->getClientOriginalExtension();

            // Move the new file to the public/images/ directory
            $request->file('image')->move(public_path('images'), $imageName);

            // Save the new path to the database
            $product->image = 'images/' . $imageName;
        }

        $product->save();

        return redirect()->route('products.index')->with('success', 'Product updated successfully!');}


    public function store(Request $request)
{
    // Validate the request
    $validated = $request->validate([
        'name' => 'required|string|max:255',
        'description' => 'required|string',
        'delivery_time' => 'required|string',
        'image' => 'nullable|file|mimes:jpeg,png,jpg,gif|max:2048', // Validate image file
    ]);

    $product = new Product();
    $product->name = $validated['name'];
    $product->description = $validated['description'];
    $product->delivery_time = $validated['delivery_time'];

    if ($request->hasFile('image')) {
        // Generate a unique filename: addedproduct{i}.extension
        $imageName = 'addedproduct' . (Product::max('id') + 1) . '.' . $request->file('image')->getClientOriginalExtension();

        // Move the file to the public/images/ directory
        $request->file('image')->move(public_path('images'), $imageName);

        // Save the path to the database
        $product->image = 'images/' . $imageName;
    }

    $product->save();

    return redirect()->route('products.index')->with('success', 'Product added successfully!');}

    public function destroy($id)
    {
        $product = Product::findOrFail($id);

        if ($product->image) {
            Storage::disk('public')->delete($product->image);
        }

        $product->delete();

        // Redirect back with a success message
        return redirect()->route('products.index')->with('success', 'Product deleted successfully!');
    }
}
