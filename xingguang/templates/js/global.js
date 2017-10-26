// JavaScript Document
/**
NAME:手风琴特效开发  
Date:2013-11-27
param:
	sel						string			选择器
	minWidth				number			较小的图片的宽度
	maxWidth				number			较大的图片的宽度
	[time]					number			animate动画执行的时间
return:NULL
method:
	accordion(".teaml li",65,233);;
**/
function accordion(sel,beforeWidth,afterWidth){
		if(!afterWidth){afterWidth=233;}
		$(sel).mouseover(function(){
			$(this).siblings().stop().animate({width:beforeWidth},afterWidth);
			$(this).stop().animate({width:afterWidth},afterWidth);
		
		});
	}
	