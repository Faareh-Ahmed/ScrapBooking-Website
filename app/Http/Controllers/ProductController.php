<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    // Display the list of products
    public function index()
    {
        $products = session()->get('products', []);
        return view('services', compact('products'));
    }

    // Add a new product
    public function store(Request $request)
    {
        // Validate input
        $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'required|string',
            'delivery_time' => 'required|string',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif',
        ]);

        // Store the image and get the path
        $imagePath = $request->file('image')->store('products', 'public');

        // Create new product
        $product = [
            'name' => $request->name,
            'description' => $request->description,
            'delivery_time' => $request->delivery_time,
            'image_path' => $imagePath,
        ];

        // Retrieve current products from session or initialize if empty
        $products = session()->get('products', []);
        $products[] = $product;

        // Save products to session
        session()->put('products', $products);

        return redirect()->route('products.index');
    }

    // Delete a product
    public function destroy($index)
    {
        $products = session()->get('products', []);

        if (isset($products[$index])) {
            unset($products[$index]);
            $products = array_values($products); // Reindex array
            session()->put('products', $products);
        }

        return redirect()->route('products.index');
    }
}
