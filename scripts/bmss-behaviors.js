// JavaScript Document
$(function() {
	$('.showhide1').click(function() {  
		$('.assets1').slideToggle("slow"); 
		$(this).find('.expand, .collapse').toggleClass('hide');
	});


	$('.showhide2').click(function() {  
		$('.assets2').slideToggle("slow"); 
		$(this).find('.expand, .collapse').toggleClass('hide');
	});


	//Growl
	$('#include').click(function() {
		    $.jGrowl("2 Cross Browser Review Trades included.");
		});
	//


	$('#comment-btn').click(function() {
		    $.jGrowl("your comments have been logged.");
		});

	$('li.bucket , .review-item .close , .review-item #done').click(function() {
		console.log("clicked me!");
	    $('.review-item').animate({ left: parseInt($('.review-item').css('left'),10) == 960 ? 0 : 960 });
	    $('#send-btn').toggleClass("disabled");
	    $('#close-btn').toggleClass("disabled");
  	});



	$('h2.report').click(function() {
		//$('.buckets').css("display","block");
		$(".buckets").fadeToggle("fast");
		$('h2.report').addClass("selected");
	});



// http://stackoverflow.com/questions/11978995/how-to-change-color-of-svg-image-using-css-jquery-svg-image-replacement//

	jQuery('img.svg').each(function(){
            var $img = jQuery(this);
            var imgID = $img.attr('id');
            var imgClass = $img.attr('class');
            var imgURL = $img.attr('src');

            jQuery.get(imgURL, function(data) {
                // Get the SVG tag, ignore the rest
                var $svg = jQuery(data).find('svg');

                // Add replaced image's ID to the new SVG
                if(typeof imgID !== 'undefined') {
                    $svg = $svg.attr('id', imgID);
                }
                // Add replaced image's classes to the new SVG
                if(typeof imgClass !== 'undefined') {
                    $svg = $svg.attr('class', imgClass+' replaced-svg');
                }

                // Remove any invalid XML tags as per http://validator.w3.org
                $svg = $svg.removeAttr('xmlns:a');

                // Replace image with new SVG
                $img.replaceWith($svg);
                console.log(imgClass);

            }, 'xml');

        });

	//
	
	$('.default').dropkick();
	$('.tooltip').tooltipster();
	
	 $('#example tr').click(function() {
        var href = $(this).find("a").attr("href");
        if(href) {
            window.location = href;
        }
    });
	
	
$('.wiggle').click(function() {
    $(".add-violations").animate({ left: parseInt($(".add-violations").css('left'),10) == 10 ? -$(".add-violations").outerWidth() :0 });
  });
	
	// Toggle for FAID detail
	

	$("#acct-info").click(function(){
		$("#client-view").slideUp("slow");
		$("#faid-view").slideUp("slow");
		$("#acct-view").slideToggle("slow");
	});
	$("#client-info").click(function(){
		$("#acct-view").slideUp("slow");
		$("#faid-view").slideUp("slow");
		$("#client-view").slideToggle("slow");
			
	});
	$("#faid-info").click(function(){
		$("#client-view").slideUp("slow");
		$("#acct-view").slideUp("slow");
		$("#faid-view").slideToggle("slow");
			
	});    
	
	$("#acct-view .close").click(function(){
		$("#acct-view").slideToggle("slow");
		
	});
	$("#client-view .close").click(function(){
		$("#client-view").slideToggle("slow");
		
	});
	$("#faid-view .close").click(function(){
		$("#faid-view").slideToggle("slow");
		
	});  
	$("#sec-view .close").click(function(){
		$("#sec-view").slideUp("slow");
		$(".sec.launch-detail").closest('tr').animate({"height" : 27}, 600);
		
	}); 
	$("#rr-view .close").click(function(){
		$("#rr-view").slideUp("slow");
		$(".rr.launch-detail").closest('tr').animate({"height" : 27}, 600);
		
	}); 
	
	
	//
	$(".launch-detail").click(function() {
 var thisRow = $(this).closest('tr'); //parent row of the input or whatever is the click trigger
 var conDiv = $(this).data("href"); //returns #content1 - id of the content div you want shown
 var conH = $(conDiv).height(); //corresponding content div height
 var rowH = $(thisRow).height(); // this row height
 var newrowH = conH + rowH +5; //the new row height
 var posL = $(thisRow).position().left; // left position that div needs to be
 var posT = $(thisRow).position().top + rowH + 3 + 'px';  // top position that div needs to be ** not working properly!!
 

   if ( $(conDiv).is(":visible") ) {
       //$(thisRow).css({"height" : "auto"});
      // $(conDiv).css({"display" : "none", "left": "auto", "top" : "auto" });
	   $(thisRow).animate({"height" : 27}, 600);
	   $(conDiv).slideUp("slow");
   } else  {
       //reset all rows to normal height
       $("tr").css({"height" : "auto"}); 
       //expand the height of this row
       $(thisRow).animate({"height" : newrowH}, 600);
       
       // reset all content divs.. hide them             
     	 $("[id*=view]").css({"display" : "none", "left": "auto", "top" : "auto"}); 
	  
       //show the one you want
	   //$(conDiv).css({"display" : "block", "left": posL, "top" : posT});
	   $(conDiv).css({"left": posL, "top" : posT});
	   $(conDiv).slideDown("slow");
	 
   }
}); 
	
	
		 

});