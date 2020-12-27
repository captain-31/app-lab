// Price Js

$( document ).ready( function() {

	$( '#annually-btn' ).addClass('app-no-btn');

	$( '#annually-btn' ).click( function() {
		$( '#annually-btn' ).removeClass('app-no-btn');  
  		$( '#monthly-btn' ).addClass('app-no-btn');
  		$( '#monthly-price' ).text("$19");
  		$( '#annually-price' ).text("$69");
	});

	$( '#monthly-btn' ).click(function(){
		$( '#monthly-btn' ).removeClass('app-no-btn');  
		$( '#annually-btn' ).addClass('app-no-btn');
		$( '#monthly-price' ).text("$0");
		$( '#annually-price' ).text("$99");
	}); 

});