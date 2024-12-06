<?php
namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

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

    public function store(Request $request)
    {
        // Validate and create a new product
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'required|string',
            'delivery_time' => 'required|string',
            'image' => 'nullable|file|mimes:jpeg,png,jpg,gif', // Validate image file
        ]);

        $product = new Product();
        $product->name = $validated['name'];
        $product->description = $validated['description'];
        $product->delivery_time = $validated['delivery_time'];

        if ($request->hasFile('image')) {
            $product->image = file_get_contents($request->file('image')->getRealPath()); // Store the binary data
        }

        $product->save();

        return response()->json($product, 201);
    }

    public function show($id)
    {
        // Retrieve a single product
        $product = Product::findOrFail($id);

        // Convert binary image to a base64 string for API response (if needed)
        $product->image = $product->image ? base64_encode($product->image) : null;

        return response()->json($product);
    }

    public function edit($id)
    {
        // Optional: Used if you need a form view for editing a product (for web apps)
    }

    public function update(Request $request, $id)
    {
        // Validate and update an existing product
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'required|string',
            'delivery_time' => 'required|string',
            'image' => 'nullable|file|mimes:jpeg,png,jpg,gif', // Validate image file
        ]);

        $product = Product::findOrFail($id);
        $product->name = $validated['name'];
        $product->description = $validated['description'];
        $product->delivery_time = $validated['delivery_time'];

        if ($request->hasFile('image')) {
            $product->image = file_get_contents($request->file('image')->getRealPath()); // Update the binary data
        }

        $product->save();

        return response()->json($product);
    }

    public function destroy($id)
    {
        // Delete a product
        $product = Product::findOrFail($id);
        $product->delete();

        return response()->json(['message' => 'Product deleted successfully']);
    }
}
