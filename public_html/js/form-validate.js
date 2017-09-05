$(document).ready(function(){

	/* begin validation*/
	$("#contact-form").validate({

		// setup handling of form errors
		debug: true,
		errorClass: "alert alert-danger",
		errorLabelContainer: "#output-area",
		errorElement: "div",

		// rules define what is good/bad input
		// each rule starts with the form input element's NAME attribute
		rules: {
			name: {
				required: true,
			},
			email: {
				email: true,
				required: true
			},
			message: {
				required: true,
				minlength: 2,
				maxlength: 2000,
			}
		},

		// error messages to display to the end user
		messages: {
			name: {
				required: "name is required",
			},
			email: {
				email: "valid email address is required",
				required: "unrecognized email address"
			},
			message: {
				required: "message cannot be blank",
				minlength: "message length must be longer than zero characters",
				maxlength: "message length must be shorter than two thousand characters"
			}
		},

		submitHandler: function(form) {
			$("#contact-form").ajaxSubmit({
				type: "POST",
				url: $("#contact-form").attr("action"),

				success: function(ajaxOutput) {
					// clear the output area's formatting
					$("#output-area").css("display", "");

					// write the server's reply to the output area
					$("#output-area").html(ajaxOutput);

					// reset the form if it was successful
					if($(".alert-success").length >= 1) {
						$("#contact-form")[0].reset();
					}
				}
			})
		}

	});/* end validate function */

});/*end document.ready()*/