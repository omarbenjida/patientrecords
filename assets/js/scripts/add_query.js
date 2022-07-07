$(document).ready(function(){
	$("#save_admin").click(function(){
		var username = $("#username").val();
		var password = $("#password").val();
		var Prénom = $("#Prénom").val();
		var middlename = $("#middlename").val();
		var Nom = $("#Nom").val();
		$.ajax({
			type: "POST",
			url: "add_admin.php",
			data: {
				username: username,
				password: password,
				Prénom: Prénom,
				middlename: middlename,
				Nom: Nom
			},
			success: function(msg){
				$("#a").html(msg);
				$("#a").fadeIn();
				$("#a").fadeOut(2000);
				$("#form_admin input").val("");
				setTimeout(function(){
					$("#add").slideUp(2000);
					window.location = "home.php";
				}, 1000);
			},
			error: function(){
				alert("error");
			}
		});
	});
});