$(document).ready(function() {

	registration_form_validation();

});

function registration_form_validation() {

	$("#registration_form_form").submit(function() {
		var reg_pass = $("#reg_pass").val();
		var reg_cpass = $("#reg_cpass").val();
		if(reg_pass.length < 5) {
			alert("Password should be atleast 5 characters. ");
			return false;
		}
		else if(reg_pass != reg_cpass) {
			alert("Passwords don't match");
			return false;
		}
	});


}
