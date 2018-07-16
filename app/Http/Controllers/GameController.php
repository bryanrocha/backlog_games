<?php

namespace App\Http\Controllers;

use App\Game;
use App\Company;
use App\Console;
use Illuminate\Http\Request;

class GameController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $games = Game::all();
        return view('games.index')->with('games', $games);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $companies = Company::all();
        $consoles = Console::all()->sortBy('company_id');

        $comp_array = array();
        $cons_array = array();

        foreach($companies as $company){
            $comp_array[$company->id] = $company->name;
        }

        foreach($consoles as $console){
            $cons_array[$console->id] = $console->name;
        }

        return view('games.create')->with('companies', $comp_array)->with('consoles', $cons_array);
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
        $game = new Game;

        $game->name = $request->input('name');

        $game->console_id = $request->input('console_id');

        $game->company_id = $request->input('company_id');

        $game->launch_date = $request->input('launch_date');

        $game->description = $request->input('description');

        $game->save();

        return redirect('/games/create');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Game  $game
     * @return \Illuminate\Http\Response
     */
    public function show(Game $game)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Game  $game
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $game = Game::find($id);

        $companies = Company::all();
        $consoles = Console::all()->sortBy('company_id');

        $comp_array = array();
        $cons_array = array();

        foreach($companies as $company){
            $comp_array[$company->id] = $company->name;
        }

        foreach($consoles as $console){
            $cons_array[$console->id] = $console->name;
        }

        return view('games.edit')->with('game', $game)->with('companies', $comp_array)->with('consoles', $cons_array);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Game  $game
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $game = Game::find($id);

        $this->validate($request, [
            'name' => 'required',
            'console_id' => 'required',
            'company_id' => 'required',
            'launch_date' => 'required',
            'description' => 'required'
        ]);

        $game->name = $request->input('name');
        $game->console_id = $request->input('console_id');
        $game->company_id = $request->input('company_id');
        $game->launch_date = $request->input('launch_date');
        $game->description = $request->input('description');

        $game->save();

        return redirect('/games');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Game  $game
     * @return \Illuminate\Http\Response
     */
    public function destroy(Game $game)
    {
        //
    }
}
