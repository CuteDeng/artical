$(document).ready(function() {
	$(".head_li").on("click",function(){
		if($(this).siblings().css("display")=="none"){ 
			$(this).siblings().css("display","block") 
		} else {
			$(this).siblings().css("display","none")
		}
	})
	$(".bro_li").on("click",function(){
		 $(".bro_li").removeClass("current");
		 $(this).addClass("current");
	})
});