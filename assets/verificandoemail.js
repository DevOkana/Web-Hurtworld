// JavaScript Validacion de registro

$('document').ready(function()
{ 		 

		 // Validacion de nombres
		 var nameregex = /^[a-zA-Z0-9]+$/;
		 
		 $.validator.addMethod("validname", function( value, element ) {
		     return this.optional( element ) || nameregex.test( value );
		 }); 
		 
		 // valid email pattern
		 var eregex = /^([a-zA-Z0-9\.\-\+])+\@(([Ss]net)+\.)+([cu]{2,4})+$/;
		 
		 $.validator.addMethod("validemail", function( value, element ) {
		     return this.optional( element ) || eregex.test( value );
		 });
		 
		 $("#register-form").validate({
					
		  rules:
		  {
				name: {
					required: true,
					validname: true,
					minlength: 4,
					remote: {
					url: "api/revisarnombre.php",
					type: "post",
					data: {
						name: function() {
							return $( "#name" ).val();
						}
					}
				}
				},

				email : {
				required : true,
				validemail: true,
				remote: {
					url: "api/recuperandoemail.php",
					type: "post",
					data: {
						email: function() {
							return $( "#email" ).val();
						}
					}
				}
				},
				password: {
					required: true,
					minlength: 6,
					maxlength: 15
				},
				cpassword: {
					required: true,
					equalTo: '#password'
				},
		   },
		   messages:
		   {
				name: {
					required: "Su nombre es requerido",
					validname: "El nombre debe contener solo alfabetos y espacio",
					minlength: "Tu nombre es muy corto",
					remote: "El nombre ya existe, escoja otro."
					  },
				email : {
				required : "Email es requerido",
				validemail : "Por favor ingrese una dirección E-mail válida(ejemplo@snet.cu)",
				remote : "Este email no esta registrado con su ip"
			},
				ip:{
					required: "El ip es requerido",
					minlength: "El minimo de caracteres es 5"
					},
				password:{
					required: "Contraseña es requerida",
					minlength: "La contraseña debe tener como minimo 6 caracteres"
					},
				cpassword:{
					required: "Reescribe tu contraseña",
					equalTo: "La contraseña no coincidió!"
					}
		   },
		   errorPlacement : function(error, element) {
			  $(element).closest('.form-group').find('.help-block').html(error.html());
		   },
		   unhighlight: function(element, errorClass, validClass) {
			  $(element).closest('.form-group').removeClass('has-error');
			  $(element).closest('.form-group').find('.help-block').html('');
		   },
		   unhighlight: function(element, errorClass, validClass) {
			  $(element).closest('.form-group').removeClass('has-error');
			  $(element).closest('.form-group').find('.help-block').html('');
		   },
				submitHandler: submitForm
		   }); 
		   
		   
		   function submitForm(){
			   
			   $.ajax({
			   		url: 'api/recuperar.php',
			   		type: 'POST',
			   		data: $('#register-form').serialize(),
			   		dataType: 'json'
			   })
			   .done(function(data){
			   		
			   		$('#btn-signup').html('<img src="img/ajax-loader.gif" /> &nbsp; Verificando...').prop('disabled', true);
			   		$('input[type=text],input[type=email],input[type=text],input[type=password]').prop('disabled', true);
			   		
			   		setTimeout(function(){
								   
						if ( data.status =='success' ) {
							
							$('#errorDiv').slideDown('fast', function(){
								$(".form-group").hide();
								$('#errorDiv').html('<div class="">'+data.nombre+'<br>'+data.password+'<br><i><br>'+data.data+'</i></div>');
							}).delay(36000).slideUp('fast');

							$('#errorDiv').slideDown('fast', function(){
								$(".form-group").show();
								$('#errorDiv').html('<div class="alert alert-info">'+data.message+'</div>');
								$("#register-form").trigger('reset');
								$('input[type=text],input[type=email],input[type=text],input[type=password]').prop('disabled', false);
								$('#btn-signup').html('<span class="glyphicon glyphicon-log-in"></span> &nbsp; Buscar').prop('disabled', false);
								
							}).delay(38000).slideUp('fast');


							

							

						} else {
									   
						    $('#errorDiv').slideDown('fast', function(){
						      	$('#errorDiv').html('<div class="alert alert-danger">'+data.message+'</div>');
							  	$("#register-form").trigger('reset');
							  	$('input[type=text],input[type=email],input[type=text],input[type=password]').prop('disabled', false);
							  	$('#btn-signup').html('<span class="glyphicon glyphicon-log-in"></span> &nbsp; Registrarme').prop('disabled', false);
							}).delay(3000).slideUp('fast');
						}
								  
					},3000);
			   		
			   })
			   .fail(function(){
			   		$("#register-form").trigger('reset');
			   		alert('Se ha producido un error desconocido. Inténtalo de nuevo más tarde....');
			   });
		   }
});