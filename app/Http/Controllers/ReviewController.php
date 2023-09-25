<?php

namespace App\Http\Controllers;

use App\Models\Review;
use Illuminate\Http\Request;

class ReviewController extends Controller
{
    public function store(Request $request)
    {
        // Validate the incoming request data here
        $validatedData = $request->validate([
            'rating' => 'required|integer|min:1|max:5', // Adjust validation rules as needed
            'comment' => 'nullable|string|max:255', // Adjust validation rules as needed
        ]);

        // Create a new review
        Review::create([
            'user_id' => auth()->id(), // Assuming you're using authentication
            'rating' => $validatedData['rating'],
            'space_id' => 2,
            'comment' => $validatedData['comment'],
        ]);

        // Redirect or return a response as needed
        return redirect()->back()->with('msg', 'Review added successfully');
    }
}
