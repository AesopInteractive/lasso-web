(function( $ ) {

	$(document).ready(function(){

		var sel 	= $('#lasso-theme--time__slide')
		,	freq    = $('#lasso-theme--time__freq')
		,	show    = $('#lasso-theme--time__times')
		,	min		= $('#lasso-theme--time__min')
		,	wk		= $('#lasso-theme--time__min-week')
		,	mth		= $('#lasso-theme--time__min-month')
		,	yr		= $('#lasso-theme--time__min-year')
		,	time    = 0.30 // 30 seconds per preview


		// roudn to half
		function roundHalf( num ) {
		    num = Math.round( num * 2 ) / 2;
		    return num;
		}

	    sel.slider({
	      	value:10,
	      	min: 1,
	      	max: 25,
	      	step: 1,
	      	animate:'fast',
	      	slide: function( event, ui ) {

	      		var val 	= ui.value * time
	      		,	valRaw 	= ui.value

	      		// show the value
	      		show.text( valRaw )

	      		var minPerPost = roundHalf( val / 60 * 100 )
	      		$(this).attr('data-min', minPerPost );

	      		// miniutes
	        	min.text( minPerPost )

	        	// minutes per week if blogging three days a week
	        	wk.text( minPerPost * 3  )

	        	// minutes per month if blogging three days a week
	        	mth.text( minPerPost * 12 )

	        	// hours per year based on blogging three days a week
	        	yr.text( roundHalf( minPerPost * 144 / 60 ) )
	      	}
	    });

	});

})( jQuery );



