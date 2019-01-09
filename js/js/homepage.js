
var modal = document.getElementById('id01');
window.onclick=function(event){
	if(event.target==modal){
	modal.style.display="none";
	}
}
function showbutton(){
	var x= document.getElementsByClassName("anglebutton");
	var i;
	for(i=0;i<x.length;i++){
		x[i].style.visibility="visible";
	}
}
function hidebutton(){
	var x= document.getElementsByClassName("anglebutton");
	var i;
	for(i=0;i<x.length;i++){
		x[i].style.visibility="hidden";
	}
}
			$(window).scroll(function() {
				var windowBottom = $(this).scrollTop() + $(this).innerHeight();
				$(".eventcontainer").each(function(){
					/* Check the location of each desired element */
					var objectBottom = $(this).offset().top + $(this).outerHeight();
		  
					/* If the element is completely within bounds of the window, fade it in */
					if (objectBottom < windowBottom) { //object comes into view (scrolling down)
					if ($(this).css("opacity")==0) {$(this).fadeTo(1500,1);}
					}else{ //object goes out of view (scrolling up)
					if ($(this).css("opacity")==1) {$(this).fadeTo(500,0);}
					}
				});
			}).scroll(); //invoke scroll-handler on page-load	
			$(window).scroll(function() {
				var windowBottom = $(this).scrollTop() + $(this).innerHeight();
				$("#eventbox").each(function(){
					/* Check the location of each desired element */
					var objectBottom = $(this).offset().top + $(this).outerHeight();
		  
					/* If the element is completely within bounds of the window, fade it in */
					if (objectBottom < windowBottom) { //object comes into view (scrolling down)
					if ($(this).css("opacity")==0) {$(this).fadeTo(1500,1);}
					}else{ //object goes out of view (scrolling up)
					if ($(this).css("opacity")==1) {$(this).fadeTo(500,0);}
					}
				});
			}).scroll(); //invoke scroll-handler on page-load		