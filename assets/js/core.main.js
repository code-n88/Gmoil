$(document).ready(function(){
	// fullScreenHeader();
});

$(window).resize(function(){
	// fullScreenHeader();
});

$(window).scroll(function () {


});




function fullScreenHeader() {
	var header = $('header'),
		windowHeight = $(window).height(),
		navHeight = $('nav').height();

		header.css('height', windowHeight - navHeight +'px');
}