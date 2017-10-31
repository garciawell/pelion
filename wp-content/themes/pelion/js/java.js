	
 
//detects the start of an ajax request being made
$(document).on("sf:ajaxstart", ".searchandfilter", function(){
  console.log("ajax start");
});

//detects when the ajax request has finished and the content has been updated
// - add scripts that apply to your results here
$(document).on("sf:ajaxfinish", ".searchandfilter", function(){
	console.log("ajax complete");
	//so load your lightbox or JS scripts here again
});

//an event fired when S&F is initialised and S&F scripts have been loaded
$(document).on("sf:init", ".searchandfilter", function(){
	console.log("S&F JS initialised");
});

//depending on where you add your JS, sometimes its necessary to wrap the above events in a function (as is standard practice):
(function ( $ ) {
	"use strict";
	
	$(document).on("sf:init", ".searchandfilter", function(){
		console.log("S&F JS initialised");
	});
}(jQuery));