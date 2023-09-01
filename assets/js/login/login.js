$(($) => {
	// Establecer el foco en el campo de usuario
	$("#user_name").focus();
	// Manejar la validación del nombre de usuario en tiempo real
	$("#frm_login").on("keyup", (e) => {
		let u = $("#user_name").val(),
			p = $("#user_password").val();
		if (u.length > 4) {
			$.ajax({
				url: "User",
				data: { u: u },
				type: "post",
				dataType: "json",
				beforeSend: () => {},
			})
				.done((a) => {
					if (a.rsp == 400) {
						$("#user_name").css("border-color", "red");
						$(".response").html(
							"<span class='text-danger'>No existe el Usuario</span>"
						);
						$("#btn_validate").attr("disabled", "disabled");

						user = false;
					} else if (a.rsp == 200) {
						$("#user_name").css("border-color", "green");
						$(".response").html("");
						user = true;
						if (user == true && p.length > 4) {
							$("#btn_validate").removeAttr("disabled");
						} else {
							$("#btn_validate").attr("disabled", "disabled");
						}
					}
				})
				.fail((err) => {
					console.log(err.responseText);
				})
				.always(() => {});
		} else {
			$("#user_name").removeAttr("style");
			$(".response").html("");
			$("#btn_validate").attr("disabled", "disabled");
		}
	});
	// Manejar la validación de la contraseña
	$("#btn_validate").on("click", (e) => {
		e.preventDefault();
		let p = $("#user_password").val();
		$.ajax({
			url: "Password",
			data: { p: p },
			type: "post",
			dataType: "json",
			beforeSend: () => {},
		})
			.done((b) => {
				if (b.rsp == 200) {
					$("#user_password").css("border-color", "green");
					$(".response_pass").html("");
					$(location).attr("href", "Inicio");
				} else {
					$("#user_password").css("border-color", "red");
					$(".response_pass").html(
						"<span class='text-danger'>Contraseña Incorrecta</span>"
					);
				}
			})
			.fail((e) => {
				console.log(e.responseText);
			})
			.always(() => {});
	});
});
