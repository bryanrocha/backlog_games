
$('#console_id').on('change', function(e){
	console.log(e);

	var console = e.target.value;

	$('#game') = console;

	console.log(console);
});