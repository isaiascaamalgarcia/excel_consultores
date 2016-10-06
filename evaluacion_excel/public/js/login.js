$(document).ready(function() {

  $('form').each(function() {  // attach to all form elements on page
    $(this).validate({
      rules: {
        name: { required: true, minlength: 3},
        last_name: { required: true, minlength: 2},
        username: { required: true, minlength: 3},
        pass: { required: true, minlength: 8}
      },
      messages: {
        name: "Debe introducir su nombre. Mínimo 3 caracteres",
        last_name: "Debe introducir su apellido(s). Mínimo 3 caracteres",
        username: "Debe introducir su nombre de usuario. Mínimo 3 caracteres",
        pass: "Debe introducir su contraseña. Mínimo 8 caracteres.",
      },
      errorClass: "error",
      validClass: "success",
      focusInvalid: true,
      submitHandler: function(form){
        var dataForm = $(form).serialize();
        $.ajax({
          type: "POST",
          url: $(form).attr('action'),
          dataType: 'JSON',
          data: dataForm,
          success: function(data){
            console.log(data);
            if (data.success === 1)
      			{
      				location.href = root_url;
      			} else {
              console.log('error');
      				$("[id^='error_']").text('');
      				$.each(data.errors, function(indice, mensaje){
      					$("#error_"+indice).text(mensaje);
      				});
      			}
      		}
        });
      }
    });
  });
});
