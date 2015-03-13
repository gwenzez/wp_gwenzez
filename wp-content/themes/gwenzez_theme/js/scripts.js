$(function(){
	$("div.navbar a").smoothScroll({
			speed : 400,
			offset : 0
		});
		$("div.navbar a").smoothScroll({
			offset : -20
		});
		$(".burger").on("click",function() {
			$(this).next().slideToggle();
		});
		$("div.navbar li").on("click",function() {
			if(window.innerWidth <= 768) {
				$(this).parent().slideUp();

			}
		});
		$(".slide").on("click",function(){
			if(window.innerWidth <=1024) {
				$(".slideText p, .slideText a", this).slideToggle();
			}
		});
});