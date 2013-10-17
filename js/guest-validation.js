
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
		$("#signinInfo").addClass("error");
		$("#signinInfo").addClass("process");
		$("#signinInfo").text("Processing, please wait...");
		$.ajax({
			type: "POST",
			url: "login/validate",
			data: $("#formSignIn").serialize(),
			success: function(msg) {
				//$("#forgetInfo").text("start "+msg+" end");
				if(msg=="invalid") {
					$("#signinUentry").addClass("error");
					$("#signinPass").addClass("error");
					$("#signinInfo").removeClass("process");
					$("#signinInfo").addClass("error");
					$("#signinInfo").text("Invalid username and password combination! Please try again.");
				}
				else {
					if (!earle) {
						earle = true;
						$("#signinInfo").removeClass("process");
						$("#signinInfo").addClass("success");
						$("#signinInfo").text("Redirecting...");
						$("#formSignIn").submit();
					}
				}
			}
		});
	});

	var bunao = false;

	var email_valid = false;
	var uname_valid = false;
	var matchpass = false;

	$("#signupEmail").keyup(function() {
		//$("#signupEmail").addClass("error");
		$.ajax({
			type: "POST",
			url: "login/find_email",
			data: "email_address="+$("#signupEmail").val(),
			success: function(msg) {
				//$("#signupInfo").text(msg)
				if((msg=="invalid")||(msg=="taken")) {
					$("#signupEmail").addClass("error");
					$("#signupEmailLabel").addClass("error");
					email_valid = false;
				}
				else {
					$("#signupEmail").removeClass("error");
					$("#signupEmailLabel").removeClass("error");
					email_valid = true;
				}
			}
		});
	});

	$("#signupUname").keyup(function() {
		//$("#signupEmail").addClass("error");
		$.ajax({
			type: "POST",
			url: "login/find_uname",
			data: "username="+$("#signupUname").val(),
			success: function(msg) {
				//$("#signupInfo").text(msg)
				if((msg=="invalid")||(msg=="taken")) {
					$("#signupUname").addClass("error");
					$("#signupUnameLabel").addClass("error");
					uname_valid = false;
				}
				else {
					$("#signupUname").removeClass("error");
					$("#signupUnameLabel").removeClass("error");
					uname_valid = true;
				}
			}
		});
	});

	$("#signupPass1").keyup(function() {
		$.ajax({
			type: "POST",
			url: "login/check_pass",
			data: "password="+$("#signupPass1").val(),
			success: function(msg) {
				$("#signupInfo").text(msg)
				if(msg=="invalid") {
					bunao=false;
					$("#signupPass1").addClass("error");
					$("#signupPass1Label").addClass("error");
				}
				else {
					bunao=true;
					$("#signupPass1").removeClass("error");
					$("#signupPass1Label").removeClass("error");
					$.ajax({
						type: "POST",
						url: "login/match_pass",
						data: "password="+$("#signupPass1").val()+"&password2="+$("#signupPass2").val(),
						success: function(msg) {
							$("#signupInfo").text(msg)
							if(msg=="invalid") {
								$("#signupPass2").addClass("error");
								$("#signupPass2Label").addClass("error");
								matchpass = false;
							}
							else {
								$("#signupPass2").removeClass("error");
								$("#signupPass2Label").removeClass("error");
								matchpass = true;
							}
						}
					});
				}
			}
		});
	});

	$("#signupPass2").keyup(function() {
		if(bunao) {
			$.ajax({
				type: "POST",
				url: "login/match_pass",
				data: "password="+$("#signupPass1").val()+"&password2="+$("#signupPass2").val(),
				success: function(msg) {
					$("#signupInfo").text(msg)
					if(msg=="invalid") {
						$("#signupPass2").addClass("error");
						$("#signupPass2Label").addClass("error");
						matchpass = false;
					}
					else {
						$("#signupPass2").removeClass("error");
						$("#signupPass2Label").removeClass("error");
						matchpass = true;
					}
				}
			});
		}
		else matchpass = false;
	});

	$("#formSignUp").submit(function(evt){
		evt.preventDefault();
		if(email_valid&&uname_valid&&bunao&&matchpass) {
			$.ajax({
				type: "POST",
				url: "login/create_member",
				data: $("#formSignUp").serialize(),
				success: function(msg) {

				}
			});
			$('#modalConfirm').foundation('reveal', 'open', '');
		}
	});
	email_valid = false;
	$("#reportEmail").keyup(function() {
		//$("#signupEmail").addClass("error");
		$.ajax({
			type: "POST",
			url: "report/valid_email",
			data: "email_address="+$("#reportEmail").val(),
			success: function(msg) {
				//$("#signupInfo").text(msg)
				if(msg=="invalid") {
					$("#reportEmail").addClass("error");
					$("#reportEmailLabel").addClass("error");
					email_valid = false;
				}
				else {
					$("#reportEmail").removeClass("error");
					$("#reportEmailLabel").removeClass("error");
					email_valid = true;
				}
			}
		});
	});
	$("#formReport").submit(function(evt){
		evt.preventDefault();
		$.ajax({
			type: "POST",
			url: "report/sent",
			data: $("#formReport").serialize(),
			success: function(msg) {
				if(msg=="successful") {
					$('#modalConfirm').foundation('reveal', 'open', '');
				}
			}
		});
	});

	$("#formFeedback").submit(function(evt){
		evt.preventDefault();
		$.ajax({
			type: "POST",
			url: "feedback/sent",
			data: $("#formFeedback").serialize(),
			success: function(msg) {
				if(msg=="successful") {
					$('#modalConfirm').foundation('reveal', 'open', '');
				}
			}
		});
	});
});