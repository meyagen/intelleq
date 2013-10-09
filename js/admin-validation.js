$(document).ready(function(){
	var earle = false;

	$("#adminSignIn").submit(function(evt){
		if (!earle)
		evt.preventDefault();
		//$("#adminInfo").text("Yay.");
		
		$.ajax({
			type: "POST",
			url: "admin/user/login",
			data: $("#adminSignIn").serialize(),
			success: function(msg) {
				//$("#forgetInfo").text("start "+msg+" end");
				if(msg=="invalid") {
					//$("#signinUentry").addClass("error");
					//$("#signinPass").addClass("error");
					$("#adminInfo").addClass("error");
					$("#adminInfo").text("Invalid username and password combination! Please try again.");
				}
				else {
					if (!earle) {
						earle = true;
						$("#adminSignIn").submit();
					}
				}
			}
		});
	});

});