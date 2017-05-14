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

            //sweetalert2

            swal({
                title: 'Guardar',
                text: "Desea guardar los datos?",
                type: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Si, guardar!',
                cancelButtonText: 'No, cancelar!',
                confirmButtonClass: 'btn btn-success',
                cancelButtonClass: 'btn btn-danger',
                buttonsStyling: false
                }).then(function () {
                swal(
                    'Guardar!',
                    'Expediente ingresado correctamente.',
                    'success'
                )

                    $.ajax({
                        url:"nexoadministrador.php",
                        type:"POST",
                        data:{
                            accion:"agregar",
                            numeroexpediente:$('#numeroexpediente').val(),
                            anioexpediente:$('#anioexpediente').val(),
                            empresa:$('#empresa').val(),
                            callenombre:$('#callenombre').val(),
                            callenumero:$('#callenumero').val(),
                            fechaingreso:$('#fechaingreso').val(),
                            observaciones:$('#observaciones').val(),
                        },
                        //despues de guardar borra los campos
                        success: function(res){
                            $('#numeroexpediente').val(""),
                            //$('#anioexpediente').val(""),
                            //$('#empresa').val(""),
                            $('#callenombre').val(""),
                            $('#callenumero').val(""),
                            $('#fechaingreso').val(""),
                            $('#observaciones').val("");
                            //alert(res);
                        }

                    })

                }, function (dismiss) {
                // dismiss can be 'cancel', 'overlay',
                // 'close', and 'timer'
                if (dismiss === 'cancel') {
                    swal(
                    'Cancelar',
                    'guardado cancelado',
                    'error'
                    )
                }
            })
            
            //CAMBIARRRRRRRRRRRRRRRRRR
                      

        });
});

