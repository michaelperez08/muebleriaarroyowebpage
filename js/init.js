(function($){
  $(function(){

    $('.button-collapse').sideNav();
    $('.slider').slider();
    $('.indicators').hide();
    $('.parallax').parallax();
    $('.materialboxed').materialbox();
    $('select').material_select();
    $('.modal').modal();

    var s = location.pathname;
    var n = s.substring(s.length - 10);
    if (location.pathname.substring(s.length - 10) ==  "index.html"){
  		$("nav").addClass("transparent");
  	}
  }); // end of document ready
})(jQuery); // end of jQuery name space
