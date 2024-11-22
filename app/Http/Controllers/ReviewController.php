<?php

namespace App\Http\Controllers;

use App\Models\Review;
use App\Models\Game;
use Illuminate\Http\Request;

class ReviewController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
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
    public function store(Request $request, Game $game)
    {

        // validates the rating and length of the comment
      $request->validate([
        'rating' => 'required|integer|min:1|max:5',
        'comment' => 'nullable|string|max:1000',
      ]);

    //   creates the review
      $game->reviews()->create([
        'user_id'=> auth()->id(),
        'rating'=>  $request->input('rating'),
        'comment'=> $request->input('comment'),
        'game_id'=> $game->id
      ]);

      // redirectts when review is created to index
      return redirect()->route('games.show', $game)->with('success', 'Review added successfully!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Review $review)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Review $review)
    {
      //check if the user has admin
       if (auth()->user()->id !== $review->user_id && auth()->user()->role !== 'admin'){
        return redirect()->route('games.index')->with('error', 'Access denied.');
       }

       return view('reviews.edit', compact('review'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Review $review)
    {
       $review->update($request->only(['rating', 'comment']));

      
       return redirect()->route('games.show', $review->game_id)
       ->with('success', 'Review updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Review $review)
    {
      $review->delete();

      return to_route('games.index')->with('success', 'Review deleted successfully!');
    }
}
