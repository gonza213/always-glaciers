//ELIMINAR SUBCATEGORIA
$(".btnEliminarSub").click(function(){

    var idSub = $(this).attr("idSub");

    Swal.fire({
        title: '¿Estás seguro de borrar la subcategoría?',
        text: '¡Si no lo está puede cancelar la acción!',
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        cancelButtonText: 'Cancelar',
        confirmButtonText: '¡Si, borrar la subcategoría!'
    }).then((result)=>{

        if(result.value){

            window.location = "index.php?pagina=subcategorias&idSub="+idSub;
        }
    })
});

//ELIMINAR RELACION
$(".btnEliminarRelacion").click(function(){

    var idRelacion = $(this).attr("idRelacion");

    Swal.fire({
        title: '¿Estás seguro de borrar la relación?',
        text: '¡Si no lo está puede cancelar la acción!',
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        cancelButtonText: 'Cancelar',
        confirmButtonText: '¡Si, borrar la relación!'
    }).then((result)=>{

        if(result.value){

            window.location = "index.php?pagina=relacion-excursiones&idRelacion="+idRelacion;
        }
    })
});

//ELIMINAR RELACION-LUGARES
$(".btnEliminarRelacionL").click(function(){

    var idRelacionL = $(this).attr("idRelacionL");

    Swal.fire({
        title: '¿Estás seguro de borrar la relación?',
        text: '¡Si no lo está puede cancelar la acción!',
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        cancelButtonText: 'Cancelar',
        confirmButtonText: '¡Si, borrar la relación!'
    }).then((result)=>{

        if(result.value){

            window.location = "index.php?pagina=relacion-lugares&idRelacionL="+idRelacionL;
        }
    })
});

//ELIMINAR RELACION-BUSES
$(".btnEliminarRelacionB").click(function(){

    var idRelacionB = $(this).attr("idRelacionB");

    Swal.fire({
        title: '¿Estás seguro de borrar la relación?',
        text: '¡Si no lo está puede cancelar la acción!',
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        cancelButtonText: 'Cancelar',
        confirmButtonText: '¡Si, borrar la relación!'
    }).then((result)=>{

        if(result.value){

            window.location = "index.php?pagina=relacion-buses&idRelacionB="+idRelacionB;
        }
    })
});

//ELIMINAR RELACION-RENTA
$(".btnEliminarRelacionR").click(function(){

    var idRelacionR = $(this).attr("idRelacionR");

    Swal.fire({
        title: '¿Estás seguro de borrar la relación?',
        text: '¡Si no lo está puede cancelar la acción!',
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        cancelButtonText: 'Cancelar',
        confirmButtonText: '¡Si, borrar la relación!'
    }).then((result)=>{

        if(result.value){

            window.location = "index.php?pagina=relacion-rentas&idRelacionR="+idRelacionR;
        }
    })
});

// IMAGEN BANNER
$(".imagen").change(function(){

    var imagen = this.files[0];

    //validamos formato de imagen
    if(imagen["type"] != "image/jpeg" && imagen["type"] != "image/png"){

        $(".imagen").val("");

        Swal.fire({
            title: '¡Error al subir imagen!',
            text: '¡La imagen debe estar en formato JPG o PNG!',
            icon: 'error',
            confirmButtonText: 'Cerrar'
        });

    }else{

        var datosImagen = new FileReader;
        datosImagen.readAsDataURL(imagen);

        $(datosImagen).on("load", function(event){

            var rutaImagen = event.target.result;

            $(".previsualizar").attr("src", rutaImagen);
        })
    }
})

//ELIMINAR ELIMINAR
$(".btnEliminarBanner").click(function(){

    var idBanner = $(this).attr("idBanner");

    Swal.fire({
        title: '¿Estás seguro de borrar el slider?',
        text: '¡Si no lo está puede cancelar la acción!',
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        cancelButtonText: 'Cancelar',
        confirmButtonText: '¡Si, borrar el slider!'
    }).then((result)=>{

        if(result.value){

            window.location = "index.php?pagina=banner&idBanner="+idBanner;
        }
    })
});

// IMAGEN LOGO
$(".logo").change(function(){

    var logo = this.files[0];

    //validamos formato de imagen
    if(logo["type"] != "image/jpeg" && logo["type"] != "image/png"){

        $(".logo").val("");

        Swal.fire({
            title: '¡Error al subir imagen!',
            text: '¡La imagen debe estar en formato JPG o PNG!',
            icon: 'error',
            confirmButtonText: 'Cerrar'
        });

    }else{

        var datosImagen = new FileReader;
        datosImagen.readAsDataURL(logo);

        $(datosImagen).on("load", function(event){

            var rutaImagen = event.target.result;

            $(".previsualizarLogo").attr("src", rutaImagen);
        })
    }
})

// IMAGEN LOGO
$(".logo-footer").change(function(){

    var logo = this.files[0];

    //validamos formato de imagen
    if(logo["type"] != "image/jpeg" && logo["type"] != "image/png"){

        $(".logo-footer").val("");

        Swal.fire({
            title: '¡Error al subir imagen!',
            text: '¡La imagen debe estar en formato JPG o PNG!',
            icon: 'error',
            confirmButtonText: 'Cerrar'
        });

    }else{

        var datosImagen = new FileReader;
        datosImagen.readAsDataURL(logo);

        $(datosImagen).on("load", function(event){

            var rutaImagen = event.target.result;

            $(".previsualizarLogoFooter").attr("src", rutaImagen);
        })
    }
})


//ELIMINAR EXCURSION
$(".btnEliminarExcursion").click(function(){

    var idExcursion = $(this).attr("idExcursion");

    Swal.fire({
        title: '¿Estás seguro de borrar la excursión?',
        text: '¡Si no lo está puede cancelar la acción!',
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        cancelButtonText: 'Cancelar',
        confirmButtonText: '¡Si, borrar la excursión!'
    }).then((result)=>{

        if(result.value){

            window.location = "index.php?pagina=excursiones&idExcursion="+idExcursion;
        }
    })
});

// ELIMINAR IMAGEN GALERIA
$(".btnEliminarGaleria").click(function(){

    var idGaleria = $(this).attr("idGaleria");

    Swal.fire({
        title: '¿Estás seguro de borrar la imagen?',
        text: '¡Si no lo está puede cancelar la acción!',
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        cancelButtonText: 'Cancelar',
        confirmButtonText: '¡Si, borrar la imagen!'
    }).then((result)=>{

        if(result.value){

            window.location = "index.php?pagina=ver-galeria&idGaleria="+idGaleria;
        }
    })
});

// ELIMINAR IMAGEN  USUARIO
$(".btnEliminarAdmin").click(function(){

    var idAdmin = $(this).attr("idAdmin");

    Swal.fire({
        title: '¿Estás seguro de borrar el usuario?',
        text: '¡Si no lo está puede cancelar la acción!',
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        cancelButtonText: 'Cancelar',
        confirmButtonText: '¡Si, borrar el usuario!'
    }).then((result)=>{

        if(result.value){

            window.location = "index.php?pagina=administrador&idAdmin="+idAdmin;
        }
    })
});

// ELIMINAR CONTACTOS
$(".btnEliminarContacto").click(function(){

    var idContacto = $(this).attr("idContacto");

    Swal.fire({
        title: '¿Estás seguro de borrar el contacto?',
        text: '¡Si no lo está puede cancelar la acción!',
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        cancelButtonText: 'Cancelar',
        confirmButtonText: '¡Si, borrar el contacto!'
    }).then((result)=>{

        if(result.value){

            window.location = "index.php?pagina=contacto&idContacto="+idContacto;
        }
    })
});

// ELIMINAR PREGUNTAS
$(".btnEliminarPregunta").click(function(){

    var idPregunta = $(this).attr("idPregunta");

    Swal.fire({
        title: '¿Estás seguro de borrar el pregunta?',
        text: '¡Si no lo está puede cancelar la acción!',
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        cancelButtonText: 'Cancelar',
        confirmButtonText: '¡Si, borrar el pregunta!'
    }).then((result)=>{

        if(result.value){

            window.location = "index.php?pagina=frecuentes&idPregunta="+idPregunta;
        }
    })
});

// ELIMINAR RECORRIDO
$(".btnEliminarRecorrido").click(function(){

    var idRecorrido = $(this).attr("idRecorrido");

    Swal.fire({
        title: '¿Estás seguro de borrar el recorrido?',
        text: '¡Si no lo está puede cancelar la acción!',
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        cancelButtonText: 'Cancelar',
        confirmButtonText: '¡Si, borrar el recorrido!'
    }).then((result)=>{

        if(result.value){

            window.location = "index.php?pagina=ver-recorrido&idRecorrido="+idRecorrido;
        }
    })
});





///////////////////////////////////////////////
// GALERIA DE IMAGENES
//////////////////////////////////////////////


// Arrastre Imagen
if($('#columnSlide').html() == 0){

    $('#columnSlide').css({'height': '100px'});
}else{

    $('#columnSlide').css({'height': 'auto'});
}

//Subir Imagen
$("#columnSlide").on("dragover", function(e){

    e.preventDefault();
    e.stopPropagation();

    $("#columnSlide").css({"background":"url(vistas/img/pattern.jpg)"});
});

$("#columnSlide").on("drop", function(e){

    e.preventDefault();
    e.stopPropagation();

    $("#columnSlide").css({"background":""});

    var archivo = e.originalEvent.dataTransfer.files;
    var imagen = archivo[0];
    var idGaleria = $(this).parent().attr("id");
    console.log("idGaleria",idGaleria)

    var imagenSize = imagen.size;

    if(Number(imagenSize) > 2000000){

        $("#columnSlide").before('<div class="alert alert-danger alerta text-center">El archivo excede lo permitido, 200kb</div>')

    }else{

        $(".alerta").remove();
    }

    //tipo de imagen
    var imagenType = imagen.type;
    if(imagenType == "image/jpeg" || imagenType == "image/png"){

        $(".alerta").remove();
    

    }else{

        $("#columnSlide").before('<div class="alert alert-danger alerta text-center">El archivo debe ser formato de JPG o PNG</div>');
    }

    // Subir imagen al servidor
    if(Number(imagenSize) < 2000000 && imagenType == "image/jpeg" || imagenType == "image/png"){


        var datos = new FormData();

        datos.append("imagen", imagen);
        datos.append("idGaleria", idGaleria);

        $.ajax({
            url: "vistas/ajax/ajax.php",
            method: "POST",
            data: datos,
            cache: false,
            contentType: false,
            processData: false,
            dataType: "json",
            beforeSend: function(){

                $("#columnSlide").before('<img src="vistas/img/spinner.gif" style="width: 40px !important;" id="status">');
            },
            success: function(respuesta){

                console.log("respuesta", respuesta);
            
                $("#status").remove();

                if(respuesta == 0){
                    $("#columnSlide").before('<div class="alert alert-danger alerta text-center">La imagen es inferior a 600px * 600px</div>')
                }else{

                    $('#columnSlide').css({'height': 'auto'});
                   
                    $("#columnSlide").append('<li style=" list-style: none; display: inline-block" id="'+respuesta["id"]+'"><button class="fa fa-times pull-right btn btn-danger p-2 eliminarImagen" ruta="'+respuesta["imagen"]+'"></button><img style="width: 200px !important; height: 200px !important;" src="'+respuesta["imagen"].slice(6)+'" class="img-thumbnail"></li>');

                    $("#ordenImagenes").append('<li style="list-style: none; display: inline-block" class="p-2 border border-warning m-2" ><button class="fa fa-eye pull-right btn btn-info p-2 editarImagen"></button> <img style="width: 200px !important; height: 200px !important;" src="'+respuesta["imagen"].slice(6)+'" class="img-thumbnail"><p>'+respuesta["id_excursion"]+'</p></li>');

                    window.location.reload();

                   
                }
            }
        })
    }
});

// EDITAR IMAGEN
$(".editarImagen").click(function(){

    idImagen = $(this).parent().attr("id");
    idGaleria = $(this).parent().parent().attr("id");
    rutaImagen = $(this).parent().children("img").attr("src");


    $(this).parent().html('<img style="width: 200px !important; height: 200px !important;" src="'+rutaImagen+'" class="img-thumbnail"><hr><div class="form-group"><input type="hidden" id="id_excursion" value="'+idGaleria+'"></div><div class="form-group"><button type="submit" class="btn btn-warning btn-block" id="activar'+idImagen+'">Activar</button></div>');

    $("#guarda"+idImagen).click(function(){

        enviarId = idImagen;
        enviarIdExcursion = $("#id_excursion").val();

        var actualizarImagen = new FormData();

        actualizarImagen.append("enviarId",enviarId);
        actualizarImagen.append("enviarIdExcursion",enviarIdExcursion);

        $.ajax({
            url: "vistas/ajax/ajax.php",
            method: "POST",
            data: actualizarImagen,
            cache: false,
            contentType: false,
            processData: false,
            dataType: "json",
            success: function(respuesta){

                console.log("respuesta", respuesta);
            }
        })

    })

});

// ELIMINAR IMAGEN
$(".eliminarImagen").click(function(){

    idImagen = $(this).parent().attr("id");
    rutaImagen = $(this).attr("ruta");

    $(this).parent().remove();

    var borrarItem = new FormData();

    borrarItem.append("idImagen", idImagen);
    borrarItem.append("rutaImagen", rutaImagen);

    $.ajax({
        url: "vistas/ajax/ajax.php",
        method: "POST",
        data: borrarItem,
        cache: false,
        contentType: false,
        processData: false,
        success: function(respuesta){

            console.log("respuesta", respuesta);
        }
    })

    window.location.reload();

});


//Editar subcategoria

$(".btnEditarSub").click(function() {

    var idEditSub = $(this).attr("idEditSub");

    var datos = new FormData();
    datos.append("idEditSub", idEditSub);

    $.ajax({
        url: 'vistas/ajax/ajax.php',
        method: 'POST',
        data: datos,
        cache: false,
        contentType: false,
        processData: false,
        dataType: 'json',
        success: function(respuesta) {
            $('#categoria').val(respuesta["categoria"]);
            $('#subcategoria').val(respuesta["subcategoria"]);
            $('#id').val(respuesta["id"]);
        }
    });
})


//ELIMINAR Opcional
$(".btnEliminarOpcional").click(function(){

    var idOpcional = $(this).attr("idOpcional");

    Swal.fire({
        title: '¿Estás seguro de borrar el opcional?',
        text: '¡Si no lo está puede cancelar la acción!',
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        cancelButtonText: 'Cancelar',
        confirmButtonText: '¡Si, borrar el opcional!'
    }).then((result)=>{

        if(result.value){

            window.location = "index.php?pagina=opcionales&idOpcional="+idOpcional;
        }
    })
});

function botonBuses2(){


    $('#buses-precio').css('display','block');
    $('#titulo-buses').css('display','block');
    $('#excursiones-precio').css('display','none');
    $('#titulo-excursion').css('display','none');
    $('#renta-precio').css('display','none');
    $('#titulo-renta').css('display','none');


}

function botonExcursiones(){


    $('#buses-precio').css('display','none');
    $('#titulo-buses').css('display','none');
    $('#excursiones-precio').css('display','block');
    $('#titulo-excursion').css('display','block');
    $('#renta-precio').css('display','none');
    $('#titulo-renta').css('display','none');


}

function botonRenta2(){


    $('#buses-precio').css('display','none');
    $('#titulo-buses').css('display','none');
    $('#excursiones-precio').css('display','none');
    $('#titulo-excursion').css('display','none');
    $('#renta-precio').css('display','block');
    $('#titulo-renta').css('display','block');


}


//ELIMINAR Opcional relacion
$(".btnEliminarRelacionOp").click(function(){

    var idRelacionOp = $(this).attr("idRelacionOp");

    Swal.fire({
        title: '¿Estás seguro de borrar la relación?',
        text: '¡Si no lo está puede cancelar la acción!',
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        cancelButtonText: 'Cancelar',
        confirmButtonText: '¡Si, borrar la relación!'
    }).then((result)=>{

        if(result.value){

            window.location = "index.php?pagina=relacion-opcional&idRelacionOp="+idRelacionOp;
        }
    })
});

function botonTraslado(){

    $('#trasladoOpcional').css('display','block');
    $('#almuerzoOpcional').css('display','none');
    $('#navegacionOpcional').css('display','none');
    $('#viandaOpcional').css('display','none');
    $('#entradaOpcional').css('display','none');
    $('#busesOpcional').css('display','none');
    $('#rentaOpcional').css('display','none');
}

function botonAlmuerzo(){

    $('#trasladoOpcional').css('display','none');
    $('#almuerzoOpcional').css('display','block');
    $('#navegacionOpcional').css('display','none');
    $('#viandaOpcional').css('display','none');
    $('#entradaOpcional').css('display','none');
    $('#busesOpcional').css('display','none');
    $('#rentaOpcional').css('display','none');
}


function botonNavegacion(){

    $('#trasladoOpcional').css('display','none');
    $('#almuerzoOpcional').css('display','none');
    $('#navegacionOpcional').css('display','block');
    $('#viandaOpcional').css('display','none');
    $('#entradaOpcional').css('display','none');
    $('#busesOpcional').css('display','none');
    $('#rentaOpcional').css('display','none');
}

function botonVianda(){

    $('#trasladoOpcional').css('display','none');
    $('#almuerzoOpcional').css('display','none');
    $('#navegacionOpcional').css('display','none');
    $('#viandaOpcional').css('display','block');
    $('#entradaOpcional').css('display','none');
    $('#busesOpcional').css('display','none');
    $('#rentaOpcional').css('display','none');
}

function botonEntrada(){

    $('#entradaOpcional').css('display','block');
    $('#trasladoOpcional').css('display','none');
    $('#almuerzoOpcional').css('display','none');
    $('#navegacionOpcional').css('display','none');
    $('#viandaOpcional').css('display','none');
    $('#busesOpcional').css('display','none');
    $('#rentaOpcional').css('display','none');
}

function botonBuses(){

    $('#entradaOpcional').css('display','none');
    $('#trasladoOpcional').css('display','none');
    $('#almuerzoOpcional').css('display','none');
    $('#navegacionOpcional').css('display','none');
    $('#viandaOpcional').css('display','none');
    $('#busesOpcional').css('display','block');
    $('#rentaOpcional').css('display','none');
}


function botonRenta(){

    $('#entradaOpcional').css('display','none');
    $('#trasladoOpcional').css('display','none');
    $('#almuerzoOpcional').css('display','none');
    $('#navegacionOpcional').css('display','none');
    $('#viandaOpcional').css('display','none');
    $('#busesOpcional').css('display','none');
    $('#rentaOpcional').css('display','block');
}



$(".btnEditarTra").click(function() {

    var idEditTra = $(this).attr("idEditTra");

    var datos = new FormData();
    datos.append("idEditTra", idEditTra);

    $.ajax({
        url: 'vistas/ajax/ajax.php',
        method: 'POST',
        data: datos,
        cache: false,
        contentType: false,
        processData: false,
        dataType: 'json',
        success: function(respuesta) {
            $('#excursionM').val(respuesta["excursion"]);
            $('#nombreM').val(respuesta["nombre"]);
            $('#emailM').val(respuesta["email"]);
            $('#telM').val(respuesta["telefono"]);
            $('#dniM').val(respuesta["dni"]);
            $('#nacM').val(respuesta["nacionalidad"]);
            $('#otrosM').val(respuesta["otros"]);
            $('#fechaM').val(respuesta["fecha"]);
            $('#turnoM').val(respuesta["turnos"]);
            $('#adultoM').val(respuesta["adultos"]);
            $('#ninoM').val(respuesta["ninos"]);
            $('#opcionalM').val(respuesta["opcionales"]);
            $('#precioM').html(respuesta["precio"]);
            // $('#id').val(respuesta["id"]);
            console.log(respuesta);
        }
    });
})

$(".btnEliminarTra").click(function(){

    var idTra = $(this).attr("idTra");

    Swal.fire({
        title: '¿Estás seguro de borrar la Reserva?',
        text: '¡Si no lo está puede cancelar la acción!',
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        cancelButtonText: 'Cancelar',
        confirmButtonText: '¡Si, borrar la Reserva!'
    }).then((result)=>{

        if(result.value){

            window.location = "index.php?pagina=transferencia&idTra="+idTra;
        }
    })
});

// RESERVAS

$(".btnVerMercado").click(function() {

    var idMercado = $(this).attr("idMercado");


    var datos = new FormData();
    datos.append("idMercado", idMercado);

    $.ajax({
        url: 'vistas/ajax/ajax.php',
        method: 'POST',
        data: datos,
        cache: false,
        contentType: false,
        processData: false,
        dataType: 'json',
        success: function(respuesta) {

            var pasajeros = JSON.parse(respuesta[9]);


            if($(`#verReserva2`)){
                $(`#verReserva2`).remove();
            }

               $('#verReserva').append(//html
                   `
                <div class="row" id="verReserva2">
                    <div class="col-md-12">
                        <span>Excursión: <b>${respuesta[1]}</b> </span>
                    </div>
                    <div class="col-md-6">
                        <span>Turno: <b>${respuesta[3]}</b> </span>
                    </div>
                    <div class="col-md-6">
                        <span>Fecha: <b>${respuesta[2]}</b> </span>
                    </div>
                    <div class="col-md-12">
                        <span>Pasajeros: 
                        <span>Adultos: <b>${respuesta[4]}</b> </span>, 
                        <span>Niños: <b>${respuesta[5]}</b> </span>,
                        <span>Bebés: <b>${respuesta[6]}</b> </span>
                        </span>
                    </div>
                    <div class="col-md-12">
                        <span>Opcionales: <b>${respuesta[7]}</b> </span>
                    </div>
                    <div class="col-md-12">
                        <h4 class="pull-right">Total: <b>$${respuesta[8]}</b> </h4>
                    </div>
                 </div>

                   `);

                   pasajeros.forEach((element, index) => {
                    if($(`#verPasajeroReserva${index}`)){
                        $(`#verPasajeroReserva${index}`).remove();
                    }
    
                    $('#verPasajerosReserva').append(//html
                        `
                     <div class="row" id="verPasajeroReserva${index}">
                        <div class="col-md-6">
                            <span>Nombre: <b>${element.nombre}</b> </span>
                        </div>
                        <div class="col-md-6">
                            <span>Apellidos: <b>${element.apellidos}</b> </span>
                        </div>
                        <div class="col-md-4">
                            <span>DNI o Pasaporte: <b>${element.dni}</b> </span>
                        </div>
                        <div class="col-md-4">
                            <span>Edad: <b>${element.edad}</b> </span>
                        </div>
                        <div class="col-md-4">
                            <span>Nacionalidad: <b>${element.nacionalidad}</b> </span>
                        </div>
                        <br> <br>
                    </div>
                        `)
               });
            

        }
    });
})

//ELIMINAR RSERVAS
$(".btnBorrarMercado").click(function(){

    var idMercado = $(this).attr("idMercado");

    Swal.fire({
        title: '¿Estás seguro de borrar la reserva?',
        text: '¡Si no lo está puede cancelar la acción!',
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        cancelButtonText: 'Cancelar',
        confirmButtonText: '¡Si, borrar la reserva!'
    }).then((result)=>{

        if(result.value){

            window.location = "index.php?pagina=mercado-pago&idMercado="+idMercado;
        }
    })
});

$(".btnBorrarPaypal").click(function(){

    var idPaypal = $(this).attr("idPaypal");

    Swal.fire({
        title: '¿Estás seguro de borrar la reserva?',
        text: '¡Si no lo está puede cancelar la acción!',
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        cancelButtonText: 'Cancelar',
        confirmButtonText: '¡Si, borrar la reserva!'
    }).then((result)=>{

        if(result.value){

            window.location = "index.php?pagina=paypal&idPaypal="+idPaypal;
        }
    })
});





// CARRITO

$(".btnVerMercadoCarrito").click(function() {

    var idMercadoCarrito = $(this).attr("idMercadoCarrito");


    var datos = new FormData();
    datos.append("idMercadoCarrito", idMercadoCarrito);

    $.ajax({
        url: 'vistas/ajax/ajax.php',
        method: 'POST',
        data: datos,
        cache: false,
        contentType: false,
        processData: false,
        dataType: 'json',
        success: function(respuesta) {


            var ver = JSON.parse(respuesta[1]);
            
            var verPasajeros = JSON.parse(respuesta[3]);

           
           ver.forEach((element, index) => {

            if($(`#verCarrito${index}`)){
                $(`#verCarrito${index}`).remove();
            }
               $('#verCarrito').append(//html
                   `
                   <div class="row" id="verCarrito${index}">
                   <div class="col-md-12">
                       <span>Excursión: <b>${element.excursion}</b> </span>
                   </div>
                   <div class="col-md-6">
                       <span>Turno: <b>${element.turno}</b> </span>
                   </div>
                   <div class="col-md-6">
                       <span>Fecha: <b>${element.fecha}</b> </span>
                   </div>
                   <div class="col-md-12">
                       <span>Pasajeros: 
                       <span>Adultos: <b>${element.pasajeros.adultos}</b> </span>, 
                       <span>Niños: <b>${element.pasajeros.ninos}</b> </span>,
                       <span>Bebés: <b>${element.pasajeros.bebes}</b> </span>
                      </span>
                   </div>
                   <div class="col-md-12">
                       <span>Opcionales: <b>${element.opcionales}</b> </span>
                   </div>
                   <div class="col-md-12">
                       <h5 class="pull-right">Total: <b>$${element.totaL}</b> </h5>
                   </div>
               </div>
                   `);
           });


             verPasajeros.forEach((element, index) => {
                if($(`#verPasajeroCarrito${index}`)){
                    $(`#verPasajeroCarrito${index}`).remove();
                }

                $('#verPasajerosCarrito').append(//html
                    `
                 <div class="row" id="verPasajeroCarrito${index}">
                    <div class="col-md-6">
                        <span>Nombre: <b>${element.nombre}</b> </span>
                    </div>
                    <div class="col-md-6">
                        <span>Apellidos: <b>${element.apellidos}</b> </span>
                    </div>
                    <div class="col-md-4">
                        <span>DNI o Pasaporte: <b>${element.dni}</b> </span>
                    </div>
                    <div class="col-md-4">
                        <span>Edad: <b>${element.edad}</b> </span>
                    </div>
                    <div class="col-md-4">
                        <span>Nacionalidad: <b>${element.nacionalidad}</b> </span>
                    </div>
                    <br> <br>
                </div>
                    `)
           });
        }
    });
});

$(".btnBorrarMercadoCarrito").click(function(){

    var idMercadoCarrito = $(this).attr("idMercadoCarrito");

    Swal.fire({
        title: '¿Estás seguro de borrar la reserva?',
        text: '¡Si no lo está puede cancelar la acción!',
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        cancelButtonText: 'Cancelar',
        confirmButtonText: '¡Si, borrar la reserva!'
    }).then((result)=>{

        if(result.value){

            window.location = "index.php?pagina=mercado-pago&idMercadoCarrito="+idMercadoCarrito;
        }
    })
});

$(".btnBorrarPaypalCarrito").click(function(){

    var idPaypal = $(this).attr("idPaypal");

    Swal.fire({
        title: '¿Estás seguro de borrar la reserva?',
        text: '¡Si no lo está puede cancelar la acción!',
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        cancelButtonText: 'Cancelar',
        confirmButtonText: '¡Si, borrar la reserva!'
    }).then((result)=>{

        if(result.value){

            window.location = "index.php?pagina=paypal&idPaypal="+idPaypal;
        }
    })
});



$(".btnBorrarTurno").click(function(){

    var idBorrarTurno = $(this).attr("idBorrarTurno");

    Swal.fire({
        title: '¿Estás seguro de borrar el turno?',
        text: '¡Si no lo está puede cancelar la acción!',
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        cancelButtonText: 'Cancelar',
        confirmButtonText: '¡Si, borrar el turno!'
    }).then((result)=>{

        if(result.value){

            window.location = "index.php?pagina=turnos&idBorrarTurno="+idBorrarTurno;
        }
    })
});


$(".btnBorrarDia").click(function(){

    var idBorrarDia = $(this).attr("idBorrarDia");

    Swal.fire({
        title: '¿Estás seguro de borrar el día?',
        text: '¡Si no lo está puede cancelar la acción!',
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        cancelButtonText: 'Cancelar',
        confirmButtonText: '¡Si, borrar el día de reserva!'
    }).then((result)=>{

        if(result.value){

            window.location = "index.php?pagina=dias-reservados&idBorrarDia="+idBorrarDia;
        }
    })
});

$(".btnBorrarMercadoRenta").click(function(){

    var idMercadoRenta = $(this).attr("idMercadoRenta");

    Swal.fire({
        title: '¿Estás seguro de borrar la reserva?',
        text: '¡Si no lo está puede cancelar la acción!',
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        cancelButtonText: 'Cancelar',
        confirmButtonText: '¡Si, borrar la reserva!'
    }).then((result)=>{

        if(result.value){

            window.location = "index.php?pagina=mercado-pago&idMercadoRenta="+idMercadoRenta;
        }
    })
});

$(".btnBorrarMercadoRentaP").click(function(){

    var idMercadoRenta = $(this).attr("idMercadoRenta");

    Swal.fire({
        title: '¿Estás seguro de borrar la reserva?',
        text: '¡Si no lo está puede cancelar la acción!',
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        cancelButtonText: 'Cancelar',
        confirmButtonText: '¡Si, borrar la reserva!'
    }).then((result)=>{

        if(result.value){

            window.location = "index.php?pagina=paypal&idMercadoRenta="+idMercadoRenta;
        }
    })
});

















