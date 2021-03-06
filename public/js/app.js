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
		var searchSelector = $("input#search_data");
		searchSelector.focusin(function(){
			 $(this).css({"background":"#FFFFFF","transition":"all 0.5s ease-in-out"});
			 $("i.search_icon").css({"transition":"all 0.5s ease-in-out","color":"#212121"});
		});
		searchSelector.focusout(function(){
			 $(this).css({"background":"#0288d1","transition":"all 0.5s ease-in-out"});
			 $("i.search_icon").css({"transition":"all 0.5s ease-in-out","color":"#FFFFFF"});
		});

		//Instantiating the light gallery
		$("#html5-videos").lightGallery({
			videojs:true,
			mode:'lg-lollipop'
		});

		$("#modal1,#modal2").modal({
			dismissible:false
		});

		$("a.report").attr("disabled",true).css({"background-color":"#e8e8e8 !important"});
		var $dateSelector = $("input.date");
		$dateSelector.change(function(event){
			var data = event.target.value;
			if($.trim(data).length > 0){
				var querySelector = $("a.report");
				querySelector.attr("disabled",false)
				             .addClass("light-blue darken-2");
;				querySelector.attr("href","admin/pdf/generate/"+data);
			}
			else if($.trim(data).length <= 0){
                $("a.report").attr("disabled",true).css({"background-color":"#e8e8e8 !important"});
			}
		});

		//Tabs configuration
		$(".tabs").tabs();

	});