@extends('layouts.app')

@section('content')
	<h1>My Backlog</h1>
	<hr>
	@if(count($backlogs) >= 1)
		<table class="table table-striped table-sm w-auto">
			<th>Game</th>
			<th>Start Date</th>
			<th>Last Update</th>
			<th></th>
			@foreach($backlogs as $backlog)
				<tr>
					<td>{{ $backlog->game->name }}</td>
					<td>{{ $backlog->start_date }}</td>
					<td>{{ $backlog->last_update }}</td>						
					<td></td>
				</tr>
			@endforeach
		</table>
	@else
		<h3>No game.</h3>
	@endif
@endsection()