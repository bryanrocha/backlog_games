@extends('layouts.app')

@section('content')
	<h1>New Game</h1>
	<hr>
	{{Form::open(['action' => 'GameController@store', 'method' => 'POST'])}}

		<div class="form-group">
			{{Form::label('', 'Name')}}
			{{Form::text('name', '', ['class' => 'form-control', 'placeholder' => 'Name'])}}
		</div>

		<div class="form-group">
			{{Form::label('', 'Console')}}
			{{Form::select('console_id', $consoles, null, ['class' => 'form-control', 'placeholder' => 'Pick a console'])}}
		</div>

		<div class="form-group">
			{{Form::label('', 'Developer')}}
			{{Form::select('company_id', $companies, null, ['class' => 'form-control','placeholder' => 'Pick a company'])}}
		</div>

		<div class="form-group">
			{{Form::label('', 'Launch Date')}}
			{{Form::date('launch_date', '', ['class' => 'form-control'])}}
		</div>

		<div class="form-group">
			{{Form::label('', 'Description')}}
			{{Form::textarea('description', '', ['class' => 'form-control', 'placeholder' => 'About the game'])}}
		</div>

		{{Form::submit('Save', ['class' => 'btn btn-primary'])}}

	{{Form::close()}}
@endsection()