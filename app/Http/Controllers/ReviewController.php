<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Validator;
use App\Models\Feedback;
use Illuminate\Http\Request;

class ReviewController extends Controller
{
     // Display all reviews
     public function index()
     {
         $reviews = Feedback::all();
         return view('reviews.index', compact('reviews'));
        // return $reviews;
     }

     public function store(Request $request)
     {

        // return $request->all();

        //  $request->validate([
        //     //  'appoint_id' => 'required|integer',
        //      'name' => 'required|string|max:255',
        //      'email' => 'required|email|max:255',
        //      'feedback' => 'required|string',
        //      'review' => 'required|integer|min:1|max:5',  // Validate star rating
        //  ]);

         Feedback::create([
            //  'apponitId	' => $request->appoint_id,
             'apponitId' => 1,
             'name' => $request->name,
             'userId' => 17,
             'email' => $request->email,
             'feedback' => $request->feedback,
             'review' => $request->review,  // Save star rating
         ]);


         return redirect()->route('reviews.index')->with('success', 'Review submitted successfully!');
     }
     public function edit($id)
     {
         $review = Feedback::findOrFail($id);
         return view('reviews.edit', compact('review'));
     }

     // Update the specified review
     public function update(Request $request, $id)
     {
         $validator = Validator::make($request->all(), [
             'feedback' => 'required|string|max:255',
             'review' => 'required|string',
         ]);

         if ($validator->fails()) {
             return redirect()->back()->withErrors($validator)->withInput();
         }

         $review = Feedback::findOrFail($id);
         $review->update($request->all());
         return redirect()->route('reviews.index')->with('success', 'Review updated successfully.');
     }

     // Remove the specified review
     public function destroy($id)
     {
         $review = Feedback::findOrFail($id);
         $review->delete();
         return redirect()->route('reviews.index')->with('success', 'Review deleted successfully.');
     }
}
