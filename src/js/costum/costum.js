

$( document ).ready(function() {
	jQuery(".room-item .desc").fadeTo(0, 0);
	$.easing.easeOutCubic = function (x, t, b, c, d) {
    	return c*((t=t/d-1)*t*t + 1) + b;
	}
	jQuery(".room-item").on("mouseenter", function() {
		// console.log("mouseentered");
	        var speed = 700;
	        jQuery(this).find(".desc").stop(true).animate({
	            'height': "100%",
	            'margin-top': "20px",
	            "opacity": "100"
	        }, speed, 'easeOutCubic');
	        jQuery(this).find(".overlay").stop(true).animate({
	            'height': "100%",
	            'margin-top': "20px"
	        }, speed, 'easeOutCubic');
	        jQuery(this).parent().parent().find(".item").not(this).stop(true).fadeTo(speed, 1);
	    }).on("mouseleave", function() {
	        var speed = 700;
	        jQuery(this).find(".desc").stop(true).animate({
	            'height': "0px",
	            'margin-top': "0px",
	            "opacity": "0"
	        }, speed, 'easeOutCubic');
	        jQuery(this).find(".overlay").stop(true).animate({
	            'height': "84px",
	            'margin-top': "20px"
	        }, speed, 'easeOutCubic');
	        //jQuery(this).parent().parent().find(".item").not(this).stop(true).fadeTo(speed, 1);
	    })
		// $(".navbar-nav").on('click','.subClients .Left_Panel_Shortcuts a',function(e){

	    $(".navbar-nav").on('click','.nav-item#booking',function(){
	    	alert("Hello");
	    })

});