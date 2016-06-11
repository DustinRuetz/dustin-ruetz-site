$(function() {

	// #toggle-labels button in the Skills section
	$("#toggle-labels").on("click", function(event) {
		event.preventDefault();
		$(".skill-text").toggleClass("label-toggle");
	});


	// This part does the "fixed navigation after scroll" functionality. We use the jQuery function scroll() to recalculate our variables as the page is scrolled.

	/*

	$(window).scroll(function() {
		var window_top = $(window).scrollTop() + 12; // the "12" should equal the margin-top value for nav.stick
		var div_top = $('#nav-anchor').offset().top;
			if (window_top > div_top) {
				$('nav').addClass('stick');
			} else {
				$('nav').removeClass('stick');
			}
	});

	*/

	// This part causes smooth scrolling using scrollto.js. We target all <a> tags inside the nav, and apply the scrollto.js to it.
	$(".nav-main a").click(function(event) {
		event.preventDefault();
		$('html,body').scrollTo(this.hash, this.hash);
	});

	// This part handles the highlighting functionality. We use the scroll functionality again, some array creation and manipulation, class adding and class removing, and conditional testing.
	var aChildren = $(".nav-main li").children(); // find the <a> children of the list items
	var aArray = []; // create the empty aArray
	// For loop fills the aArray with attribute href values
	for (var i=0; i < aChildren.length; i++) {    
		var aChild = aChildren[i];
		var ahref = $(aChild).attr('href');
		aArray.push(ahref);
	}

	$(window).scroll(function() {
		var windowPos = $(window).scrollTop(); // get the offset of the window from the top of page
		var windowHeight = $(window).height(); // get the height of the window
		var docHeight = $(document).height();

		for (var i=0; i < aArray.length; i++) {
			var theID = aArray[i];
			var divPos = $(theID).offset().top; // get the offset of the div from the top of page
			var divHeight = $(theID).height(); // get the height of the div in question
			if (windowPos >= divPos && windowPos < (divPos + divHeight)) {
				$("a[href='" + theID + "']").addClass("current-section");
			} else {
				$("a[href='" + theID + "']").removeClass("current-section");
			}
		}

		if(windowPos + windowHeight == docHeight) {
			if (!$(".nav-main li:last-child a").hasClass("current-section")) {
				var navActiveCurrent = $(".current-section").attr("href");
				$("a[href='" + navActiveCurrent + "']").removeClass("current-section");
				$(".nav-main li:last-child a").addClass("current-section");
			}
		}
	});

});