@extends('layouts.app')

@section('content')
	<h1>Edit Game</h1>
	<hr>
	{{Form::open(['action' => ['GameController@update', $game->id], 'method' => 'PUT'])}}

		<div class="form-group">
			{{Form::label('', 'Name')}}
			{{Form::text('name', $game->name, ['class' => 'form-control', 'placeholder' => 'Name'])}}
		</div>

		<div class="form-group">
			{{Form::label('', 'Console')}}
			{{Form::select('console_id', $consoles, $game->console_id, ['class' => 'form-control', 'placeholder' => 'Pick a console'])}}
		</div>

		<div class="form-group">
			{{Form::label('', 'Developer')}}
			{{Form::select('company_id', $companies, $game->company_id, ['class' => 'form-control','placeholder' => 'Pick a company'])}}
		</div>

		<div class="form-group">
			{{Form::label('', 'Launch Date')}}
			{{Form::date('launch_date', $game->launch_date, ['class' => 'form-control'])}}
		</div>

		<div class="form-group">
			{{Form::label('', 'Description')}}
			{{Form::textarea('description', $game->description, ['class' => 'form-control', 'placeholder' => 'About the game'])}}
		</div>

		{{Form::submit('Save', ['class' => 'btn btn-primary'])}}

	{{Form::close()}}
@endsection()