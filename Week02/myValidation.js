// JavaScript Document
$(function(){
	//alert("Hello");
	$("#refreshBtn").mousedown(function(){
		location.reload();
		$("#myForm").trigger("reset");
	});
	
	$("form[name='myForm']").validate({
		rules: {
			Name: "required",
			Phone: "required",
			Email: {
				required: true,
				email: true	
			},
			//Gender: "required",
			Age: {
				required: true,
				maxlength: 3
			},
			Comment: {
				required: true,
				maxlength: 250
			}
		},
		
		messages: {
			Name: "* Name required",
			Phone: "* Phone required",
			Email: {
				required: "* Email required",
				email: "* Valid email required"	
			},
			//Gender: "* Gender required",
			Age: {
				required: "* Age required",
				maxLength: "* Age no more than 3 digits"
			},
			Comment: {
				required: "* Comment required",
				maxLength: "* Comment exceeds 250 characters"
			}
		},
		submitHandler: function(form){
			form.submit(function() {
				alert("Form submitted");
			});
		}
	});
});