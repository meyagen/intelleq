function signin_switch(){
	if ($('#modalSignIn_forgot').hasClass('hidden')) {
		$('#modalSignIn_forgot').removeClass('hidden');
		$('#modalSignIn_main').addClass('hidden');
	}
	else if ($('#modalSignIn_main').hasClass('hidden')) {
		$('#modalSignIn_main').removeClass('hidden');
		$('#modalSignIn_forgot').addClass('hidden');
	}
}

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

	// $("signinUentry").focus() {
	// 	$("#signinUentry").removeClass("error");
	// 	$("#signinPass").removeClass("error");
	// 	$("#signinInfo").removeClass("process");
	// 	$("#signinInfo h3:eq(0)").text('');
	// 	$("#signinInfo h3:eq(1) small").text('');
	// 	$("#signinInfo h5").text('');
	// }

	// $("#signinPass").focus() {
	// 	$("#signinUentry").removeClass("error");
	// 	$("#signinPass").removeClass("error");
	// 	$("#signinInfo").removeClass("process");
	// 	$("#signinInfo h3:eq(0)").text('');
	// 	$("#signinInfo h3:eq(1) small").text('');
	// 	$("#signinInfo h5").text('');
	// }

	$("#formSignIn").submit(function(evt){
		if (!earle)
		evt.preventDefault();
		$("#signinInfo").addClass("error");
		$("#signinInfo").addClass("process");
		$("#signinInfo h3:eq(0)").text("PROCESSING");
		$("#signinInfo h3:eq(1) small").text('');
		$("#signinInfo h5").text('Please wait...');
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
					$("#signinInfo h3:eq(0)").text('INVALID');
					$("#signinInfo h3:eq(1) small").text('COMBINATION');
					$("#signinInfo h5").text('Please try again.');
				}
				else {
					$("#signinInfo").removeClass("process");
					$("#signinInfo").addClass("success");
					$("#signinInfo h3:eq(0)").text('SUCCESS!');
					$("#signinInfo h3:eq(1) small").text('');
					$("#signinInfo h5").text('Redirecting...');
					window.location.replace(window.location.href);
				}
			}
		});
	});

	var bunao = false;

	var email_valid = false;
	var uname_valid = false;
	var matchpass = false;

	// $("#first_name").keyup(function() {
	// 	var val = $("#first_name").val();
	// 	if (/^\s*$/.test(val)){
	// 		$("#pre-first_name").removeClass("valid");
	// 		$("#first_name").removeClass("valid");
	// 		$("#pre-first_name").addClass("invalid");
	// 		$("#first_name").addClass("invalid");
	// 	}
	// 	else{
	// 		$("#pre-first_name").removeClass("invalid");
	// 		$("#first_name").removeClass("invalid");
	// 		$("#pre-first_name").addClass("valid");
	// 		$("#first_name").addClass("valid");
	// 	}
	// }

	// $("#last_name").keyup(function() {
	// 	var val = $("#last_name").val();
	// 	if (/^\s*$/.test(val)){
	// 		$("#pre-last_name").removeClass("valid");
	// 		$("#last_name").removeClass("valid");
	// 		$("#pre-last_name").addClass("invalid");
	// 		$("#last_name").addClass("invalid");
	// 	}
	// 	else{
	// 		$("#pre-last_name").removeClass("invalid");
	// 		$("#last_name").removeClass("invalid");
	// 		$("#pre-last_name").addClass("valid");
	// 		$("#last_name").addClass("valid");
	// 	}
	// }

	$("#signupEmail").keyup(function() {
		//$("#signupEmail").addClass("error");
		$.ajax({
			type: "POST",
			url: "login/find_email",
			data: "email_address="+$("#signupEmail").val(),
			success: function(msg) {
				//$("#signupInfo").text(msg)
				if(msg=="invalid") {
					$("#pre-email_address").removeClass("valid");
					$("#signupEmail").removeClass("valid");
					$("#pre-email_address").removeClass("taken");
					$("#signupEmail").removeClass("taken");
					$("#pre-email_address").addClass("invalid");
					$("#signupEmail").addClass("invalid");
					email_valid = false;
				}
				else if (msg=="taken") {
					$("#pre-email_address").removeClass("valid");
					$("#signupEmail").removeClass("valid");
					$("#pre-email_address").removeClass("invalid");
					$("#signupEmail").removeClass("invalid");
					$("#pre-email_address").addClass("taken");
					$("#signupEmail").addClass("taken");
					email_valid = false;
				}
				else {
					$("#pre-email_address").removeClass("invalid");
					$("#signupEmail").removeClass("invalid");
					$("#pre-email_address").removeClass("taken");
					$("#signupEmail").removeClass("taken");
					$("#pre-email_address").addClass("valid");
					$("#signupEmail").addClass("valid");
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
				if(msg=="invalid") {
					$("#pre-username").removeClass("valid");
					$("#signupUname").removeClass("valid");
					$("#pre-username").removeClass("taken");
					$("#signupUname").removeClass("taken");
					$("#pre-username").addClass("invalid");
					$("#signupUname").addClass("invalid");
					uname_valid = false;
				}
				else if (msg=="taken") {
					$("#pre-username").removeClass("valid");
					$("#signupUname").removeClass("valid");
					$("#pre-username").removeClass("invalid");
					$("#signupUname").removeClass("invalid");
					$("#pre-username").addClass("taken");
					$("#signupUname").addClass("taken");
					uname_valid = false;
				}
				else {
					$("#pre-username").removeClass("invalid");
					$("#signupUname").removeClass("invalid");
					$("#pre-username").removeClass("taken");
					$("#signupUname").removeClass("taken");
					$("#pre-username").addClass("valid");
					$("#signupUname").addClass("valid");
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
				//$("#signupInfo").text(msg)
				if(msg=="invalid") {
					bunao=false;
					$("#pre-password1").removeClass("valid");
					$("#signupPass1").removeClass("valid");
					$("#pre-password1").addClass("invalid");
					$("#signupPass1").addClass("invalid");
				}
				else {
					bunao=true;
					$("#pre-password1").removeClass("invalid");
					$("#signupPass1").removeClass("invalid");
					$("#pre-password1").addClass("valid");
					$("#signupPass1").addClass("valid");
					$.ajax({
						type: "POST",
						url: "login/match_pass",
						data: "password="+$("#signupPass1").val()+"&password2="+$("#signupPass2").val(),
						success: function(msg) {
							//$("#signupInfo").text(msg)
							if(msg=="invalid") {
								$("#pre-password2").removeClass("valid");
								$("#signupPass2").removeClass("valid");
								$("#pre-password2").addClass("invalid");
								$("#signupPass2").addClass("invalid");
								matchpass = false;
							}
							else {
								$("#pre-password2").removeClass("invalid");
								$("#signupPass2").removeClass("invalid");
								$("#pre-password2").addClass("valid");
								$("#signupPass2").addClass("valid");
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
					//$("#signupInfo").text(msg)
					if(msg=="invalid") {
						$("#pre-password2").removeClass("valid");
						$("#signupPass2").removeClass("valid");
						$("#pre-password2").addClass("invalid");
						$("#signupPass2").addClass("invalid");
						matchpass = false;
					}
					else {
						$("#pre-password2").removeClass("invalid");
						$("#signupPass2").removeClass("invalid");
						$("#pre-password2").addClass("valid");
						$("#signupPass2").addClass("valid");
						matchpass = true;
					}
				}
			});
		}
		else matchpass = false;
	});

	$("#formSignUp").submit(function(evt){
		evt.preventDefault();
		$("#signupInfo").addClass("error");
		$("#signupInfo").addClass("process");
		$("#signupInfo h3:eq(0)").text("PROCESSING");
		$("#signupInfo h3:eq(1) small").text('');
		$("#signupInfo h5").text('Please wait...');
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
		else {
			$("#signupInfo").removeClass("process");
			$("#signupInfo h3:eq(0)").text('INVALID');
			$("#signupInfo h3:eq(1) small").text('COMBINATION');
			$("#signupInfo h5").text('You have input field values that are invalid (red), taken (yellow) or empty. Please try again.');
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