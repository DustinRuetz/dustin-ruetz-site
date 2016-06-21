var drSite = {};

$(function() {
	drSite.init();
});

drSite.init = function() {
	drSite.headerHeight = $(".name-occupation").outerHeight(true);
	drSite.logoDisplay();
	drSite.formValidation();
};

drSite.logoDisplay = function() {
	$(document).scroll(function() {
		var scrollPosition = $(this).scrollTop();
		if (scrollPosition > drSite.headerHeight) {
			$(".site-logo").addClass("display-logo");
		} else {
			$(".site-logo").removeClass("display-logo");
		}
	});
};

drSite.formValidation = function() {
	$("input[type=submit]").on("click", function(event) {
		if(
			$("#cf-name").val() === "" ||
			$("#cf-email").val() === "" ||
			$("#cf-message").val() === ""
		) {
			event.preventDefault();
			alert("You missed a required field; please complete the form and then resubmit.");
		};
	});
};

// This part causes smooth scrolling using scrollto.js. We target all <a> tags inside the nav, and apply the scrollto.js to it.
$(".nav-main a, .homepage-header a").click(function(event) {
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

// #toggle-menu button to open .nav-sidebar
$("#toggle-menu").on("click", function(event) {
	event.preventDefault();
	$(".nav-sidebar").toggleClass("menu-toggle");
});

// Re-hide .nav-sidebar when a link is clicked
$(".nav-sidebar a").on("click", function() {
	$(".nav-sidebar").toggleClass("menu-toggle");
});