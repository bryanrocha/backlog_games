@extends('layouts.app')

@section('content')
	<h1>My Backlog</h1>
	<hr>
	@if(count($backlogs) >= 1)
		<table class="table table-striped table-sm w-auto">
			<th>Game</th>
			<th>Start date</th>
			<th></th>
			<th></th>
			@foreach($backlogs as $backlog)
				<tr>
					<td>{{ $backlog->game->name }}</td>
					<td>{{ $backlog->start_date }}</td>
					<td></td>						
					<td></td>
				</tr>
			@endforeach
		</table>
	@else
		<h3>No game.</h3>
	@endif
@endsection()