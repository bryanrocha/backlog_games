@extends('layouts.app')

@section('content')
	<h1>New Console</h1>
	<hr>
	{{Form::open(['action' => 'ConsoleController@store', 'method' => 'POST'])}}

		<div class="form-group">
			{{Form::label('', 'Name')}}
			{{Form::text('name', '', ['class' => 'form-control', 'placeholder' => 'Name'])}}
		</div>

		<div class="form-group">
			{{Form::label('', 'Company')}}
			{{Form::select('company_id', $companies, null, ['class' => 'form-control','placeholder' => 'Pick a company'])}}
		</div>

		{{Form::submit('Save', ['class' => 'btn btn-primary'])}}

	{{Form::close()}}
@endsection()