<?php

namespace App\Http\Controllers;
use App\Models\Service;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    public function index()
    {
        $services = Service::all();
        return view('admin.services', ['service' => $services]);
        // return $services;
    }
    public function create()
    {
        return view('admin.servicesCreate'); // Ensure this path is correct
    }
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'required|string',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            'price' => 'required|numeric',
        ]);

        $imagePath = $request->file('image')->store('services', 'public');

        Service::create([
            'name' => $request->name,
            'description' => $request->description,
            'image' => $imagePath,
            'price' => $request->price,
        ]);

        return redirect()->route('admin.servicesCreate')->with('success', 'Service added successfully');
    }
}
