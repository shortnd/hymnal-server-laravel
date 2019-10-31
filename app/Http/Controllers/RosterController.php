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
        $roster->players()->attach($request->players);

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
        $players = Player::get();
        if ($roster->players->count()) {
            $players = Player::where('id', '!=', $roster->players->pluck('id'))->get();
        }

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
        $validData = $this->validate($request, [
            'rosterTitle' => 'required|min:3',
            'season' => 'required'
        ]);

        dd($request->add_players);

        $roster->players()->attach($request->add_players);

        $roster->players()->detach($request->current_players);
        
        $roster->update($validData);

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
