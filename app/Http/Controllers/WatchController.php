<?php

namespace App\Http\Controllers;

use App\Models\watch;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class WatchController extends Controller
{
    public function index()
    {
        $watches = Watch::all();
        return view("watches.index", compact("watches")); // Corrected way to pass data
    }

    public function create()
    {
        return view("watches.create"); // Updated to remove unnecessary variable
    }
    public function store(Request $request)
    {
    $request->validate([
        'name' => 'required|string|max:255',
        'description' => 'nullable|string',
        'price' => 'required|numeric|min:0',
        'stock' => 'required|integer|min:0',
        'imageOne' => 'nullable|image|max:51200',
    ]);

    $imageUrl = null;

    if ($request->hasFile('imageOne')) {
        // Store the image in the public/images directory
        $imagePath = $request->file('imageOne')->store('images', 'public');

        // Generate the correct URL for the stored image
        $imageUrl = Storage::url($imagePath);

        // Get the full path to the image file on the server
        $fullPath = storage_path('app/public/' . $imagePath);
    }

    // Create a new watch record
    $watch = Watch::create(array_merge(
        $request->only(['name', 'description', 'price', 'stock']),
        ['imageOne' => $imageUrl]
    ));

        // Redirect to the watches index page with a success message
        return redirect()->route('watches.index')->with('success', 'Watch added successfully!');
    }


    public function show($id)
    {
        $watch = Watch::findOrFail($id);
        return view("watches.show", compact("watch")); // Return watch details to view
    }

    public function edit($id)
    {
        $watch = Watch::findOrFail($id);
        return view("watches.edit", compact("watch")); // Return edit form with watch data
    }
    public function update(Request $request, $id)
    {
        $watch = Watch::findOrFail($id);

        $request->validate([
            'name' => 'required|string|max:255', // Ensure name is provided and is a string
            'description' => 'nullable|string',
            'price' => 'required|numeric|min:0',  // Ensure price is provided and is a positive number
            'stock' => 'required|integer|min:0',  // Ensure stock is a positive integer
            'imageOne' => 'nullable|image|max:51200',
            'imageTwo' => 'nullable|image|max:51200', // Ensure image is a valid file if provided
            'imageTree' => 'nullable|image|max:51200',
        ]);

        // Handle the image uploads
        if ($request->hasFile('imageOne')) {
            $imagePathOne = $request->file('imageOne')->store('images', 'public');
            $watch->image_one = Storage::url($imagePathOne);
        }
        if ($request->hasFile('imageTwo')) {
            $imagePathTwo = $request->file('imageTwo')->store('images', 'public');
            $watch->image_two = Storage::url($imagePathTwo);
        }
        if ($request->hasFile('imageTree')) {
            $imagePathThree = $request->file('imageTree')->store('images', 'public');
            $watch->image_three = Storage::url($imagePathThree);
        }

        // Update the watch record
        $watch->update($request->only(['name', 'description', 'price', 'stock']));

        // Redirect to the watches index page with a success message
        return redirect()->route('watches.index')->with('success', 'Watch updated successfully!');
    }

    public function destroy(Request $request, $id)
    { {
            $watch = Watch::findOrFail($id);
            $watch->delete();
            return redirect()->route('watches.index')->with('success', 'Watch deleted successfully!');
        }
    }
}
