
function ver() {

    $("#ocultar-precios").remove();

    $("#precios").append( //html
        `<div id="ver-precios" class="col-md-12">
            <div class="form-group col-sm-3 col-xs-12 col-md-3 cel3 formContacto" style="padding:0;">
                <a style="cursor:pointer;" class="btn btn-danger btn-sm"  onclick="ocultar()"><i class="fa fa-arrow-left"></i> Volver a calcular</a>
            </div>
            <div class="form-group col-sm-4 col-xs-12 col-md-4 cel3 formContacto" style="padding:0;">
                Precio total: <input class="form-control input-lg required" name="precio" type="text" id="precioE" readonly></div>
            <div class="form-group col-sm-5 col-xs-12 col-md-5 cel3 formContacto" style="padding:0;"> 
                Precio con descuento:<input class="form-control input-lg required" name="comision" id="precioD" type="text"readonly></div>
         </div>`
    );



    var cantidadA = $("#adultosT").val();
    var cantidadN = $("#ninos").val();
    if(!cantidadN){
        cantidadN = 0;
    }
    var precioA = $("#precio_bajo").html().replace(/[$.]/g, '');
    var precioAdultos = parseInt(precioA) * cantidadA;
    var precioN = $("#precio_ninos").html().replace(/[$.]/g, '');
    var precioNinos = parseInt(precioN) * cantidadN;
    console.log(precioNinos);

    // Opcionales
    var opcionales = JSON.parse(localStorage.getItem('opcionales'));

    var almuerzo1 = opcionales[0].almuerzo1;
    if(almuerzo1 == null){
        var precio1 = 0;
    }else{
        var precio1 = almuerzo1.precio;
    }
    var almuerzo2 = opcionales[0].almuerzo2;
    if(almuerzo2 == null){
        var precio2 = 0;
    }else{
        var precio2 = almuerzo2.precio;
    }
    var almuerzo3 = opcionales[0].almuerzo3;
    if(almuerzo3 == null){
        var precio3 = 0;
    }else{
        var precio3 = almuerzo3.precio;
    }

    var vianda1 = opcionales[0].vianda1;
    if(vianda1 == null){
        var precio4 = 0;
    }else{
        var precio4 = vianda1.precio;
    }
    var vianda2 = opcionales[0].vianda2;
    if(vianda2 == null){
        var precio5 = 0;
    }else{
        var precio5 = vianda2.precio;
    }
    var vianda3 = opcionales[0].vianda3;
    if(vianda3 == null){
        var precio6 = 0;
    }else{
        var precio6 = vianda3.precio;
    }

    var navegacion1 = opcionales[0].navegacion1;
    if(navegacion1 == null){
        var precio7 = 0;
    }else{
        var precio7 = navegacion1.precio;
    }
    var navegacion2 = opcionales[0].navegacion2;
    if(navegacion2 == null){
        var precio8 = 0;
    }else{
        var precio8 = navegacion2.precio;
    }
    var navegacion3 = opcionales[0].navegacion3;
    if(navegacion3 == null){
        var precio9 = 0;
    }else{
        var precio9 = navegacion3.precio;
    }
  

    let sumaOpcionales = (precio1 + precio2 + precio3 + precio4 + precio5 + precio6 + precio7 + precio8 + precio9) * (parseInt(cantidadA) + parseInt(cantidadN));
    console.log(sumaOpcionales);


    var total = precioAdultos + precioNinos + sumaOpcionales;



    var descT = $("#descTra").val();
    var desc = (total * descT) / 100;
    var descuento = total - desc;

    if (cantidadA >= 1) {

        $("#precioE").val(Intl.NumberFormat("de-DE").format(total));
        $("#precioD").val(Intl.NumberFormat("de-DE").format(descuento));
        $("#precio-final").html(Intl.NumberFormat("de-DE").format(descuento));
        $("#precioFinal").val(Intl.NumberFormat("de-DE").format(descuento));


    } else {

        Swal.fire(
            'La cantidad de adultos deben ser mayor a 0!',
            'You clicked the button!',
            'warning'
        )

        $("#ver-precios").remove();

        $("#precios").append( //html
            `<div id="ocultar-precios" class="col-md-12">
                    <div class="form-group col-sm-3 col-xs-12 col-md-3 cel3 formContacto" style="padding:0;">
                                <a style="cursor:pointer;" class="btn btn-primary btn-sm" onclick="ver()">Calcular precios <i class="fa fa-arrow-right"></i></a>
                    </div>
            </div>`
        );

        $("#precio-final").html('0');
    }

    if (cantidadN < 0) {
        Swal.fire(
            'La cantidad de niños deben ser igual o mayor a 0!',
            'You clicked the button!',
            'warning'
        )

        $("#ver-precios").remove();

        $("#precios").append( //html
            `<div id="ocultar-precios" class="col-md-12">
                    <div class="form-group col-sm-3 col-xs-12 col-md-3 cel3 formContacto" style="padding:0;">
                        <a style="cursor:pointer;" class="btn btn-primary btn-sm" onclick="ver()">Calcular precios <i class="fa fa-arrow-right"></i></a>
                    </div>
            </div>`
        );

        $("#precio-final").html('0');

    }


}

function ocultar() {
    $("#ver-precios").remove();

    $("#precios").append( //html
        `<div id="ocultar-precios" class="col-md-12">
                <div class="form-group col-sm-3 col-xs-12 col-md-3 cel3 formContacto" style="padding:0;">
                        <a style="cursor:pointer;" class="btn btn-primary btn-sm" onclick="ver()">Calcular precios <i class="fa fa-arrow-right"></i></a>
                </div>
        </div>`
    );
}


function modal(){
    $('#prueba').modal('toggle');

}

$('#boton-guardar').click(function(){        
    /*Captura de datos escrito en los inputs*/        
    var nom = document.getElementById("nameP").value;
    var edad = document.getElementById("edadP").value;
    var dni = document.getElementById("dniP").value;
    var nac = document.getElementById("nacP").value;

    let pasajeros = {
        "nombre": nom,
        "edad": edad,
        "dni": dni,
        "nac": nac,
    }

    var datos = [];


    datos.push(pasajeros)



    /*Guardando los datos en el LocalStorage*/

       localStorage.setItem('datos', JSON.stringify(datos))

 
   

    $('#infoPasajeros').before(//HTML
            `
            <div class="row formContacto">
            <div class="col-md-12">
            <h5>Otros pasajeros</h5>
                </div>
                <div class="col-md-6">
                    <p>Nombre: <span id="verNo"></span></p>
                </div>
                <div class="col-md-6">
                    <p>Edad: <span id="verEd"></span></p>
                </div>
                <div class="col-md-6">
                    <p>DNI: <span id="verDNI"></span></p>
                </div>
                <div class="col-md-6">
                    <p>Nacionalidad: <span id="verNa"></span></p>
                </div>
            </div>
            `
            )

            // Object.keys(localStorage).forEach(function(key){
                    var xxx = localStorage.getItem('datos');

                    $('#xxx').val(xxx);
            //  });

            $('#prueba').modal('hide');
  

});   

$('body').hover(function() {

    var guardado = JSON.parse(localStorage.getItem('datos'));
    var gonza = 'Hola'

    if(guardado){


        $('#verNo').html(guardado[0].nombre);
        $('#verEd').html(guardado[0].edad);
        $('#verDNI').html(guardado[0].dni);
        $('#verNa').html(guardado[0].nac);

    }



})

$('#talmuerzoRsm1').click(function(){
    var precio = $('#tprecioAlmuerzo1').val();
    var replace = precio.replace(/[$.]/g, '');
    var num = parseInt(replace);
    var titulo = $('#tAlmuerzo1').html();

    var almuerzo = {
        "titulo": titulo,
        "precio": num,
    }
    if($('#talmuerzoRsm1').prop('checked')){

        localStorage.setItem('almuerzo1', JSON.stringify(almuerzo));

    }else{
        localStorage.removeItem('almuerzo1');
    }
});

$('#talmuerzoRsm2').click(function(){
    var precio = $('#tprecioAlmuerzo2').val();
    var replace = precio.replace(/[$.]/g, '');
    var num = parseInt(replace);
    var titulo = $('#tAlmuerzo2').html();

    var almuerzo = {
        "titulo": titulo,
        "precio": num,
    }
    if($('#talmuerzoRsm2').prop('checked')){

        localStorage.setItem('almuerzo2', JSON.stringify(almuerzo));
    }else{
        localStorage.removeItem('almuerzo2');
    }
});

$('#talmuerzoRsm3').click(function(){
    var precio = $('#tprecioAlmuerzo3').val();
    var replace = precio.replace(/[$.]/g, '');
    var num = parseInt(replace);
    var titulo = $('#tAlmuerzo3').html();

    var almuerzo = {
        "titulo": titulo,
        "precio": num,
    }
    if($('#talmuerzoRsm3').prop('checked')){

        localStorage.setItem('almuerzo3', JSON.stringify(almuerzo));
    }else{
        localStorage.removeItem('almuerzo3');
    }
});

$('#tviandaRsm1').click(function(){
    var precio = $('#tprecioVianda1').val();
    var replace = precio.replace(/[$.]/g, '');
    var num = parseInt(replace);
    var titulo = $('#tVianda1').html();

    var vianda = {
        "titulo": titulo,
        "precio": num,
    }
    if($('#tviandaRsm1').prop('checked')){

        localStorage.setItem('vianda1', JSON.stringify(vianda));
    }else{
        localStorage.removeItem('vianda1');
    }
});

$('#tviandaRsm2').click(function(){
    var precio = $('#tprecioVianda2').val();
    var replace = precio.replace(/[$.]/g, '');
    var num = parseInt(replace);
    var titulo = $('#tVianda2').html();

    var vianda = {
        "titulo": titulo,
        "precio": num,
    }
    if($('#tviandaRsm2').prop('checked')){

        localStorage.setItem('vianda2', JSON.stringify(vianda));
    }else{
        localStorage.removeItem('vianda2');
    }
});

$('#tviandaRsm3').click(function(){
    var precio = $('#tprecioVianda3').val();
    var replace = precio.replace(/[$.]/g, '');
    var num = parseInt(replace);
    var titulo = $('#tVianda3').html();

    var vianda = {
        "titulo": titulo,
        "precio": num,
    }
    if($('#tviandaRsm3').prop('checked')){

        localStorage.setItem('vianda3', JSON.stringify(vianda));
    }else{
        localStorage.removeItem('vianda3');
    }
});

$('#tnavegacionRsm1').click(function(){
    var precio = $('#tprecioNavegacion1').val();
    var replace = precio.replace(/[$.]/g, '');
    var num = parseInt(replace);
    var titulo = $('#tnavegacion1').html();

    var navegacion = {
        "titulo": titulo,
        "precio": num,
    }
    if($('#tnavegacionRsm1').prop('checked')){

        localStorage.setItem('navegacion1', JSON.stringify(navegacion));
    }else{
        localStorage.removeItem('navegacion1');
    }
});

$('#tnavegacionRsm2').click(function(){
    var precio = $('#tprecioNavegacion2').val();
    var replace = precio.replace(/[$.]/g, '');
    var num = parseInt(replace);
    var titulo = $('#tnavegacion2').html();

    var navegacion = {
        "titulo": titulo,
        "precio": num,
    }
    if($('#tnavegacionRsm2').prop('checked')){

        localStorage.setItem('navegacion2', JSON.stringify(navegacion));
    }else{
        localStorage.removeItem('navegacion2');
    }
});

$('#tnavegacionRsm3').click(function(){
    var precio = $('#tprecioNavegacion3').val();
    var replace = precio.replace(/[$.]/g, '');
    var num = parseInt(replace);
    var titulo = $('#tnavegacion3').html();

    var navegacion = {
        "titulo": titulo,
        "precio": num,
    }
    if($('#tnavegacionRsm3').prop('checked')){

        localStorage.setItem('navegacion3', JSON.stringify(navegacion));
    }else{
        localStorage.removeItem('navegacion3');
    }
});

$('#tentradaRsm1').click(function(){
    var precio = $('#tprecioEntrada1').val();
    var replace = precio.replace(/[$.]/g, '');
    var num = parseInt(replace);
    var titulo = $('#tentrada1').html();

    var entrada = {
        "titulo": titulo,
        "precio": num,
    }
    if($('#tentradaRsm1').prop('checked')){

        localStorage.setItem('entrada1', JSON.stringify(entrada));
    }else{
        localStorage.removeItem('entrada1');
    }
});

$('#tentradaRsm2').click(function(){
    var precio = $('#tprecioEntrada2').val();
    var replace = precio.replace(/[$.]/g, '');
    var num = parseInt(replace);
    var titulo = $('#tentrada2').html();

    var entrada = {
        "titulo": titulo,
        "precio": num,
    }
    if($('#tentradaRsm2').prop('checked')){

        localStorage.setItem('entrada2', JSON.stringify(entrada));
    }else{
        localStorage.removeItem('entrada2');
    }
});

$('#tentradaRsm3').click(function(){
    var precio = $('#tprecioEntrada3').val();
    var replace = precio.replace(/[$.]/g, '');
    var num = parseInt(replace);
    var titulo = $('#tentrada3').html();

    var entrada = {
        "titulo": titulo,
        "precio": num,
    }
    if($('#tentradaRsm3').prop('checked')){

        localStorage.setItem('entrada3', JSON.stringify(entrada));
    }else{
        localStorage.removeItem('entrada3');
    }
});

$('#containerTransferencia').change(function(){

    var almuerzo1 = JSON.parse(localStorage.getItem('almuerzo1'));
    var almuerzo2 = JSON.parse(localStorage.getItem('almuerzo2'));
    var almuerzo3 = JSON.parse(localStorage.getItem('almuerzo3'));
    var vianda1 = JSON.parse(localStorage.getItem('vianda1'));
    var vianda2 = JSON.parse(localStorage.getItem('vianda2'));
    var vianda3 = JSON.parse(localStorage.getItem('vianda3'));
    var navegacion1 = JSON.parse(localStorage.getItem('navegacion1'));
    var navegacion2 = JSON.parse(localStorage.getItem('navegacion2'));
    var navegacion3 = JSON.parse(localStorage.getItem('navegacion3'));
    var entrada1 = JSON.parse(localStorage.getItem('entrada1'));
    var entrada2 = JSON.parse(localStorage.getItem('entrada2'));
    var entrada3 = JSON.parse(localStorage.getItem('entrada3'));
   
   
   
    const opcionales = [];

    opcionales.push({almuerzo1,almuerzo2, almuerzo3, vianda1, vianda2, vianda3, navegacion1, navegacion2, navegacion3, entrada1, entrada2, entrada3});

    localStorage.setItem('opcionales', JSON.stringify(opcionales))

    // var tOpcional = JSON.parse(localStorage.getItem('opcionales'));
    var enviarOpcion = localStorage.getItem('opcionales');

    $('#verificarT').val(enviarOpcion);
   
});


function transferencia(){

    var nombre = $('#nombreT').val();
    var email = $('#emailT').val();
    var tel = $('#telT').val();
    var dni = $('#dniT').val();
    var nac = $('#nacT').val();
    var fecha = $('#datepickerModal').val();
    var turnos = $('#turnosT').val();
    var adultos = $('#adultosT').val();
    var comprobante = $('#comprobanteT').val();

    if(!nombre || !email || !tel || !dni || !nac || !comprobante || !fecha || !turnos || !adultos ){
        Swal.fire(
            'Complete todos los campos requeridos!',
            'You clicked the button!',
            'warning'
        )
    }else{
        console.log('Se ha enviado el comprobante');
        localStorage.removeItem('opcionales');
    }
}

$('body').hover(function(){
    var guardado = localStorage.getItem("reserva");
        
    var ver = JSON.parse(guardado);

            var q = ver.excursion;
            var p = ver.total;
            var t = ver.turno;
            var f = ver.fecha;
            var a = ver.adultos;
            var n = ver.ninos;
            var b = ver.bebes;
            var op = ver.opcionales;

            opcionales = []

            op.forEach(item => {

                var opcional = item;

                opcionales.push(opcional+', <br>')
                
            })

            $('#excursionPed').html(q);
            $('#totalPed').html(p);
            $('#turnoPed').html(t);
            $('#fechaPed').html(f);
            $('#adultoPed').html(a);
            $('#ninosPed').html(n);
            $('#beb').html(b);
            $('#opcionalesPed').html(opcionales);

})


$('#botonPasajero').click(function(){


        $('#anadirPasajero').before(//html
            `
            <p>Pasajero 2 <button type="button" class="btn btn-info btn-sm pull-right" id="botonPasajero2" onclick="btnPasajero2()">Añadir pasajero</button></p>
            <div class="col-md-6">
                <div class="form-group">
                    <input type="text" class="form-control" placeholder="Nombre" id="">
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <input type="text" class="form-control" placeholder="Apellidos">
                </div>
            </div>
            
            <div class="col-md-4">
                <div class="form-group">
                    <input type="text" class="form-control" placeholder="Dni o Pasaporte">
                </div>
            </div>
            <div class="col-md-4">
                <div class="form-group">
                    <input type="date" class="form-control" placeholder="Fecha nacimiento">
                </div>
            </div>
            <div class="col-md-4">
                <div class="form-group">
                    <input type="text" class="form-control" placeholder="Nacionalidad">
                </div>
            </div>
            <div class="col-md-12" style="border-top: 2px solid gray; margin-bottom: 5px;"></div>
            `);
        
            
       $('#botonPasajero').remove();
    
 
});


function btnPasajero2(){


    $('#anadirPasajero').before(//html
        `
        <p>Pasajero 3 <button type="button" class="btn btn-info btn-sm pull-right" id="botonPasajero3" onclick="btnPasajero3()">Añadir pasajero</button></p>
        <div class="col-md-6">
            <div class="form-group">
                <input type="text" class="form-control" placeholder="Nombre">
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group">
                <input type="text" class="form-control" placeholder="Apellidos">
            </div>
        </div>
        <div class="col-md-4">
            <div class="form-group">
                <input type="text" class="form-control" placeholder="Dni o Pasaporte">
            </div>
        </div>
        <div class="col-md-4">
            <div class="form-group">
                <input type="number" class="form-control" placeholder="Edad">
            </div>
        </div>
        <div class="col-md-4">
            <div class="form-group">
                <input type="text" class="form-control" placeholder="Nacionalidad">
            </div>
        </div>
        <div class="col-md-12" style="border-top: 2px solid gray; margin-bottom: 5px;"></div>
        `);

        $('#botonPasajero2').remove();


}



function btnPasajero3(){


    $('#anadirPasajero').before(//html
        `
        <p>Pasajero 4 <button type="button" class="btn btn-info btn-sm pull-right" id="botonPasajero4" onclick="btnPasajero4()">Añadir pasajero</button></p>
        <div class="col-md-6">
            <div class="form-group">
                <input type="text" class="form-control" placeholder="Nombre">
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group">
                <input type="text" class="form-control" placeholder="Apellidos">
            </div>
        </div>

        <div class="col-md-4">
            <div class="form-group">
                <input type="text" class="form-control" placeholder="Dni o Pasaporte">
            </div>
        </div>
        <div class="col-md-4">
            <div class="form-group">
                <input type="number" class="form-control" placeholder="Edad">
            </div>
        </div>
        <div class="col-md-4">
            <div class="form-group">
                <input type="text" class="form-control" placeholder="Nacionalidad">
            </div>
        </div>
        <div class="col-md-12" style="border-top: 2px solid gray; margin-bottom: 5px;"></div>
        `)


        $('#botonPasajero3').remove();
}


function btnPasajero4(){


    $('#anadirPasajero').before(//html
        `
        <p>Pasajero 5 <button type="button" class="btn btn-info btn-sm pull-right" id="botonPasajero5" onclick="btnPasajero5()">Añadir pasajero</button></p>
        <div class="col-md-6">
            <div class="form-group">
                <input type="text" class="form-control" placeholder="Nombre">
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group">
                <input type="text" class="form-control" placeholder="Apellidos">
            </div>
        </div>

        <div class="col-md-4">
            <div class="form-group">
                <input type="text" class="form-control" placeholder="Dni o Pasaporte">
            </div>
        </div>
        <div class="col-md-4">
            <div class="form-group">
                <input type="number" class="form-control" placeholder="Edad">
            </div>
        </div>
        <div class="col-md-4">
            <div class="form-group">
                <input type="text" class="form-control" placeholder="Nacionalidad">
            </div>
        </div>
        <div class="col-md-12" style="border-top: 2px solid gray; margin-bottom: 5px;"></div>
        `)


        $('#botonPasajero4').remove();
}

function btnPasajero5(){


    $('#anadirPasajero').before(//html
        `
        <p>Pasajero 6</p>
        <div class="col-md-6">
            <div class="form-group">
                <input type="text" class="form-control" placeholder="Nombre">
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group">
                <input type="text" class="form-control" placeholder="Apellidos">
            </div>
        </div>

        <div class="col-md-4">
            <div class="form-group">
                <input type="text" class="form-control" placeholder="Dni o Pasaporte">
            </div>
        </div>
        <div class="col-md-4">
            <div class="form-group">
                <input type="number" class="form-control" placeholder="Edad">
            </div>
        </div>
        <div class="col-md-4">
            <div class="form-group">
                <input type="text" class="form-control" placeholder="Nacionalidad">
            </div>
        </div>
        <div class="col-md-12" style="border-top: 2px solid gray; margin-bottom: 5px;"></div>
        `)


        $('#botonPasajero5').remove();
}



$('#selectPago').click(function(){
    var seleccionar = $('#selectPago').val();
    var nombre = $('#nombre-reserva').val();
    var apellido = $('#apellido-reserva').val();
    var email = $('#email-reserva').val();
    var tel = $('#tel-reserva').val();
    var dni = $('#dni-reserva').val();
    var edad = $('#edad-reserva').val();
    var nacionalidad = $('#nacionalidad-reserva').val();


    if(seleccionar == 'mercado'){

        if(!nombre || !apellido || !email || !tel || !dni || !edad || !nacionalidad){
            
            Swal.fire(
                'Complete todos los campos requeridos!',
                'Haga click en "OK" para continuar *!',
                'warning'
            )
        }else{

            $('#btnMercado').css('display', 'block');
            $('#btnPaypal').css('display', 'none');
        }
   

     }else if(seleccionar == 'paypal'){

        if(!nombre || !apellido || !email || !tel || !dni || !edad || !nacionalidad){
            
            Swal.fire(
                'Complete todos los campos requeridos!',
                'Haga click en "OK" para continuar *!',
                'warning'
            )
            
        }else{
            
        $('#btnMercado').css('display', 'none');
        $('#btnPaypal').css('display', 'block');

            }

     }else{

        
      $('#btnMercado').css('display', 'none');
      $('#btnPaypal').css('display', 'none');
     }

    
});

// function guardarDatos(){

//     var datos = $('#guardar-form').serialize();

//     console.log(datos);
// }




