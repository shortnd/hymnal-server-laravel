<?php

namespace App\Http\Controllers;

use App\Player;
use App\Roster;
use Illuminate\Http\Request;

class RosterController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('rosters.index')->withRosters(Roster::all());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $players = Player::get([
            "id",
            "name",
            "flag",
            "image"
        ]);
        return view('rosters.create')->withPlayers($players);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validData = $this->validate($request, [
            'rosterTitle' => 'required',
            'season' => 'required',
        ]);

        $roster = Roster::create($validData);
        if (isset($request->players)) {
            $roster->players()->attach($request->players);
        }

        return redirect()->route('rosters.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Roster  $roster
     * @return \Illuminate\Http\Response
     */
    public function show(Roster $roster)
    {
        return view('rosters.show')->withRoster($roster);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Roster  $roster
     * @return \Illuminate\Http\Response
     */
    public function edit(Roster $roster)
    {
        $players = Player::whereDoesntHave('rosters', function ($q) use ($roster) {
            $q->where('roster_id', $roster->id);
        })->get();

        return view('rosters.edit')->withRoster($roster)->withPlayers($players);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Roster  $roster
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Roster $roster)
    {
        // dd($request);
        $validData = $this->validate($request, [
            'rosterTitle' => 'required|min:3',
            'season' => 'required'
        ]);

        if ($request->has('players')) {
            $roster->players()->attach($request->players);
        }

        if ($request->has('current_players')) {
            $roster->players()->detach($request->current_players);
        }

        return redirect()->route('rosters.show', $roster);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Roster  $roster
     * @return \Illuminate\Http\Response
     */
    public function destroy(Roster $roster)
    {
        $roster->delete();
        return redirect()->route('rosters.index');
    }
}
