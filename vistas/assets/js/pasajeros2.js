function ver() {
  $("#ocultar-precios").remove();

  $("#precios").append(
    //html
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
  if (!cantidadN) {
    cantidadN = 0;
  }
  var precioA = $("#precio_bajo").html().replace(/[$.]/g, "");
  var precioAdultos = parseInt(precioA) * cantidadA;
  var precioN = $("#precio_ninos").html().replace(/[$.]/g, "");
  var precioNinos = parseInt(precioN) * cantidadN;
  console.log(precioNinos);

  // Opcionales
  var opcionales = JSON.parse(localStorage.getItem("opcionales"));

  var almuerzo1 = opcionales[0].almuerzo1;
  if (almuerzo1 == null) {
    var precio1 = 0;
  } else {
    var precio1 = almuerzo1.precio;
  }
  var almuerzo2 = opcionales[0].almuerzo2;
  if (almuerzo2 == null) {
    var precio2 = 0;
  } else {
    var precio2 = almuerzo2.precio;
  }
  var almuerzo3 = opcionales[0].almuerzo3;
  if (almuerzo3 == null) {
    var precio3 = 0;
  } else {
    var precio3 = almuerzo3.precio;
  }

  var vianda1 = opcionales[0].vianda1;
  if (vianda1 == null) {
    var precio4 = 0;
  } else {
    var precio4 = vianda1.precio;
  }
  var vianda2 = opcionales[0].vianda2;
  if (vianda2 == null) {
    var precio5 = 0;
  } else {
    var precio5 = vianda2.precio;
  }
  var vianda3 = opcionales[0].vianda3;
  if (vianda3 == null) {
    var precio6 = 0;
  } else {
    var precio6 = vianda3.precio;
  }

  var navegacion1 = opcionales[0].navegacion1;
  if (navegacion1 == null) {
    var precio7 = 0;
  } else {
    var precio7 = navegacion1.precio;
  }
  var navegacion2 = opcionales[0].navegacion2;
  if (navegacion2 == null) {
    var precio8 = 0;
  } else {
    var precio8 = navegacion2.precio;
  }
  var navegacion3 = opcionales[0].navegacion3;
  if (navegacion3 == null) {
    var precio9 = 0;
  } else {
    var precio9 = navegacion3.precio;
  }

  let sumaOpcionales =
    (precio1 +
      precio2 +
      precio3 +
      precio4 +
      precio5 +
      precio6 +
      precio7 +
      precio8 +
      precio9) *
    (parseInt(cantidadA) + parseInt(cantidadN));
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
      "La cantidad de adultos deben ser mayor a 0!",
      "You clicked the button!",
      "warning"
    );

    $("#ver-precios").remove();

    $("#precios").append(
      //html
      `<div id="ocultar-precios" class="col-md-12">
                    <div class="form-group col-sm-3 col-xs-12 col-md-3 cel3 formContacto" style="padding:0;">
                                <a style="cursor:pointer;" class="btn btn-primary btn-sm" onclick="ver()">Calcular precios <i class="fa fa-arrow-right"></i></a>
                    </div>
            </div>`
    );

    $("#precio-final").html("0");
  }

  if (cantidadN < 0) {
    Swal.fire(
      "La cantidad de niños deben ser igual o mayor a 0!",
      "You clicked the button!",
      "warning"
    );

    $("#ver-precios").remove();

    $("#precios").append(
      //html
      `<div id="ocultar-precios" class="col-md-12">
                    <div class="form-group col-sm-3 col-xs-12 col-md-3 cel3 formContacto" style="padding:0;">
                        <a style="cursor:pointer;" class="btn btn-primary btn-sm" onclick="ver()">Calcular precios <i class="fa fa-arrow-right"></i></a>
                    </div>
            </div>`
    );

    $("#precio-final").html("0");
  }
}

function ocultar() {
  $("#ver-precios").remove();

  $("#precios").append(
    //html
    `<div id="ocultar-precios" class="col-md-12">
                <div class="form-group col-sm-3 col-xs-12 col-md-3 cel3 formContacto" style="padding:0;">
                        <a style="cursor:pointer;" class="btn btn-primary btn-sm" onclick="ver()">Calcular precios <i class="fa fa-arrow-right"></i></a>
                </div>
        </div>`
  );
}

function modal() {
  $("#prueba").modal("toggle");
}

$("#boton-guardar").click(function () {
  /*Captura de datos escrito en los inputs*/
  var nom = document.getElementById("nameP").value;
  var edad = document.getElementById("edadP").value;
  var dni = document.getElementById("dniP").value;
  var nac = document.getElementById("nacP").value;

  let pasajeros = {
    nombre: nom,
    edad: edad,
    dni: dni,
    nac: nac,
  };

  var datos = [];

  datos.push(pasajeros);

  /*Guardando los datos en el LocalStorage*/

  localStorage.setItem("datosPasajero", JSON.stringify(datos));

  $("#infoPasajeros").before(
    //HTML
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
  );

  // Object.keys(localStorage).forEach(function(key){
  var xxx = localStorage.getItem("datosPasajero");

  $("#xxx").val(xxx);
  //  });

  $("#prueba").modal("hide");
});

$(".formContacto").hover(function () {
  var guardado = JSON.parse(localStorage.getItem("datosPasajero"));

  if (guardado) {
    $("#verNo").html(guardado[0].nombre);
    $("#verEd").html(guardado[0].edad);
    $("#verDNI").html(guardado[0].dni);
    $("#verNa").html(guardado[0].nac);
  }
});

$("#talmuerzoRsm1").click(function () {
  var precio = $("#tprecioAlmuerzo1").val();
  var replace = precio.replace(/[$.]/g, "");
  var num = parseInt(replace);
  var titulo = $("#tAlmuerzo1").html();

  var almuerzo = {
    titulo: titulo,
    precio: num,
  };
  if ($("#talmuerzoRsm1").prop("checked")) {
    localStorage.setItem("almuerzo1", JSON.stringify(almuerzo));
  } else {
    localStorage.removeItem("almuerzo1");
  }
});

$("#talmuerzoRsm2").click(function () {
  var precio = $("#tprecioAlmuerzo2").val();
  var replace = precio.replace(/[$.]/g, "");
  var num = parseInt(replace);
  var titulo = $("#tAlmuerzo2").html();

  var almuerzo = {
    titulo: titulo,
    precio: num,
  };
  if ($("#talmuerzoRsm2").prop("checked")) {
    localStorage.setItem("almuerzo2", JSON.stringify(almuerzo));
  } else {
    localStorage.removeItem("almuerzo2");
  }
});

$("#talmuerzoRsm3").click(function () {
  var precio = $("#tprecioAlmuerzo3").val();
  var replace = precio.replace(/[$.]/g, "");
  var num = parseInt(replace);
  var titulo = $("#tAlmuerzo3").html();

  var almuerzo = {
    titulo: titulo,
    precio: num,
  };
  if ($("#talmuerzoRsm3").prop("checked")) {
    localStorage.setItem("almuerzo3", JSON.stringify(almuerzo));
  } else {
    localStorage.removeItem("almuerzo3");
  }
});

$("#tviandaRsm1").click(function () {
  var precio = $("#tprecioVianda1").val();
  var replace = precio.replace(/[$.]/g, "");
  var num = parseInt(replace);
  var titulo = $("#tVianda1").html();

  var vianda = {
    titulo: titulo,
    precio: num,
  };
  if ($("#tviandaRsm1").prop("checked")) {
    localStorage.setItem("vianda1", JSON.stringify(vianda));
  } else {
    localStorage.removeItem("vianda1");
  }
});

$("#tviandaRsm2").click(function () {
  var precio = $("#tprecioVianda2").val();
  var replace = precio.replace(/[$.]/g, "");
  var num = parseInt(replace);
  var titulo = $("#tVianda2").html();

  var vianda = {
    titulo: titulo,
    precio: num,
  };
  if ($("#tviandaRsm2").prop("checked")) {
    localStorage.setItem("vianda2", JSON.stringify(vianda));
  } else {
    localStorage.removeItem("vianda2");
  }
});

$("#tviandaRsm3").click(function () {
  var precio = $("#tprecioVianda3").val();
  var replace = precio.replace(/[$.]/g, "");
  var num = parseInt(replace);
  var titulo = $("#tVianda3").html();

  var vianda = {
    titulo: titulo,
    precio: num,
  };
  if ($("#tviandaRsm3").prop("checked")) {
    localStorage.setItem("vianda3", JSON.stringify(vianda));
  } else {
    localStorage.removeItem("vianda3");
  }
});

$("#tnavegacionRsm1").click(function () {
  var precio = $("#tprecioNavegacion1").val();
  var replace = precio.replace(/[$.]/g, "");
  var num = parseInt(replace);
  var titulo = $("#tnavegacion1").html();

  var navegacion = {
    titulo: titulo,
    precio: num,
  };
  if ($("#tnavegacionRsm1").prop("checked")) {
    localStorage.setItem("navegacion1", JSON.stringify(navegacion));
  } else {
    localStorage.removeItem("navegacion1");
  }
});

$("#tnavegacionRsm2").click(function () {
  var precio = $("#tprecioNavegacion2").val();
  var replace = precio.replace(/[$.]/g, "");
  var num = parseInt(replace);
  var titulo = $("#tnavegacion2").html();

  var navegacion = {
    titulo: titulo,
    precio: num,
  };
  if ($("#tnavegacionRsm2").prop("checked")) {
    localStorage.setItem("navegacion2", JSON.stringify(navegacion));
  } else {
    localStorage.removeItem("navegacion2");
  }
});

$("#tnavegacionRsm3").click(function () {
  var precio = $("#tprecioNavegacion3").val();
  var replace = precio.replace(/[$.]/g, "");
  var num = parseInt(replace);
  var titulo = $("#tnavegacion3").html();

  var navegacion = {
    titulo: titulo,
    precio: num,
  };
  if ($("#tnavegacionRsm3").prop("checked")) {
    localStorage.setItem("navegacion3", JSON.stringify(navegacion));
  } else {
    localStorage.removeItem("navegacion3");
  }
});

$("#tentradaRsm1").click(function () {
  var precio = $("#tprecioEntrada1").val();
  var replace = precio.replace(/[$.]/g, "");
  var num = parseInt(replace);
  var titulo = $("#tentrada1").html();

  var entrada = {
    titulo: titulo,
    precio: num,
  };
  if ($("#tentradaRsm1").prop("checked")) {
    localStorage.setItem("entrada1", JSON.stringify(entrada));
  } else {
    localStorage.removeItem("entrada1");
  }
});

$("#tentradaRsm2").click(function () {
  var precio = $("#tprecioEntrada2").val();
  var replace = precio.replace(/[$.]/g, "");
  var num = parseInt(replace);
  var titulo = $("#tentrada2").html();

  var entrada = {
    titulo: titulo,
    precio: num,
  };
  if ($("#tentradaRsm2").prop("checked")) {
    localStorage.setItem("entrada2", JSON.stringify(entrada));
  } else {
    localStorage.removeItem("entrada2");
  }
});

$("#tentradaRsm3").click(function () {
  var precio = $("#tprecioEntrada3").val();
  var replace = precio.replace(/[$.]/g, "");
  var num = parseInt(replace);
  var titulo = $("#tentrada3").html();

  var entrada = {
    titulo: titulo,
    precio: num,
  };
  if ($("#tentradaRsm3").prop("checked")) {
    localStorage.setItem("entrada3", JSON.stringify(entrada));
  } else {
    localStorage.removeItem("entrada3");
  }
});

$("#containerTransferencia").change(function () {
  var almuerzo1 = JSON.parse(localStorage.getItem("almuerzo1"));
  var almuerzo2 = JSON.parse(localStorage.getItem("almuerzo2"));
  var almuerzo3 = JSON.parse(localStorage.getItem("almuerzo3"));
  var vianda1 = JSON.parse(localStorage.getItem("vianda1"));
  var vianda2 = JSON.parse(localStorage.getItem("vianda2"));
  var vianda3 = JSON.parse(localStorage.getItem("vianda3"));
  var navegacion1 = JSON.parse(localStorage.getItem("navegacion1"));
  var navegacion2 = JSON.parse(localStorage.getItem("navegacion2"));
  var navegacion3 = JSON.parse(localStorage.getItem("navegacion3"));
  var entrada1 = JSON.parse(localStorage.getItem("entrada1"));
  var entrada2 = JSON.parse(localStorage.getItem("entrada2"));
  var entrada3 = JSON.parse(localStorage.getItem("entrada3"));

  const opcionales = [];

  opcionales.push({
    almuerzo1,
    almuerzo2,
    almuerzo3,
    vianda1,
    vianda2,
    vianda3,
    navegacion1,
    navegacion2,
    navegacion3,
    entrada1,
    entrada2,
    entrada3,
  });

  localStorage.setItem("opcionales", JSON.stringify(opcionales));

  // var tOpcional = JSON.parse(localStorage.getItem('opcionales'));
  var enviarOpcion = localStorage.getItem("opcionales");

  $("#verificarT").val(enviarOpcion);
});

function transferencia() {
  var nombre = $("#nombreT").val();
  var email = $("#emailT").val();
  var tel = $("#telT").val();
  var dni = $("#dniT").val();
  var nac = $("#nacT").val();
  var fecha = $("#datepickerModal").val();
  var turnos = $("#turnosT").val();
  var adultos = $("#adultosT").val();
  var comprobante = $("#comprobanteT").val();

  if (
    !nombre ||
    !email ||
    !tel ||
    !dni ||
    !nac ||
    !comprobante ||
    !fecha ||
    !turnos ||
    !adultos
  ) {
    Swal.fire(
      "Complete todos los campos requeridos!",
      "You clicked the button!",
      "warning"
    );
  } else {
    console.log("Se ha enviado el comprobante");
    localStorage.removeItem("opcionales");
  }
}

//Compra Reserva
$("#containerReserva").hover(function () {
  var guardado = localStorage.getItem("reserva");

  if (guardado) {
    var ver = JSON.parse(guardado);

    var q = ver.excursion;
    var p = ver.total;
    var t = ver.turno;
    var f = ver.fecha;
    var a = ver.adultos;
    var n = ver.ninos;
    var b = ver.bebes;
    var op = ver.opcionales;

    opcionales = [];

    op.forEach((item) => {
      var opcional = item;

      opcionales.push(opcional + ", <br>");
    });

    $("#excursionPed").html(q);
    $("#totalPed").html(p);
    $("#turnoPed").html(t);
    $("#fechaPed").html(f);
    $("#adultoPed").html(a);
    $("#ninosPed").html(n);
    $("#beb").html(b);
    $("#opcionalesPed").html(opcionales);
  }

  // PPAL
  var ppal = JSON.parse(localStorage.getItem("pasajeroPpal"));

  var nombre = $("#nombre-reserva").val(ppal.nombre);
  var apellido = $("#apellido-reserva").val(ppal.apellido);
  var email = $("#email-reserva").val(ppal.email);
  var tel = $("#tel-reserva").val(ppal.tel);
  var dni = $("#dni-reserva").val(ppal.dni);
  var edad = $("#edad-reserva").val(ppal.edad);
  var nacionalidad = $("#nacionalidad-reserva").val(ppal.nacionalidad);
});

$("#containerReservaR").hover(function () {
  var guardado = localStorage.getItem("ReservaR");

  if (guardado) {
    var ver = JSON.parse(guardado);

    var r = ver.renta;
    var e = ver.entrada;
    var s = ver.salida;
    var d = ver.dias;
    var t = ver.total;
    var op = ver.opcionales;

    opcionales = [];

    op.forEach((item) => {
      var opcional = item;

      opcionales.push(opcional + ", <br>");
    });

    $("#vehicPed").html(r);
    $("#fechaEPed").html(e);
    $("#fechaSPed").html(s);
    $("#diasPed").html(d);
    $("#totalPed").html(t);
    $("#opcionalesPed").html(opcionales);
  }

  // if (guardado) {
  //   var ver = JSON.parse(guardado);

  //   var q = ver.renta;
  //   var p = ver.total;
  //   var t = ver.turno;
  //   var f = ver.fecha;
  //   var a = ver.adultos;
  //   var n = ver.ninos;
  //   var b = ver.bebes;
  //   var op = ver.opcionales;

  //   opcionales = [];

  //   op.forEach((item) => {
  //     var opcional = item;

  //     opcionales.push(opcional + ", <br>");
  //   });

  //   $("#excursionPed").html(q);
  //   $("#totalPed").html(p);
  //   $("#turnoPed").html(t);
  //   $("#fechaPed").html(f);
  //   $("#adultoPed").html(a);
  //   $("#ninosPed").html(n);
  //   $("#beb").html(b);
  //   $("#opcionalesPed").html(opcionales);
  // }
});

$("#botonPasajero").click(function () {
  var nombre = $("#nombre-reserva").val();
  var apellido = $("#apellido-reserva").val();
  var email = $("#email-reserva").val();
  var tel = $("#tel-reserva").val();
  var dni = $("#dni-reserva").val();
  var edad = $("#edad-reserva").val();
  var nacionalidad = $("#nacionalidad-reserva").val();

  var pasajeroPpal = {
    nombre: nombre,
    apellido: apellido,
    email: email,
    tel: tel,
    dni: dni,
    edad: edad,
    nacionalidad: nacionalidad,
  };

  localStorage.setItem("pasajeroPpal", JSON.stringify(pasajeroPpal));
});

$("#selectPago").click(function () {
  var seleccionar = $("#selectPago").val();
  var nombre = $("#nombre-reserva").val();
  var apellido = $("#apellido-reserva").val();
  var email = $("#email-reserva").val();
  var tel = $("#tel-reserva").val();
  var dni = $("#dni-reserva").val();
  var edad = $("#edad-reserva").val();
  var nacionalidad = $("#nacionalidad-reserva").val();

  var datos = {};
  //   var datos = [];
  $("#containerReserva input").each(function () {
    datos[this.name] = this.value;
  });

  localStorage.setItem("info", JSON.stringify(datos));

  var items = JSON.parse(localStorage.getItem("info"));

  var pasajeros = [];

  var pasajero1 = {
    nombre: items.nombre,
    apellidos: items.apellidos,
    tel: items.tel,
    email: items.email,
    dni: items.dni,
    edad: items.edad,
    nacionalidad: items.nacionalidad,
  };

  var pasajero2 = {
    nombre: items.nombre2,
    apellidos: items.apellidos2,
    dni: items.dni2,
    edad: items.edad2,
    nacionalidad: items.nacionalidad2,
  };
  var pasajero3 = {
    nombre: items.nombre3,
    apellidos: items.apellidos3,
    dni: items.dni3,
    edad: items.edad3,
    nacionalidad: items.nacionalidad3,
  };

  var pasajero4 = {
    nombre: items.nombre4,
    apellidos: items.apellidos4,
    dni: items.dni4,
    edad: items.edad4,
    nacionalidad: items.nacionalidad4,
  };

  var pasajero5 = {
    nombre: items.nombre5,
    apellidos: items.apellidos5,
    dni: items.dni5,
    edad: items.edad5,
    nacionalidad: items.nacionalidad5,
  };

  var pasajero6 = {
    nombre: items.nombre6,
    apellidos: items.apellidos6,
    dni: items.dni6,
    edad: items.edad6,
    nacionalidad: items.nacionalidad6,
  };

  var pasajero7 = {
    nombre: items.nombre7,
    apellidos: items.apellidos7,
    dni: items.dni7,
    edad: items.edad7,
    nacionalidad: items.nacionalidad7,
  };

  var pasajero8 = {
    nombre: items.nombre8,
    apellidos: items.apellidos8,
    dni: items.dni8,
    edad: items.edad8,
    nacionalidad: items.nacionalidad8,
  };

  if (items.nombre8) {
    pasajeros.push(
      pasajero1,
      pasajero2,
      pasajero3,
      pasajero4,
      pasajero5,
      pasajero6,
      pasajero7,
      pasajero8
    );
  } else if (items.nombre7) {
    pasajeros.push(
      pasajero1,
      pasajero2,
      pasajero3,
      pasajero4,
      pasajero5,
      pasajero6,
      pasajero7
    );
  } else if (items.nombre6) {
    pasajeros.push(
      pasajero1,
      pasajero2,
      pasajero3,
      pasajero4,
      pasajero5,
      pasajero6
    );
  } else if (items.nombre5) {
    pasajeros.push(pasajero1, pasajero2, pasajero3, pasajero4, pasajero5);
  } else if (items.nombre4) {
    pasajeros.push(pasajero1, pasajero2, pasajero3, pasajero4);
  } else if (items.nombre3) {
    pasajeros.push(pasajero1, pasajero2, pasajero3);
  } else if (items.nombre2) {
    pasajeros.push(pasajero1, pasajero2);
  } else {
    pasajeros.push(pasajero1);
  }

  $("#verDatos").html(JSON.stringify(pasajeros));
  var datosPasajeros = JSON.stringify(pasajeros);

  if (
    !nombre ||
    !apellido ||
    !email ||
    !tel ||
    !dni ||
    !edad ||
    !nacionalidad
  ) {
    Swal.fire(
      "Complete todos los campos requeridos (*)!",
      'Haga click en "OK" para continuar!',
      "warning"
    );
  } else {
    crearCookie("Pasajeros", datosPasajeros, 1);

    if (seleccionar == "mercado") {
      $("#divMercado").css("display", "block");
      $("#divPaypal").css("display", "none");
      crearCookie("Metodo", "Mercado Pago", 1);
    } else if (seleccionar == "paypal") {
      $("#divMercado").css("display", "none");
      $("#divPaypal").css("display", "block");
      crearCookie("Metodo", "PayPal", 1);
    } else {
      $("#divMercado").css("display", "none");
      $("#divPaypal").css("display", "none");
    }
  }
});

function refrescar() {
  location.reload();
}

function guardarDatos() {
  var config = {};
  //   var datos = [];
  $("#formPasajero input").each(function () {
    config[this.name] = this.value;
  });

  //   datos.push(config);

  var guardado2 = localStorage.getItem("pasajero2");
  var guardado3 = localStorage.getItem("pasajero3");
  var guardado4 = localStorage.getItem("pasajero4");
  var guardado5 = localStorage.getItem("pasajero5");
  var guardado6 = localStorage.getItem("pasajero6");
  var guardado7 = localStorage.getItem("pasajero7");
  var guardado8 = localStorage.getItem("pasajero8");
  var guardado9 = localStorage.getItem("pasajero9");
  var guardado10 = localStorage.getItem("pasajero10");

  if (guardado10) {
    localStorage.setItem("pasajero11", JSON.stringify(config));
  } else if (guardado9) {
    localStorage.setItem("pasajero10", JSON.stringify(config));
  } else if (guardado8) {
    localStorage.setItem("pasajero9", JSON.stringify(config));
  } else if (guardado7) {
    localStorage.setItem("pasajero8", JSON.stringify(config));
  } else if (guardado6) {
    localStorage.setItem("pasajero7", JSON.stringify(config));
  } else if (guardado5) {
    localStorage.setItem("pasajero6", JSON.stringify(config));
  } else if (guardado4) {
    localStorage.setItem("pasajero5", JSON.stringify(config));
  } else if (guardado3) {
    localStorage.setItem("pasajero4", JSON.stringify(config));
  } else if (guardado2) {
    localStorage.setItem("pasajero3", JSON.stringify(config));
  } else {
    localStorage.setItem("pasajero2", JSON.stringify(config));
  }

  $("#modalPasajeros").modal("hide");

  Swal.fire({
    position: "top",
    icon: "success",
    title: "Has agregado un pasajero correctamente",
    showConfirmButton: false,
    timer: 1500,
  });

  setTimeout(refrescar, 1600);
}

for (let i = 2; i < 12; i++) {
  var pasajero = localStorage.getItem(`pasajero${i}`);
  var info = JSON.parse(pasajero);

  $("#anadirPasajero").before(
    //html
    `
    <div class="col-md-12">
      <p>Pasajero${i} <button type="button" class="btn btn-danger btn-sm pull-right" id="btn${i}"><i class="fa fa-times"></i></button></p>
    </div>
    <div class="col-md-6">
        <div class="form-group">
            <span>Nombre:</span>
            <input type="text" class="form-control" name="nombre${i}" value="` +
      info.nombre +
      `" readonly>
        </div>
    </div>
    <div class="col-md-6">
        <div class="form-group">
           <span>Apellidos:</span>
            <input type="text" class="form-control" name="apellidos${i}" value="` +
      info.apellidos +
      `" readonly>
        </div>
    </div>

    <div class="col-md-4">
        <div class="form-group">
           <span>Dni o pasaporte:</span>
            <input type="text" class="form-control"  name="dni${i}"  value="` +
      info.dni +
      `" readonly>
        </div>
    </div>
    <div class="col-md-4">
        <div class="form-group">
           <span>Fecha Nacimiento:</span>
            <input type="date" class="form-control"  name="edad${i}" placeholder="Edad" value="` +
      info.edad +
      `" readonly>
        </div>
    </div>
    <div class="col-md-4">
        <div class="form-group">
        <span>Nacionalidad:</span>
            <input type="text" class="form-control" name="nacionalidad${i}" value="` +
      info.nacionalidad +
      `" readonly>
        </div>
    </div>
    <div class="col-md-12" style="border-top: 2px solid gray; margin-bottom: 5px;"></div>
    
    `
  );

  $(`#btn${i}`).click(function () {
    localStorage.removeItem(`pasajero${i}`);

    Swal.fire({
      position: "top",
      icon: "success",
      title: "Has eliminado un pasajero correctamente",
      showConfirmButton: false,
      timer: 1500,
    });

    setTimeout(refrescar, 1600);
  });
}

function btnLimpiar() {
  var pas = localStorage.getItem("pasajeroPpal");

  if (pas) {
    localStorage.removeItem("pasajeroPpal");

    Swal.fire({
      position: "top",
      icon: "success",
      title: "Has limpiado los datos correctamente",
      showConfirmButton: false,
      timer: 1500,
    });

    setTimeout(refrescar, 1600);
  } else {
    console.log("No existe datos");
  }
}

function pago() {
  var seleccionar = $("#selectPagoR").val();
  var nombre = $("#nombre-reservaR").val();
  var apellido = $("#apellido-reservaR").val();
  var dni = $("#dni-reservaR").val();
  var dol = $("#dol-reservaR").val();
  var registro = $("#registro-reservaR").val();
  var exp = $("#exp-reservaR").val();
  var retiro = $("#retiroR").val();
  var devolucion = $("#devolucionR").val();
  var tel = $("#tel-reservaR").val();
  var totalRenta = JSON.parse(localStorage.getItem("ReservaR"))
  var posTotal = totalRenta.total.replace(/[$.]/g, "");
  var total = parseInt(posTotal);
  crearCookie("TotalRenta", total, 1);
  crearCookie("Renta", JSON.stringify(totalRenta), 1);

  var datosP = {
    nombre,
    apellido,
    dni,
    dol,
    registro,
    exp,
    retiro,
    devolucion,
    tel,
  };

  if (
    !nombre ||
    !apellido ||
    !dni ||
    !dol ||
    !registro ||
    !exp ||
    !retiro ||
    !devolucion ||
    !tel
  ) {
    Swal.fire(
      "Complete todos los campos requeridos (*)!",
      'Haga click en "OK" para continuar!',
      "warning"
    );
  } else if (seleccionar == "mercado") {
    crearCookie("Pasajeros", JSON.stringify(datosP), 1);
    $("#divMercado").css("display", "block");
    $("#divPaypal").css("display", "none");
    crearCookie("Metodo", "Mercado Pago", 1);
  } else if (seleccionar == "paypal") {
    crearCookie("Pasajeros", JSON.stringify(datosP), 1);
    $("#divMercado").css("display", "none");
    $("#divPaypal").css("display", "block");
    crearCookie("Metodo", "PayPal", 1);
  }else{
    $("#divMercado").css("display", "none");
    $("#divPaypal").css("display", "none");
  }
}
