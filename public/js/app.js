/*
 Custom Javascript for the system
 Designed by Code Alliance Gh
*/
$(document).ready(function(){
	var baseName   = ["DVLA"];
	var titleArray = ["Home","Lessons","Register","About Us","FAQ","Topics"];

	var getURl = window.location.href,
		subPath = getURl.split("/"),
		getLastPath = subPath[subPath.length - 1];

		switch(getLastPath)
		{
			case "index":
				document.title = baseName[0] + " | " + titleArray[0];
				break;
			case "lessons":
				document.title = baseName[0] + " | " + titleArray[1];
				break;
			case "register":
				document.title = baseName[0] + " | " + titleArray[2];
				break;
			case "about_us":
				document.title = baseName[0] + " | " + titleArray[3];
				break;
			case "faq":
				document.title = baseName[0] + " | " + titleArray[4];
				break;

			default:
				document.title = baseName[0] + " | " + titleArray[0];
				break;

		}

		$('.collapsible').collapsible();
		$("input#date").flatpickr({
			weekNumbers:true
		});
		$('select').material_select();
        
		//Configuration for the activeness of the navigation bar
		//activating the active click events
	    $("ul#nav-demo a").on('click',function(e){
	    	var link = $(this);
	    	var item = link.parent("li");

	    	if (item.hasClass("active"))
	    	 {
	    	 	item.removeClass("active").children("a").removeClass("active");
	    	 }
	    	 else{
	    	 	item.addClass("active").children("a").addClass("active");
	    	 }

	    	 if (item.children("ul").length > 0) 
	    	 {
	    	 	var href = link.attr("href");
	    	 	link.attr("href","#");
	    	 	setTimeout(function() {
	    	 		link.attr("href",href);
	    	 	}, 300);
	    	 	e.preventDefault();
	    	 }

	    })
	    .each(function(){
	    	var link = $(this);
	    	if (link.get(0).href == location.href)
	    	 {
	    	 	link.addClass("active").parents("li").addClass("active");
	    	 	return false;
	    	 }
	    });
			//Configuring the search bar
		$("input#search_data").focusin(function(){
			 $("input#search_data").css({"background":"#FFFFFF","transition":"all 0.5s ease-in-out"});
			 $("i.search_icon").css({"transition":"all 0.5s ease-in-out","color":"#212121"});
		});
		$("input#search_data").focusout(function(){
			 $("input#search_data").css({"background":"#0288d1","transition":"all 0.5s ease-in-out"});
			 $("i.search_icon").css({"transition":"all 0.5s ease-in-out","color":"#FFFFFF"});
		});

		//Instantiating the light gallery
		$("#html5-videos").lightGallery({
			videojs:true,
			mode:'lg-lollipop'
		});

		
	});