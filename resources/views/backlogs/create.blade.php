@extends('layouts.app')

@section('content')
	<h1 id="backlog_title">New Backlog</h1>
	<hr>
	{{Form::open(['action' => 'BacklogController@store', 'method' => 'POST'])}}

		<div class="form-group">
			{{Form::label('', 'Console')}}
			{{Form::select('console_id', $consoles, null, ['class' => 'form-control', 'id' => 'console_id', 'placeholder' => 'Pick a console'])}}
		</div>

		<div class="form-group">
			{{Form::label('game', 'Game')}}
			{{Form::select('game_id', [], null, ['class' => 'form-control', 'id' => 'game_id', 'placeholder' => 'Pick a game'])}}
		</div>

		<div class="form-group">
			{{Form::label('', 'Start Date')}}
			{{Form::date('start_date', '', ['class' => 'form-control'])}}
		</div>

		<div class="form-group">
			{{Form::label('', 'Last Update')}}
			{{Form::date('last_update', '', ['class' => 'form-control'])}}
		</div>

		<div class="form-group">
			{{Form::label('','Finished?')}}
			{{Form::checkbox('finished','yes', false,['class' => 'form-control', 'id' => 'finished'])}}
			{{Form::label('finish_date_label', 'Finish date', ['id' => 'finish_date_label', 'hidden' => 'true'])}}
			{{Form::date('finish_date', '', ['class' => 'form-control', 'id' => 'finish_date_field', 'hidden' => 'true'])}}
		</div>

		<div class="form-group">
			{{Form::label('', 'Status')}}
			{{Form::textarea('status', '', ['class' => 'form-control', 'placeholder' => 'Gameplay status here'])}}
		</div>

		{{Form::submit('Save', ['class' => 'btn btn-primary', 'id' => 'btn_backlog'])}}

	{{Form::close()}}

@endsection()
