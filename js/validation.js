$(document).ready(function(){
	var earle = false;
	$("#formForget").submit(function(evt){
		evt.preventDefault();
		//$("#forgetInfo").text("Yay.");
		$.ajax({
			type: "POST",
			url: "login/forget",
			data: $("#formForget").serialize(),
			success: function(msg) {
				//$("#forgetInfo").text("start "+msg+" end");
				if(msg=="invalid") {
					$("#forgetEmail").removeClass("success");
					$("#forgetInfo").removeClass("success");
					$("#forgetEmail").addClass("error");
					$("#forgetInfo").addClass("error");
					$("#forgetInfo").text("Invalid input! Please try again.");
				}
				else if (msg=="notfound") {
					$("#forgetEmail").removeClass("success");
					$("#forgetInfo").removeClass("success");
					$("#forgetEmail").addClass("error");
					$("#forgetInfo").addClass("error");
					$("#forgetInfo").text("E-mail not registered! Please try again.");
				}
				else {
					$("#forgetEmail").removeClass("error");
					$("#forgetInfo").addClass("error");
					$("#forgetEmail").addClass("success");
					$("#forgetInfo").addClass("success");
					$("#forgetInfo").text("An e-mail has been sent with your new password.");
				}
			}
		});
	});

	$("#formSignIn").submit(function(evt){
		if (!earle)
		evt.preventDefault();
		//$("#forgetInfo").text("Yay.");
		$.ajax({
			type: "POST",
			url: "login/validate",
			data: $("#formSignIn").serialize(),
			success: function(msg) {
				//$("#forgetInfo").text("start "+msg+" end");
				if(msg=="invalid") {
					$("#signinUentry").addClass("error");
					$("#signinPass").addClass("error");
					$("#signinInfo").addClass("error");
					$("#signinInfo").text("Invalid username and password combination! Please try again.");
				}
				else {
					if (!earle) {
						earle = true;
						$("#formSignIn").submit();
					}
				}
			}
		});
	});
});