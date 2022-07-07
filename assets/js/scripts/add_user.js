$(document).ready(function(){
	$("#save_user").click(function(){
		var username = $("#username").val();
		var password = $("#password").val();
		var Prénom = $("#Prénom").val();
		var middlename = $("#middlename").val();
		var Nom = $("#Nom").val();
		var section = $("#section").val();
		$.ajax({
			type: "POST",
			url: "add_user.php",
			data: {
				username: username,
				password: password,
				Prénom: Prénom,
				middlename: middlename,
				Nom: Nom,
				section: section
			},
			success: function(msg){
				$("#a").html(msg);
				$("#a").fadeIn();
				$("#a").fadeOut(2000);
				$("#form_user input").val("");
				setTimeout(function(){
					$("#add").slideUp(2000);
					window.location = "user.php";
				}, 1000);
			},
			error: function(){
				aler("Error!");
			}
		});
	});
});