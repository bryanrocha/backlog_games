<?php

namespace App\Http\Controllers;

use App\Backlog;
use App\User;
use App\Console;
use App\Game;
use Illuminate\Http\Request;

class BacklogController extends Controller
{

     public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $id = auth()->user()->id;
        $user = User::find($id);

        return view('backlogs.index')->with('backlogs', $user->backlogs);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $consoles = Console::all()->sortBy('name');

        $cons_array = array();

        foreach($consoles as $console){
            $cons_array[$console->id] = $console->name;
        }

        return view('backlogs.create')->with('consoles', $cons_array);
    }

    public function getGamesByConsole($id)
    {
        $games = Game::where('console_id', $id)->get();
        
        $games_array = array();

        foreach($games as $game){
            $games_array[$game->id] = $game->name;
        }

        return $games_array;
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $backlog = new Backlog;

        $backlog->user_id = auth()->user()->id;
        $backlog->game_id = $request->input('game_id');
        $backlog->status = $request->input('status');
        $backlog->start_date = $request->input('start_date');
        $backlog->last_update = $request->input('last_update');
        $backlog->finish_date = $request->input('finish_date');

        $backlog->save();

        return redirect('/backlogs');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Backlog  $backlog
     * @return \Illuminate\Http\Response
     */
    public function show(Backlog $backlog)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Backlog  $backlog
     * @return \Illuminate\Http\Response
     */
    public function edit(Backlog $backlog)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Backlog  $backlog
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Backlog $backlog)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Backlog  $backlog
     * @return \Illuminate\Http\Response
     */
    public function destroy(Backlog $backlog)
    {
        //
    }
}
