<?php

namespace App\Http\Controllers;

use App\Models\Inventory;
use Illuminate\Http\Request;
use Flasher\Toastr\Prime\ToastrInterface;

class InventoryController extends Controller
{
    // Method to display the product creation form
    public function create()
    {
        return view('admin.inventoryCreate'); // Ensure this path is correct
    }

    // Method to handle form submission and store product data
    public function store(Request $request)
    {
        // Validate incoming request data
        $request->validate([
            'productName' => 'required|string|max:255',
            'productDescription' => 'required|string',
            'stock' => 'required|integer',
            'productImage' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            'productPrice' => 'required|numeric',
            'productStatus' => 'required|boolean',
            'productExpiry' => 'nullable|date',
        ]);

        // Store the uploaded image
        $imagePath = $request->file('productImage')->store('products', 'public');

        // Create the new inventory item
        Inventory::create([
            'productName' => $request->productName,
            'productDescription' => $request->productDescription,
            'stock' => $request->stock,
            'productImage' => $imagePath,
            'productPrice' => $request->productPrice,
            'productStatus' => $request->productStatus,
            'productExpiry' => $request->productExpiry,
        ]);

        // Toastr notification
        toastr()->success('Product added successfully.');

        return redirect()->route('admin.inventory')->with('success', 'Product added successfully');
    }

    // Method to display all inventory products
    public function index()
    {
        $products = Inventory::all(); // Retrieve all products from the Inventory model
        return view('admin.inventory', ['data' => $products]); // Pass products to the view
    }
}
