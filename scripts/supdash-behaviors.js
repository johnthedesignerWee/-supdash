// JavaScript Document
$(function() {

	$('.action.del').click(function() {
	  $(this).parents(".announcement").fadeOut(500, function() {           
	    $(this).parents(".announcement").remove();               
	  });
	});


	
		 

});