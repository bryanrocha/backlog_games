@extends('layouts.app')

@section('content')
	<h1>Games</h1>
	<hr>
	@if(count($games) >= 1)
		<table class="table table-striped table-sm w-auto">
			<th>Name</th>
			<th>Console</th>
			<th>Developer</th>
			<th>Launch Date</th>
			<th></th>
			<th></th>
			@foreach($games as $game)
				<tr>
					<td>{{ $game->name }}</td>
					<td>{{ $game->console->name }}</td>
					<td>{{ $game->company->name }}</td>
					<td>{{ $game->launch_date }}</td>
					<td>
						<a href="/games/{{$game->id}}/edit" class="btn btn-primary btn-sm">Edit</a>
					</td>						
					<td></td>
				</tr>
			@endforeach
		</table>
	@else
		<h3>No game.</h3>
	@endif
@endsection()