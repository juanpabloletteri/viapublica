$(document).ready(function() {
    $('#ingresoexpedientes').bootstrapValidator({
        // To use feedback icons, ensure that you use Bootstrap v3.1.0 or later
        feedbackIcons: {
            valid: 'glyphicon glyphicon-ok',
            invalid: 'glyphicon glyphicon-remove',
            validating: 'glyphicon glyphicon-refresh'
        },
        fields: {
            numeroexpediente: {
                validators: {
                        stringLength: {
                        min: 2,
                        message: "Este campo no puede estar vacio"
                    },
                        notEmpty: {
                        message: 'Por favor. Ingrese un numero de expediente'
                    }
                }
            },
             anioexpediente: {
                validators: {
                    notEmpty: {
                        message: 'Por favor. Ingrese su año de expediente'
                    }
                }
            },
            empresa: {
                validators: {
                    notEmpty: {
                        message: 'Por favor. Ingrese una empresa'
                    }
                }
            },
            callenombre: {
                validators: {
                    notEmpty: {
                        message: 'Por favor. Ingrese una direccion'
                    }
                }
            },
            callenumero: {
                validators: {
                    notEmpty: {
                        message: 'Por favor. Ingrese una numeracion de calle'
                    }
                }
            },
            fechaingreso: {
                validators: {
                    notEmpty: {
                        message: 'Por favor. Ingrese fecha de ingreso'
                    }
                }
            },
            observaciones: {
                validators: {

                }
            },
            codPost: {
                validators: {
                    notEmpty: {
                        message: 'Por favor. Ingrese su código postal'
                    },
                    zipCode: {
                        country: 'US',
                        message: 'Por favor. Ingrese un código postal válido'
                    }
                }
            },
            comentario: {
                validators: {
                      stringLength: {
                        min: 10,
                        max: 200,
                        message:'Por favor. Ingrese entre 10 y 200 caracteres'
                    },
                    notEmpty: {
                        message: 'Por favor. Ingrese un comentario'
                    }
                    }
                }
            }
        })
        .on('success.form.bv', function(e) {
            $('#success_message').slideDown({ opacity: "show" }, "slow") // Do something ...
                $('#ingresoexpedientes').data('bootstrapValidator').resetForm();

            // Prevent form submission
            e.preventDefault();

            // Get the form instance
            var $form = $(e.target);

            // Get the BootstrapValidator instance
            var bv = $form.data('bootstrapValidator');            

            // Use Ajax to submit form data
            /*$.post($form.attr('action'), $form.serialize(), function(result) {
                console.log(result);
            }, 'json');*/

            //CAMBIARRRRRRRRRRRRRRRRRR
            
            /*$.ajax({
                url:"pagina1.php",
                type:"POST",
                data:{"first_name":$('#nombre').val()},
                dataType:'text',
                success: function(res){

                    alert(res);
                }

            })*/
        });
});

