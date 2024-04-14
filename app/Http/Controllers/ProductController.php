<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $products = Product::all();
        return view('partials.products', ['products' => $products]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            "productName" => "required",
            "productDescription" => "required",
            "productPrice" => "nullable|numeric|min:0",
            "productQuantity" => "nullable|integer|min:0",
            "productImage" => "nullable|image|mimes:jpeg,png,jpg,gif|max:2048",
        ]);

        // Store the image in the 'public/images' directory
        if ($request->hasFile('productImage')) {
            $path = $request->file('productImage')->store('images', 'public');
        } else {
            $path = null; // If no image is provided
        }

        // Create a new Product instance and fill it with the form data
        $product = new Product();
        $product->name = $request->input('productName');
        $product->description = $request->input('productDescription');
        $product->price = $request->input('productPrice');
        $product->quantity = $request->input('productQuantity');
        $product->user_id = Auth::id();
        $product->image_url = $path; // Save the image path to the database

        // Save the product to the database
        $product->save();
        dd($product);
        // Redirect back with success message
        // return redirect()->back()->with('success', 'Product added successfully.');
    }


    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
