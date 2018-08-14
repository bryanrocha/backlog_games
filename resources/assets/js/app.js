
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

window.Vue = require('vue');



/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

// Vue.component('example-component', require('./components/ExampleComponent.vue'));
Vue.component('game-show', require('./components/Game.vue'));

const app = new Vue({
    el: '#app'
});



$(document).ready( function(){

	$('#console_id').change( function(){

		var id = this.value;

		$.get( '/gameconsole/' + id, function(data){
			
			$('#game_id').empty();

			var placeholder = document.createElement('option');
			$(placeholder).attr({'selected':'selected','value':''}).html('Pick a game');

			$('#game_id').append( $(placeholder) );

			$.each( data, function(id, name){
				
				var option = document.createElement('option');

				$('#game_id').append( $(option).attr('value',id).html(name) );
			} );

		} );
	});

	$('#finished').click( function(){

		if( $(this).is(':checked') ){
			$('#finish_date_label').attr('hidden',false);
			$('#finish_date_field').attr('hidden',false);
		}
		else{
			$('#finish_date_label').attr('hidden',true);
			$('#finish_date_field').attr('hidden',true);
		}
	} );

} );
