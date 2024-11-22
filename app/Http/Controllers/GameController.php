<?php

namespace App\Http\Controllers;

use App\Models\Game;
use Illuminate\Http\Request;

class GameController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $games = Game::all(); //Fetch all games
        return view('games.index', compact('games')); //return view with games
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        if (auth()->user()->role !== 'admin') {
            return redirect()->route('games.index')->with('error', 'Access denied.'); //denies users without the correct perms, redirects to index with error message
        }
        return view('games.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // validate the input
        $request->validate([
            'game_name'=> 'required',
            'description'=> 'required|max:500',
            'release_date'=>'required|integer',
            'image_url' => 'required',
            'genre'=> 'required',
            'platform'=> 'required'
        ]);

        // if($request->hasFile('image')) {

        //     $imageName = time().'.'.$request->image->extension();
        //     $request->image->move(public_path('images/games'), $imageName);
        // }

        Game::create([
            'game_name'=> $request->game_name,
            'description' => $request->description,
            'release_date'=>$request->release_date,
            'image_url'=>$request->image_url,
            'genre'=> $request->genre,
            'platform'=> $request->platform
        ]);

        return to_route('games.index')->with('success', 'Game created successfully!');

    }

    /**
     * Display the specified resource.
     */
    public function show(Game $game)
    {
        $game->load('reviews.user');
        return view('games.show', compact('game'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Game $game)
    {
        return view('games.edit')->with('game', $game);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Game $game)
    {    

        $request->validate([
            'game_name'=> 'required',
            'description'=> 'required|max:500',
            'release_date'=>'required|integer',
            'image_url' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            'image_url' => 'required',
            'genre'=> 'required',
            'platform'=> 'required'
        ]);        

        $data = $request->only([
            'game_name',
            'release_date',
            'image_url',
            'genre',
            'platform'
        ]);

        $game->update($data);

        return to_route('games.index')->with('success', 'Game created successfully!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Game $game)
    {
        $game->delete();

        return to_route('games.index')->with('success', 'Game deleted successfully!');
    }
}
