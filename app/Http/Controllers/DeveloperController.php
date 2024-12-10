<?php

namespace App\Http\Controllers;

use App\Models\Developer;
use App\Models\Game;
use Illuminate\Http\Request;

class DeveloperController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //$developers = Developer::with('developers'); //Fetch all developers
        $developers = Developer::with('games')->get(); 
        //$developers = Developer::all();
        //dd($developers);

        return view('developers.index', compact('developers')); //return view with devs
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        if (auth()->user()->role !== 'admin') {
            return redirect()->route('developer.index')->with('error', 'Access denied.'); //denies users without the correct perms, redirects to index with error message
        }
        $games = Game::all();
        return view('developers.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        if (auth()->user()->role !== 'admin') {
            return redirect()->route('developers.index')->with('error', 'Access denied.'); //denies users without the correct perms, redirects to index with error message
        }


        $validated= $request->validate([
            'name' => 'required|string|max:255',
            'about' => 'required|string|max:255',
            'website' => 'required|string|max:255',
            'image_url' => 'required|string|max:255',
            'games'=> 'array',
        ]);

        $developer = Developer::create($validated);

        if($request->has('games')) {
            $developer->games()->sync($request->games);
        }

        return redirect()->route('developers.index')->with('success', 'Developer created successfully!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Developer $developer)
    {
        $developer->load('games');
        return view('developers.show', compact('developer'));
      
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Developer $developer)
    {
        $games = Game::all();
        $developerGames = $developer->games->pluck('id')->toArray();
        return view('developers.edit', compact('developer', 'games', 'developerGames'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Developer $developer)
    {
        $validated = $request->validate([
            'name'=> 'required',
            'about'=> 'required|max:500',
            'website' => 'required',
        ]);        

        $developer->update($validated);

        if($request->has('games')) {
            $developer->games()->sync($request->games);
        }

        return redirect()->route('developers.index')->with('success', 'Developer updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Developer $developer)
    {
        $developer->games()->detach();
        $developer->delete();

        return redirect()->route('developers.index')->with('success', 'Developer deleted successfully!');
    }
}
