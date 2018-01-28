$(document).ready(function(){
	//Hidings here
	$("#submitButton").hide();
	$("div#payment").hide();

	var speed   = 200;
	var config  = $("form#regPay12345").children(),
		first   = config.first(),
		middle 	= config.eq(1);

	//indicator configurations
	var payment = $("a#payment"),
		register = $("a#register"),
		submitButton = $("#submitButton");
	//Onset animation effects for the first division
	first.addClass("animated fadeIn");
	middle.addClass("animated fadeIn");
	//Creating the nav button object
	var nextButton = $("#next"),
		previousButton = $("#previous");

	nextButton.on('click',function(){
	var student_id = $("input#student_id").val(),
		school_name = $("select#schools").val(),
		firstname = $("input#firstname").val(),
		lastname  = $("input#lastname").val(),
		middlename = $("input#middlename").val(),
		dob		  = $("input#dob").val(),
		gender 	  = $("select#gender").val(),
		nationality = $("input#nationality").val(),
		address     = $("input#address").val(),
		mobile_number = $("input#address").val(),
		region		= $("input#region").val(),
		city 		= $("input#city").val(),
		email	    = $("input#email").val();
		//Image will come later
		if (student_id == "" || school_name == "" || firstname == "" || lastname == "") {
			var $toast = $('<span>Required Fields Cannot Be Empty</span>');
			Materialize.toast($toast,2000);
		}
		else{
				//Performing the hide and show for the operation
			first.removeClass("animated fadeIn").addClass("animated fadeOut").css({"display":"none","opacity":"0"});
			middle.removeClass("animated fadeOut").addClass("animated fadeIn").css({"display":"block","opacity":"1"});
		//Activating what should be activated
			
			previousButton.removeAttr("disabled");
			nextButton.fadeOut(speed);
			submitButton.fadeIn(speed);

			console.log(student_id);
		}
			
	});

	previousButton.on('click',function(){
		//Performing the hide and show for the operation
		first.removeClass("animated fadeOut").addClass("animated fadeIn").css({"display":"block","opacity":"1"});
		middle.removeClass("animated fadeIn").addClass("animated fadeOut").css({"display":"none","opacity":"0"});

		//Activating what should be activated
		previousButton.attr("disabled",true);
		nextButton.fadeIn(speed);
		submitButton.fadeOut(speed);
	});

	//Activating the first indicator  on focus
	$("input#firstname,input#lastname").keyup(function(){
		var empty = false;
		if ($(this).val().length == 0)
		 {
		 	empty = true;
		 }

		 if (empty) 
		 {
		 	payment.removeClass("light-blue darken-4 z-depth-1").addClass("grey lighten-1 z-depth-0");
		 }
		 else{
		 	payment.removeClass("grey lighten-1 z-depth-0").addClass("light-blue darken-4 z-depth-1");
		 }
	});	
	 //trigering the mobile money api when the submit button is clicked
    
	submitButton.on('click',function(){
      /*  var network = $("#network").val(),
		var number  = $("#amount").val(),
		var cnumber = $("#cnumber").val(),
		var amount		  = $("#amount").val(),
		var ref_number 	  = $("#ref_number").val(),
		
		// Lord you can do your magic to save the rest in the database and also validate each input field with the else condition
		var dataString = 'network1='+ network + '&number1='+ number + '&amount1='+ amount;
		if(network==''||number==''||amount=='')
		{*/
		        document.getElementById("firstname").innerHTML = 5 + 6;

		/*}
		else
		{*/
		// AJAX Code To Submit Form.
		/*$.ajax({
		type: "POST",
		url: "../../controllers/mobilemoneycontroller.php",
		data: dataString,
		cache: false,
		success: function(result){
		alert(result);
		}
		});
		}
		return false;*/
		});

});