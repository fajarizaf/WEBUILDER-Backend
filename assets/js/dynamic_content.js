$(document).ready(function() {

	

    //get List Menu Top
    function getMenu(param) {
	      $.get( "dynamic_content/getMenu/"+param+"")
		    .done(function( data ) {
		    $('.menu ul').html(data);
		  });
	}



}); 
  
  
  
  
