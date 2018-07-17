<?php

namespace App\Http\Controllers;

use App\Backlog;
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

        return $user->backlogs();
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
