$(document).on("DOMContentLoaded", ()=> {
	function validate_registration_form(){
		let name = /^[a-zA-z ]+$/; //regular expression
		let email = /[a-z0-9!#$%&'*+/=?^_`{|}~-]+(?:\.[a-z0-9!#$%&'*+/=?^_`{|}~-]+)*@(?:[a-z0-9](?:[a-z0-9-]*[a-z0-9])?\.)+[a-z0-9](?:[a-z0-9-]*[a-z0-9])?/;
		//password should contain uppercase, lowercase and numbers and should be at least 8 characters in length.
		let username = /^[A-Za-z0-9]+(?:[. _-][A-Za-z0-9]+)*$/;
		let password = /^(?=.*\d)(?=.*[a-z])(?=.*[A-Z])[0-9a-zA-Z]{8,}$/;
		let address = /^[A-Za-z0-9]+(?:[. _-][A-Za-z0-9]+)*$/;

		let errors = 0;
		//username
		if(!$("#username").val().match(username)){
			//users regex to match to the value of the username field
			$("#username").next().text("Please provide a valid username");
			errors++;
		} else {
			$('#username').next().text('');
		} //password
		if(!$("#password").val().match(password)){
			//users regex to match to the value of the username field
			$("#password").next().text("Please provide a valid password");
			errors++;
		} else {
			$('#password').next().text('');
		} //email
		if(!$("#email").val().match(email)){
			//users regex to match to the value of the username field
			$("#email").next().text("Please provide a valid email");
			errors++;
		} else {
			$('#email').next().text('');
		}//address
		if(!$("#address").val().match(address)){
			//users regex to match to the value of the username field
			$("#address").next().text("Please provide a valid address");
			errors++;
		} else {
			$('#address').next().text('');
		}
		if($("#password").val() !== $("#confirm_password").val()) {
			$('#confirm_password').next().text("Passwords should match");
		} else {
			$("#confirm_password").next().text();
		}
		if(errors >0){
			return false; //means there are errors in the validation
		} else {
			return true; //means you're good to register
		}
	}

	//actual registration
	$("#add_user").click((e) => {
		if(validate_registration_form()) {
			// alert("Okay to register");
			let username = $("#username").val();
			let password = $("#password").val();
			let firstname = $("#firstname").val();
			let lastname = $("#lastname").val();
			let email = $("#email").val();
			let address = $("#address").val();

			$.ajax({
				"url": "../controllers/create_user.php",
				"type": "POST",
				"data": {
					'username':username,
					'password':password,
					'firstname':firstname,
					'lastname':lastname,
					'email':email,
					'address':address
				},
				"success":(data) => {
					if(data === "user_exists"){
						$("#username").next().text(
							"Username already exists");
					}
					// alert(data);
				}
			});
		}
	});
});


// let name = /^[a-zA-z]+$/; //regular expression / or regex / is a writing notation to create a pattern for your code to 
//search through - it uses certain symbols to check if the pattern exists or not
//^ is start of string, $ is end of string, [a-zA-z] only alphabetical characters and spaces are allowed.
// + more than a single character