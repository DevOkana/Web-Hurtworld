$.validator.setDefaults({
      submitHandler: function() { 
        $.ajax({
            url: '../../../api/actualizar.php',
            type: 'POST',
            data: $('#signupForm').serialize(),
            dataType: 'json',
        })         
        .done(function(data){
          setTimeout(function(){
            if (data.status === 'success') {
              swal('Correcto', 'Su contraseña ha sido actualizada', 'success');
              $(".cmxform #oldpassword").val('');
              $(".cmxform #newpassword").val('');
              $(".cmxform #newpassword2").val('');
              setTimeout(function(){
                window.location.href= "index.php"
              },3000);
            } else {
              swal('Error', 'El usuario y contraseña que ingresaste es incorrecto', 'error');
              $(".cmxform #oldpassword").val('');
              $(".cmxform #newpassword").val('');
              $(".cmxform #newpassword2").val('');
            }
          },1000);
            
        })
        .fail(function(){
          
            swal('Correcto', 'Su contraseña ha sido actualizada', 'success');
              $(".cmxform #oldpassword").val('');
              $(".cmxform #newpassword").val('');
              $(".cmxform #newpassword2").val('');
          setTimeout(function(){
            window.location.href= "index.php"
          },3000);
         });

      }
});
    
    $().ready(function() {
      $("#signupForm").validate({
        rules: {
          oldpassword: {
            required: true,
            remote: {
              url: "../../../api/revisarpassword.php",
              type: "post",
              data: {
                oldpassword: function() {
                  return $( "#oldpassword" ).val();
                }
              }
            }
          },
          newpassword: {
            required: true,
            minlength: 8
          },
          
          newpassword2: {
            required: true,
            equalTo: "#newpassword"
          },
          
          agree: "required"
        },
        messages: {
          
          oldpassword: {
            required: "Por favor inserta la contraseña actual",
            remote : "La contraseña es incorrecta."
          },
          newpassword: {
            required: "Por favor inserte su nueva contraseña",
            minlength: "La nueva contraseña debe de tener mas de 8 character",

          },
          newpassword2: {
            required: "Por favor verifica la nueva contraseña",
            equalTo: "La contraseña no son iguales"
          },
          email: "Please enter a valid email address",
          agree: "Please accept our policy"
        }

      });
});