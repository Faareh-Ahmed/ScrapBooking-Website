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
        return response()->json($products);
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
            'image' => 'nullable|string',
        ]);

        $product = Product::create($validated);
        return response()->json($product, 201);
    }

    public function show($id)
    {
        // Retrieve a single product
        $product = Product::findOrFail($id);
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
            'image' => 'nullable|string',
        ]);

        $product = Product::findOrFail($id);
        $product->update($validated);

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
