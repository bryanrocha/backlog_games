@extends('layouts.app')

@section('content')
	<h1>New Company</h1>
	<hr>
	{{Form::open(['action' => 'CompanyController@store', 'method' => 'POST'])}}

		<div class="form-group">
			{{Form::label('', 'Name')}}
			{{Form::text('name', '', ['class' => 'form-control', 'placeholder' => 'Name'])}}
		</div>

		{{Form::submit('Save', ['class' => 'btn btn-primary'])}}

	{{Form::close()}}
@endsection()