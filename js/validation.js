$(document).ready(function(){
	$("#forgetSubmit").click(function(){
		//$("#forgetInfo").text("Yay.");
		$.ajax({
			type: "POST",
			url: "login/forget",
			data: "email="+$("#forgetEmail").val(),
			success: function(msg) {
				$("#forgetInfo").text("start "+msg+" end");
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
				//else $("#forgetInfo").text("Yoy.");*/
			}
		});
		//$("#forgetInfo").text("Yey.");
	});
});