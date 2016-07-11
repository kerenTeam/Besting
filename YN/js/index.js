$('a').click(function(){
    var href = $(this).attr('href');
    var newHref = href.substring(1,href.length);
    var move = $('#'+newHref).offset().top;
    $("html,body").animate({scrollTop:move},1000);
	return false;
})