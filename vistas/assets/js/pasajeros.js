// $('#min').click(function() {
//     //Solo si el valor del campo es diferente de 0
//     if ($('#quantity').val() != 0)
//         //Decrementamos su valor
//         $('#quantity').val(parseInt($('#quantity').val()) - 1);
// });

// $('#plus').click(function() {
//     //Aumentamos el valor del campo
//     $('#quantity').val(parseInt($('#quantity').val()) + 1);
// });

$("#enviarCarrito").click(function () {
  var quantity = $("#quantity").val();
  var quantity2 = $("#quantity2").val();
  var dataString = "quantity=" + (parseInt(quantity) + parseInt(quantity2));

  $.ajax({
    type: "POST",
    url: "ajax/quantity.php",
    data: dataString,
    success: function (data) {
      $("#result").fadeIn(1000).html(data);
    },
  });
});

function commaSeparateNumber(val) {
  while (/(\d+)(\d{3})/.test(val.toString())) {
    val = val.toString().replace(/(\d+)(\d{3})/, "$1" + "." + "$2");
  }
  return val;
}

function restar() {
  //Solo si el valor del campo es diferente de 0
  if ($("#quantity").val() != 0)
    //Decrementamos su valor
    $("#quantity").val(parseFloat($("#quantity").val()) - 1);

  var precio_reserva = $("#resultado").attr("data-precio");
  var quitar1 = precio_reserva.replace(/[$.]/g, "");
  var precioA = $("#resultado").attr("data-alto");
  var quitar2 = precioA.replace(/[$.]/g, "");
  var precio = $("#total").html();
  var quitar3 = precio.replace(/[$.]/g, "");
  var precioAlto = $("#precio_alto").html();
  var quitar4 = precioAlto.replace(/[$.]/g, "");
  var ahorro = $("#ahorro").attr("data-ahorro");
  var quitar5 = ahorro.replace(/[$.]/g, "");
  var subahorro = $("#totalAhorro").html();
  var quitar6 = subahorro.replace(/[$.]/g, "");
  var a = parseInt(quitar6) - parseInt(quitar5);

  if (
    $("#trasladoRsm1").prop("checked") ||
    $("#trasladoRsm2").prop("checked") ||
    $("#trasladoRsm3").prop("checked") ||
    $("#almuerzoRsm1").prop("checked") ||
    $("#almuerzoRsm2").prop("checked") ||
    $("#almuerzoRsm3").prop("checked") ||
    $("#viandaRsm1").prop("checked") ||
    $("#viandaRsm2").prop("checked") ||
    $("#viandaRsm3").prop("checked") ||
    $("#navegacionRsm1").prop("checked") ||
    $("#navegacionRsm2").prop("checked") ||
    $("#navegacionRsm3").prop("checked") ||
    $("#entradaRsm1").prop("checked") ||
    $("#entradaRsm2").prop("checked") ||
    $("#entradaRsm3").prop("checked")
  ) {
    Swal.fire({
      title: "¡Desactiva las opcionales para seguir restando pasajeros!",
      icon: "warning",
      confirmButtonColor: "#3085d6",
      cancelButtonColor: "#d33",
      confirmButtonText: "Volver a intentar",
    }).then((result) => {
      if (result.isConfirmed) {
        $("#total").html(precio_reserva);
        $("#quantity").val(1);
        $("#quantity2").val(0);
        $("#precio_bajo").html(precio_reserva);
        $("#precio_alto").html(precioA);
        $("#subTotal").val(precio_reserva);
        $("#trasladoRsm1").prop("checked", false);
        $("#trasladoRsm2").prop("checked", false);
        $("#trasladoRsm3").prop("checked", false);
        $("#almuerzoRsm1").prop("checked", false);
        $("#almuerzoRsm2").prop("checked", false);
        $("#almuerzoRsm3").prop("checked", false);
        $("#viandaRsm1").prop("checked", false);
        $("#viandaRsm2").prop("checked", false);
        $("#viandaRsm3").prop("checked", false);
        $("#navegacionRsm1").prop("checked", false);
        $("#navegacionRsm2").prop("checked", false);
        $("#navegacionRsm3").prop("checked", false);
        $("#entradaRsm1").prop("checked", false);
        $("#entradaRsm2").prop("checked", false);
        $("#entradaRsm3").prop("checked", false);

        $("#totalAhorro").html(commaSeparateNumber(quitar5));
      }
    });
  } else {
    $("#total").html(function () {
      var dividir = parseInt(quitar3) - parseInt(quitar1);

      if ($("#quantity").val() >= 1) {
        return commaSeparateNumber(dividir);
      }
    });

    $("#precio_bajo").html(function () {
      var dividir = parseInt(quitar3) - parseInt(quitar1);

      if ($("#quantity").val() >= 1) {
        return commaSeparateNumber(dividir);
      }
    });

    $("#precio_alto").html(function () {
      var dividir = parseInt(quitar4) - parseInt(quitar2);

      if ($("#quantity").val() >= 1) {
        return commaSeparateNumber(dividir);
      }
    });

    $("#totalAhorro").html(function () {
      if ($("#quantity").val() >= 1) {
        return commaSeparateNumber(a);
      }
    });

    if ($("#quantity").val() <= 1) {
      $("#min").attr("disabled", "disabled");
    }
  }
}

function restar2() {
  //Solo si el valor del campo es diferente de 0
  if ($("#quantity2").val() != 0)
    //Decrementamos su valor
    $("#quantity2").val(parseFloat($("#quantity2").val()) - 1);

  var precio_reserva = $("#resultado").attr("data-ninos");
  var quitar1 = precio_reserva.replace(/[$.]/g, "");
  var precio = $("#total").html();
  var quitar2 = precio.replace(/[$.]/g, "");

  if (
    $("#trasladoRsm1").prop("checked") ||
    $("#trasladoRsm2").prop("checked") ||
    $("#trasladoRsm3").prop("checked") ||
    $("#almuerzoRsm1").prop("checked") ||
    $("#almuerzoRsm2").prop("checked") ||
    $("#almuerzoRsm3").prop("checked") ||
    $("#viandaRsm1").prop("checked") ||
    $("#viandaRsm2").prop("checked") ||
    $("#viandaRsm3").prop("checked") ||
    $("#navegacionRsm1").prop("checked") ||
    $("#navegacionRsm2").prop("checked") ||
    $("#navegacionRsm3").prop("checked") ||
    $("#entradaRsm1").prop("checked") ||
    $("#entradaRsm2").prop("checked") ||
    $("#entradaRsm3").prop("checked")
  ) {
    Swal.fire({
      title: "¡Desactiva las opcionales para seguir restando pasajeros!",
      icon: "warning",
      confirmButtonColor: "#3085d6",
      cancelButtonColor: "#d33",
      confirmButtonText: "Volver a intentar",
    }).then((result) => {
      if (result.isConfirmed) {
        $("#total").html(precio_reserva);
        $("#quantity").val(1);
        $("#quantity2").val(0);
        $("#precio_bajo").html(precio_reserva);
        $("#subTotal").val(precio_reserva);
        $("#trasladoRsm1").prop("checked", false);
        $("#trasladoRsm2").prop("checked", false);
        $("#trasladoRsm3").prop("checked", false);
        $("#almuerzoRsm1").prop("checked", false);
        $("#almuerzoRsm2").prop("checked", false);
        $("#almuerzoRsm3").prop("checked", false);
        $("#viandaRsm1").prop("checked", false);
        $("#viandaRsm2").prop("checked", false);
        $("#viandaRsm3").prop("checked", false);
        $("#navegacionRsm1").prop("checked", false);
        $("#navegacionRsm2").prop("checked", false);
        $("#navegacionRsm3").prop("checked", false);
        $("#entradaRsm1").prop("checked", false);
        $("#entradaRsm2").prop("checked", false);
        $("#entradaRsm3").prop("checked", false);
      }
    });
  } else {
    $("#total").html(function () {
      var dividir = parseInt(quitar2) - parseInt(quitar1);

      if ($("#quantity2").val() >= 0) {
        return commaSeparateNumber(dividir);
      }
    });

    if ($("#quantity2").val() <= 0) {
      $("#min2").attr("disabled", "disabled");
    }
  }
}

function restar3() {
  //Solo si el valor del campo es diferente de 0
  if ($("#quantity3").val() != 0)
    //Decrementamos su valor
    $("#quantity3").val(parseInt($("#quantity3").val()) - 1);

  if ($("#quantity3").val() <= 0) {
    $("#min3").attr("disabled", "disabled");
  }
}

function sumar() {
  //Aumentamos el valor del campo
  $("#quantity").val(parseFloat($("#quantity").val()) + 1);
  $("#min").removeAttr("disabled");

  var cantidad = $("#quantity").val();
  var precio = $("#resultado").attr("data-precio");
  var quitar1 = precio.replace(/[$.]/g, "");
  var cantidad2 = $("#quantity2").val();
  var ninos = $("#resultado").attr("data-ninos");
  var quitar2 = ninos.replace(/[$.]/g, "");
  var precioA = $("#resultado").attr("data-alto");
  var quitar3 = precioA.replace(/[$.]/g, "");
  console.log(quitar3);
  var n = parseInt(quitar2) * parseInt(cantidad2);
  var p = parseInt(quitar1) * parseInt(cantidad);
  var a = parseInt(quitar3) * parseInt(cantidad);
  var s = n + p;
  var suma = commaSeparateNumber(s);
  var s2 = a + n;
  var suma2 = commaSeparateNumber(s2);

  var ah = a - p;
  var ahorro = commaSeparateNumber(ah);

  if (
    $("#trasladoRsm1").prop("checked") ||
    $("#trasladoRsm2").prop("checked") ||
    $("#trasladoRsm3").prop("checked") ||
    $("#almuerzoRsm1").prop("checked") ||
    $("#almuerzoRsm2").prop("checked") ||
    $("#almuerzoRsm3").prop("checked") ||
    $("#viandaRsm1").prop("checked") ||
    $("#viandaRsm2").prop("checked") ||
    $("#viandaRsm3").prop("checked") ||
    $("#navegacionRsm1").prop("checked") ||
    $("#navegacionRsm2").prop("checked") ||
    $("#navegacionRsm3").prop("checked") ||
    $("#entradaRsm1").prop("checked") ||
    $("#entradaRsm2").prop("checked") ||
    $("#entradaRsm3").prop("checked")
  ) {
    Swal.fire({
      title: "¡Desactiva las opcionales para seguir sumando pasajeros!",
      icon: "warning",
      confirmButtonColor: "#3085d6",
      cancelButtonColor: "#d33",
      confirmButtonText: "Volver a intentar",
    }).then((result) => {
      if (result.isConfirmed) {
        // window.location.reload();
        $("#total").html(precio);
        $("#quantity").val(1);
        $("#quantity2").val(0);
        $("#precio_bajo").html(precio);
        $("#precio_alto").html(precioA);
        $("#subTotal").val(precio);
        $("#trasladoRsm1").prop("checked", false);
        $("#trasladoRsm2").prop("checked", false);
        $("#trasladoRsm3").prop("checked", false);
        $("#almuerzoRsm1").prop("checked", false);
        $("#almuerzoRsm2").prop("checked", false);
        $("#almuerzoRsm3").prop("checked", false);
        $("#viandaRsm1").prop("checked", false);
        $("#viandaRsm2").prop("checked", false);
        $("#viandaRsm3").prop("checked", false);
        $("#navegacionRsm1").prop("checked", false);
        $("#navegacionRsm2").prop("checked", false);
        $("#navegacionRsm3").prop("checked", false);
        $("#entradaRsm1").prop("checked", false);
        $("#entradaRsm2").prop("checked", false);
        $("#entradaRsm3").prop("checked", false);
      }
    });
  } else {
    $("#total").html(suma);
    $("#precio_bajo").html(suma);
    $("#precio_alto").html(suma2);
    $("#subTotal").val(suma);
    $("#totalAhorro").html(ahorro);
  }
}

function sumar2() {
  //Aumentamos el valor del campo
  $("#quantity2").val(parseFloat($("#quantity2").val()) + 1);
  $("#min2").removeAttr("disabled");

  var cantidad = $("#quantity").val();
  var precio = $("#resultado").attr("data-precio");
  var quitar1 = precio.replace(/[$.]/g, "");
  var cantidad2 = $("#quantity2").val();
  var ninos = $("#resultado").attr("data-ninos");
  var quitar2 = ninos.replace(/[$.]/g, "");
  var n = parseInt(cantidad2) * parseInt(quitar2);
  var p = parseInt(cantidad) * parseInt(quitar1);
  var s = p + n;
  var suma = commaSeparateNumber(s);

  if (
    $("#trasladoRsm1").prop("checked") ||
    $("#trasladoRsm2").prop("checked") ||
    $("#trasladoRsm3").prop("checked") ||
    $("#almuerzoRsm1").prop("checked") ||
    $("#almuerzoRsm2").prop("checked") ||
    $("#almuerzoRsm3").prop("checked") ||
    $("#viandaRsm1").prop("checked") ||
    $("#viandaRsm2").prop("checked") ||
    $("#viandaRsm3").prop("checked") ||
    $("#navegacionRsm1").prop("checked") ||
    $("#navegacionRsm2").prop("checked") ||
    $("#navegacionRsm3").prop("checked") ||
    $("#entradaRsm1").prop("checked") ||
    $("#entradaRsm2").prop("checked") ||
    $("#entradaRsm3").prop("checked")
  ) {
    Swal.fire({
      title: "¡Desactiva las opcionales para seguir sumando pasajeros!",
      icon: "warning",
      confirmButtonColor: "#3085d6",
      cancelButtonColor: "#d33",
      confirmButtonText: "Volver a intentar",
    }).then((result) => {
      if (result.isConfirmed) {
        $("#total").html(precio);
        $("#quantity").val(1);
        $("#quantity2").val(0);
        $("#precio_bajo").html(precio);
        $("#subTotal").val(precio);
        $("#trasladoRsm1").prop("checked", false);
        $("#trasladoRsm2").prop("checked", false);
        $("#trasladoRsm3").prop("checked", false);
        $("#almuerzoRsm1").prop("checked", false);
        $("#almuerzoRsm2").prop("checked", false);
        $("#almuerzoRsm3").prop("checked", false);
        $("#viandaRsm1").prop("checked", false);
        $("#viandaRsm2").prop("checked", false);
        $("#viandaRsm3").prop("checked", false);
        $("#navegacionRsm1").prop("checked", false);
        $("#navegacionRsm2").prop("checked", false);
        $("#navegacionRsm3").prop("checked", false);
        $("#entradaRsm1").prop("checked", false);
        $("#entradaRsm2").prop("checked", false);
        $("#entradaRsm3").prop("checked", false);
      }
    });
  } else {
    $("#total").html(suma);
  }
}

function sumar3() {
  //Aumentamos el valor del campo
  $("#quantity3").val(parseInt($("#quantity3").val()) + 1);
  $("#min3").removeAttr("disabled");
}

var p = $("#cantidad");

$("#pasajeros").click(function () {
  $("#cantidad").css("display", "block");
  p.fadeIn().append(
    //html
    `<div id="cantidad2">
                <ul>
                    <li><span>Adultos: </span><br><a id="min" class="btn btn-primary btn-sm" onclick="restar()" style="cursor:pointer;"><i class="fa fa-minus"></i></a> <input name="quantity" id="quantity" value="1" size="4" /> <a id="plus" class="btn btn-primary btn-sm" onclick="sumar()" style="cursor:pointer;"><i class="fa fa-plus"></i></a></li>
                    <li><span>Niños: </span><br><a id="min2" class="btn btn-primary btn-sm" onclick="restar2()" style="cursor:pointer;"><i class="fa fa-minus"></i></a> <input name="quantity2" id="quantity2" value="0" size="4" /> <a id="plus" class="btn btn-primary btn-sm" onclick="sumar2()" style="cursor:pointer;"><i class="fa fa-plus"></i></a></li>
                    <li><span>Bebés: </span><br><a id="min3" class="btn btn-primary btn-sm" onclick="restar3()" style="cursor:pointer;"><i class="fa fa-minus"></i></a> <input name="quantity3" id="quantity3"  value="0" size="4" /> <a id="plus" class="btn btn-primary btn-sm" onclick="sumar3()" style="cursor:pointer;"><i class="fa fa-plus"></i></a></li>
                </ul>
            </div>`
  );
  p = null;
  if ($("#quantity").val() <= 1) {
    $("#min").attr("disabled", "disabled");
    $("#min2").attr("disabled", "disabled");
  } else {
    $("#min").removeAttr("disabled");
    $("#min2").removeAttr("disabled");
  }

  if ($("#quantity2").val() <= 0) {
    $("#min2").attr("disabled", "disabled");
  } else {
    $("#min2").removeAttr("disabled");
  }

  if ($("#quantity3").val() <= 0) {
    $("#min3").attr("disabled", "disabled");
  } else {
    $("#min3").removeAttr("disabled");
  }
});

$("input").click(function () {
  $("#cantidad").fadeOut().css("display", "none");
});

$("a").click(function () {
  $("#cantidad").fadeOut().css("display", "none");
});

$("#trasladoRsm1").click(function () {
  var capPrecio = $("#precioTraslado1").val();
  var quitar = capPrecio.replace(/[$.]/g, "");
  var cantidad = $("#quantity").val();
  var cantidad2 = $("#quantity2").val();

  var trasA = parseInt(quitar) * cantidad;
  var trasN = parseInt(quitar) * cantidad2;
  var precio = $("#total").html();
  var quitar2 = precio.replace(/[$.]/g, "");

  if (cantidad >= 1) {
    if ($("#trasladoRsm1").prop("checked")) {
      var total = parseInt(quitar2) + trasA + trasN;

      $("#total").html(commaSeparateNumber(total));
    } else {
      var total = parseInt(quitar2) - trasA - trasN;

      $("#total").html(commaSeparateNumber(total));
    }
  } else {
    Swal.fire(
      "La cantidad de pasajeros deben ser igual o mayor a 1!",
      "You clicked the button!",
      "warning"
    );

    $("#trasladoRsm1").prop("checked", false);
  }
});

$("#trasladoRsm2").click(function () {
  var capPrecio = $("#precioTraslado2").val();
  var quitar = capPrecio.replace(/[$.]/g, "");
  var cantidad = $("#quantity").val();
  var cantidad2 = $("#quantity2").val();

  var trasA = parseInt(quitar) * cantidad;
  var trasN = parseInt(quitar) * cantidad2;
  var precio = $("#total").html();
  var quitar2 = precio.replace(/[$.]/g, "");

  if (cantidad >= 1) {
    if ($("#trasladoRsm2").prop("checked")) {
      var total = parseInt(quitar2) + trasA + trasN;

      $("#total").html(commaSeparateNumber(total));
    } else {
      var total = parseInt(quitar2) - trasA - trasN;

      $("#total").html(commaSeparateNumber(total));
    }
  } else {
    Swal.fire(
      "La cantidad de pasajeros deben ser igual o mayor a 1!",
      "You clicked the button!",
      "warning"
    );
    $("#trasladoRsm2").prop("checked", false);
  }
});

$("#trasladoRsm3").click(function () {
  var capPrecio = $("#precioTraslado3").val();
  var quitar = capPrecio.replace(/[$.]/g, "");
  var cantidad = $("#quantity").val();
  var cantidad2 = $("#quantity2").val();

  var trasA = parseInt(quitar) * cantidad;
  var trasN = parseInt(quitar) * cantidad2;
  var precio = $("#total").html();
  var quitar2 = precio.replace(/[$.]/g, "");

  if (cantidad >= 1) {
    if ($("#trasladoRsm3").prop("checked")) {
      var total = parseInt(quitar2) + trasA + trasN;

      $("#total").html(commaSeparateNumber(total));
    } else {
      var total = parseInt(quitar2) - trasA - trasN;

      $("#total").html(commaSeparateNumber(total));
    }
  } else {
    Swal.fire(
      "La cantidad de pasajeros deben ser igual o mayor a 1!",
      "You clicked the button!",
      "warning"
    );
    $("#trasladoRsm3").prop("checked", false);
  }
});

$("#almuerzoRsm1").click(function () {
  var capPrecio = $("#precioAlmuerzo1").val();
  var quitar = capPrecio.replace(/[$.]/g, "");
  var cantidad = $("#quantity").val();
  var cantidad2 = $("#quantity2").val();

  var trasA = parseInt(quitar) * cantidad;
  var trasN = parseInt(quitar) * cantidad2;
  var precio = $("#total").html();
  var quitar2 = precio.replace(/[$.]/g, "");

  if (cantidad >= 1) {
    if ($("#almuerzoRsm1").prop("checked")) {
      var total = parseInt(quitar2) + trasA + trasN;

      $("#total").html(commaSeparateNumber(total));

      // console.log(total.toFixed(3));
    } else {
      var total = parseInt(quitar2) - trasA - trasN;

      $("#total").html(commaSeparateNumber(total));
    }
  } else {
    Swal.fire(
      "La cantidad de pasajeros deben ser igual o mayor a 1!",
      "You clicked the button!",
      "warning"
    );
    $("#almuerzoRsm1").prop("checked", false);
  }
});

$("#almuerzoRsm2").click(function () {
  var capPrecio = $("#precioAlmuerzo2").val();
  var quitar = capPrecio.replace(/[$.]/g, "");
  var cantidad = $("#quantity").val();
  var cantidad2 = $("#quantity2").val();

  var trasA = parseInt(quitar) * cantidad;
  var trasN = parseInt(quitar) * cantidad2;
  var precio = $("#total").html();
  var quitar2 = precio.replace(/[$.]/g, "");

  if (cantidad >= 1) {
    if ($("#almuerzoRsm2").prop("checked")) {
      var total = parseInt(quitar2) + trasA + trasN;

      $("#total").html(commaSeparateNumber(total));
    } else {
      var total = parseInt(quitar2) - trasA - trasN;

      $("#total").html(commaSeparateNumber(total));
    }
  } else {
    Swal.fire(
      "La cantidad de pasajeros deben ser igual o mayor a 1!",
      "You clicked the button!",
      "warning"
    );
    $("#almuerzoRsm2").prop("checked", false);
  }
});

$("#almuerzoRsm3").click(function () {
  var capPrecio = $("#precioAlmuerzo3").val();
  var quitar = capPrecio.replace(/[$.]/g, "");
  var cantidad = $("#quantity").val();
  var cantidad2 = $("#quantity2").val();

  var trasA = parseInt(quitar) * cantidad;
  var trasN = parseInt(quitar) * cantidad2;
  var precio = $("#total").html();
  var quitar2 = precio.replace(/[$.]/g, "");

  if (cantidad >= 1) {
    if ($("#almuerzoRsm3").prop("checked")) {
      var total = parseInt(quitar2) + trasA + trasN;

      $("#total").html(commaSeparateNumber(total));
    } else {
      var total = parseInt(quitar2) - trasA - trasN;

      $("#total").html(commaSeparateNumber(total));
    }
  } else {
    Swal.fire(
      "La cantidad de pasajeros deben ser igual o mayor a 1!",
      "You clicked the button!",
      "warning"
    );
    $("#almuerzoRsm3").prop("checked", false);
  }
});

$("#viandaRsm1").click(function () {
  var capPrecio = $("#precioVianda1").val();
  var quitar = capPrecio.replace(/[$.]/g, "");
  var cantidad = $("#quantity").val();
  var cantidad2 = $("#quantity2").val();

  var trasA = parseInt(quitar) * cantidad;
  var trasN = parseInt(quitar) * cantidad2;
  var precio = $("#total").html();
  var quitar2 = precio.replace(/[$.]/g, "");

  if (cantidad >= 1) {
    if ($("#viandaRsm1").prop("checked")) {
      var total = parseInt(quitar2) + trasA + trasN;

      $("#total").html(commaSeparateNumber(total));
    } else {
      var total = parseInt(quitar2) - trasA - trasN;

      $("#total").html(commaSeparateNumber(total));
    }
  } else {
    Swal.fire(
      "La cantidad de pasajeros deben ser igual o mayor a 1!",
      "You clicked the button!",
      "warning"
    );
    $("#viandaRsm1").prop("checked", false);
  }
});

$("#viandaRsm2").click(function () {
  var capPrecio = $("#precioVianda2").val();
  var quitar = capPrecio.replace(/[$.]/g, "");
  var cantidad = $("#quantity").val();
  var cantidad2 = $("#quantity2").val();

  var trasA = parseInt(quitar) * cantidad;
  var trasN = parseInt(quitar) * cantidad2;
  var precio = $("#total").html();
  var quitar2 = precio.replace(/[$.]/g, "");

  if (cantidad >= 1) {
    if ($("#viandaRsm2").prop("checked")) {
      var total = parseInt(quitar2) + trasA + trasN;

      $("#total").html(commaSeparateNumber(total));
    } else {
      var total = parseInt(quitar2) - trasA - trasN;

      $("#total").html(commaSeparateNumber(total));
    }
  } else {
    Swal.fire(
      "La cantidad de pasajeros deben ser igual o mayor a 1!",
      "You clicked the button!",
      "warning"
    );
    $("#viandaRsm2").prop("checked", false);
  }
});

$("#viandaRsm3").click(function () {
  var capPrecio = $("#precioVianda3").val();
  var quitar = capPrecio.replace(/[$.]/g, "");
  var cantidad = $("#quantity").val();
  var cantidad2 = $("#quantity2").val();

  var trasA = parseInt(quitar) * cantidad;
  var trasN = parseInt(quitar) * cantidad2;
  var precio = $("#total").html();
  var quitar2 = precio.replace(/[$.]/g, "");

  if (cantidad >= 1) {
    if ($("#viandaRsm3").prop("checked")) {
      var total = parseInt(quitar2) + trasA + trasN;

      $("#total").html(commaSeparateNumber(total));
    } else {
      var total = parseInt(quitar2) - trasA - trasN;

      $("#total").html(commaSeparateNumber(total));
    }
  } else {
    Swal.fire(
      "La cantidad de pasajeros deben ser igual o mayor a 1!",
      "You clicked the button!",
      "warning"
    );
    $("#viandaRsm3").prop("checked", false);
  }
});

$("#navegacionRsm1").click(function () {
  var capPrecio = $("#precioNavegacion1").val();
  var quitar = capPrecio.replace(/[$.]/g, "");
  var cantidad = $("#quantity").val();
  var cantidad2 = $("#quantity2").val();

  var trasA = parseInt(quitar) * cantidad;
  var trasN = parseInt(quitar) * cantidad2;
  var precio = $("#total").html();
  var quitar2 = precio.replace(/[$.]/g, "");

  if (cantidad >= 1) {
    if ($("#navegacionRsm1").prop("checked")) {
      var total = parseInt(quitar2) + trasA + trasN;

      $("#total").html(commaSeparateNumber(total));
    } else {
      var total = parseInt(quitar2) - trasA - trasN;

      $("#total").html(commaSeparateNumber(total));
    }
  } else {
    Swal.fire(
      "La cantidad de pasajeros deben ser igual o mayor a 1!",
      "You clicked the button!",
      "warning"
    );
    $("#navegacionRsm1").prop("checked", false);
  }
});

$("#navegacionRsm2").click(function () {
  var capPrecio = $("#precioNavegacion2").val();
  var quitar = capPrecio.replace(/[$.]/g, "");
  var cantidad = $("#quantity").val();
  var cantidad2 = $("#quantity2").val();

  var trasA = parseInt(quitar) * cantidad;
  var trasN = parseInt(quitar) * cantidad2;
  var precio = $("#total").html();
  var quitar2 = precio.replace(/[$.]/g, "");

  if (cantidad >= 1) {
    if ($("#navegacionRsm2").prop("checked")) {
      var total = parseInt(quitar2) + trasA + trasN;

      $("#total").html(commaSeparateNumber(total));
    } else {
      var total = parseInt(quitar2) - trasA - trasN;

      $("#total").html(commaSeparateNumber(total));
    }
  } else {
    Swal.fire(
      "La cantidad de pasajeros deben ser igual o mayor a 1!",
      "You clicked the button!",
      "warning"
    );
    $("#navegacionRsm2").prop("checked", false);
  }
});

$("#navegacionRsm3").click(function () {
  var capPrecio = $("#precioNavegacion3").val();
  var quitar = capPrecio.replace(/[$.]/g, "");
  var cantidad = $("#quantity").val();
  var cantidad2 = $("#quantity2").val();

  var trasA = parseInt(quitar) * cantidad;
  var trasN = parseInt(quitar) * cantidad2;
  var precio = $("#total").html();
  var quitar2 = precio.replace(/[$.]/g, "");

  if (cantidad >= 1) {
    if ($("#navegacionRsm3").prop("checked")) {
      var total = parseInt(quitar2) + trasA + trasN;

      $("#total").html(commaSeparateNumber(total));
    } else {
      var total = parseInt(quitar2) - trasA - trasN;

      $("#total").html(commaSeparateNumber(total));
    }
  } else {
    Swal.fire(
      "La cantidad de pasajeros deben ser igual o mayor a 1!",
      "You clicked the button!",
      "warning"
    );
    $("#navegacionRsm3").prop("checked", false);
  }
});

$("#entradaRsm1").click(function () {
  var capPrecio = $("#precioEntrada1").val();
  var quitar = capPrecio.replace(/[$.]/g, "");
  var cantidad = $("#quantity").val();
  var cantidad2 = $("#quantity2").val();

  var trasA = parseInt(quitar) * cantidad;
  var trasN = parseInt(quitar) * cantidad2;
  var precio = $("#total").html();
  var quitar2 = precio.replace(/[$.]/g, "");

  if (cantidad >= 1) {
    if ($("#entradaRsm1").prop("checked")) {
      var total = parseInt(quitar2) + trasA + trasN;

      $("#total").html(commaSeparateNumber(total));
    } else {
      var total = parseInt(quitar2) - trasA - trasN;

      $("#total").html(commaSeparateNumber(total));
    }
  } else {
    Swal.fire(
      "La cantidad de pasajeros deben ser igual o mayor a 1!",
      "You clicked the button!",
      "warning"
    );
    $("#entradaRsm1").prop("checked", false);
  }
});
$("#entradaRsm2").click(function () {
  var capPrecio = $("#precioEntrada2").val();
  var quitar = capPrecio.replace(/[$.]/g, "");
  var cantidad = $("#quantity").val();
  var cantidad2 = $("#quantity2").val();

  var trasA = parseInt(quitar) * cantidad;
  var trasN = parseInt(quitar) * cantidad2;
  var precio = $("#total").html();
  var quitar2 = precio.replace(/[$.]/g, "");

  if (cantidad >= 1) {
    if ($("#entradaRsm2").prop("checked")) {
      var total = parseInt(quitar2) + trasA + trasN;

      $("#total").html(commaSeparateNumber(total));
    } else {
      var total = parseInt(quitar2) - trasA - trasN;

      $("#total").html(commaSeparateNumber(total));
    }
  } else {
    Swal.fire(
      "La cantidad de pasajeros deben ser igual o mayor a 1!",
      "You clicked the button!",
      "warning"
    );
    $("#entradaRsm2").prop("checked", false);
  }
});

$("#entradaRsm3").click(function () {
  var capPrecio = $("#precioEntrada3").val();
  var quitar = capPrecio.replace(/[$.]/g, "");
  var cantidad = $("#quantity").val();
  var cantidad2 = $("#quantity2").val();

  var trasA = parseInt(quitar) * cantidad;
  var trasN = parseInt(quitar) * cantidad2;
  var precio = $("#total").html();
  var quitar2 = precio.replace(/[$.]/g, "");

  if (cantidad >= 1) {
    if ($("#entradaRsm3").prop("checked")) {
      var total = parseInt(quitar2) + trasA + trasN;

      $("#total").html(commaSeparateNumber(total));
    } else {
      var total = parseInt(quitar2) - trasA - trasN;

      $("#total").html(commaSeparateNumber(total));
    }
  } else {
    Swal.fire(
      "La cantidad de pasajeros deben ser igual o mayor a 1!",
      "You clicked the button!",
      "warning"
    );
    $("#entradaRsm3").prop("checked", false);
  }
});

// $('#frmReserva').click(function(){

//     var dias = $('#cantidadDias').val();

//     var precio = $('#resultado2').attr('data-precio');

//     if (dias >= 1 ){

//         var total = (precio * dias).toFixed(3);

//         $('#total').html(total);
//     }else{

//         Swal.fire(
//             'La cantidad de días deben ser igual o mayor a 1!',
//             'You clicked the button!',
//             'warning'
//         )

//         var dias = $('#cantidadDias').val(1);

//     }

// })

$(".modulo-itinerario").click(function () {
  var t1 = $("#datepickerEntrada").datepicker("getDate").getDate();
  var t2 = $("#datepickerSalida").datepicker("getDate").getDate();
  var dia1 = parseInt(t1);
  var dia2 = parseInt(t2);
  var cantidad = dia2 - dia1;
  console.log(cantidad);
});

// $('#frmReserva').hover(function() {
//     var t1 = $('#datepickerEntrada').datepicker('getDate').getDate();
//     var t2 = $('#datepickerSalida').datepicker('getDate').getDate();
//     var dia1 = parseInt(t1);
//     var dia2 = parseInt(t2);
//     var cantidad = dia2 - dia1;
//     $('#cantidadDias').val(cantidad);

//     var dias = $('#cantidadDias').val();

//     var precio = $('#resultado2').attr('data-precio');
//     var quitar = precio.replace(/[$.]/g, '');

//     if (dias >= 1 ){

//         var total = parseInt(quitar * dias);

//         $('#total').html(commaSeparateNumber(total));
//     }else{

//         var dias = $('#cantidadDias').val(1);

//     }
// })

$("#frmReservaR").hover(function () {
  var t1 = $("#datepickerEntradaR").datepicker("getDate");
  var t2 = $("#datepickerSalidaR").datepicker("getDate");

  if (t1 && t2) {
    var difM = t2 - t1; // diferencia en milisegundos
    var difD = difM / (1000 * 60 * 60 * 24); // diferencia en dias
    $("#cantidadDias").val(difD);
    var dias = $("#cantidadDias").val();
    if (dias >= 1) {
      var precio = $("#resultado2").attr("data-precio");
      var quitar = precio.replace(/[$.]/g, "");
      var total = parseInt(quitar * dias);

      $("#total").html(commaSeparateNumber(total));
    } else {
      Swal.fire(
        "La fecha de salida debe ser posterior!",
        "You clicked the button!",
        "warning"
      );
      location.reload();
    }
  }
});

$("#rentaRsm1").click(function () {
  var capPrecio = $("#precioRenta1").val();
  console.log(capPrecio);
  var quitar = capPrecio.replace(/[$.]/g, "");
  var cantidad = $("#cantidadDias").val();

  var trasA = parseInt(quitar) * cantidad;
  var precio = $("#total").html();
  var quitar2 = precio.replace(/[$.]/g, "");

  if (cantidad >= 1) {
    if ($("#rentaRsm1").prop("checked")) {
      var total = parseInt(quitar2) + trasA;

      $("#total").html(commaSeparateNumber(total));
    } else {
      var total = parseInt(quitar2) - trasA;

      $("#total").html(commaSeparateNumber(total));
    }
  } else {
    Swal.fire(
      "La cantidad de dias deben ser igual o mayor a 1!",
      "You clicked the button!",
      "warning"
    );
    $("#rentaRsm1").prop("checked", false);
  }
});

$("#rentaRsm2").click(function () {
  var capPrecio = $("#precioRenta2").val();
  console.log(capPrecio);
  var quitar = capPrecio.replace(/[$.]/g, "");
  var cantidad = $("#cantidadDias").val();

  var trasA = parseInt(quitar) * cantidad;
  var precio = $("#total").html();
  var quitar2 = precio.replace(/[$.]/g, "");

  if (cantidad >= 1) {
    if ($("#rentaRsm2").prop("checked")) {
      var total = parseInt(quitar2) + trasA;

      $("#total").html(commaSeparateNumber(total));
    } else {
      var total = parseInt(quitar2) - trasA;

      $("#total").html(commaSeparateNumber(total));
    }
  } else {
    Swal.fire(
      "La cantidad de dias deben ser igual o mayor a 1!",
      "You clicked the button!",
      "warning"
    );
    $("#rentaRsm2").prop("checked", false);
  }
});

$("#rentaRsm3").click(function () {
  var capPrecio = $("#precioRenta3").val();
  console.log(capPrecio);
  var quitar = capPrecio.replace(/[$.]/g, "");
  var cantidad = $("#cantidadDias").val();

  var trasA = parseInt(quitar) * cantidad;
  var precio = $("#total").html();
  var quitar2 = precio.replace(/[$.]/g, "");

  if (cantidad >= 1) {
    if ($("#rentaRsm3").prop("checked")) {
      var total = parseInt(quitar2) + trasA;

      $("#total").html(commaSeparateNumber(total));
    } else {
      var total = parseInt(quitar2) - trasA;

      $("#total").html(commaSeparateNumber(total));
    }
  } else {
    Swal.fire(
      "La cantidad de dias deben ser igual o mayor a 1!",
      "You clicked the button!",
      "warning"
    );
    $("#rentaRsm3").prop("checked", false);
  }
});

// Crear Cookie

function crearCookie(nombre, valor, diasExpedicion) {

  var hoy = new Date();

  hoy.setTime(hoy.getTime() + (diasExpedicion * 24 * 60 * 60 * 1000));

  var fechaExpedicion = "expires=" + hoy.toUTCString();

  document.cookie = nombre + "=" + valor + "; " + fechaExpedicion;
}

function reservar() {
  var excursion = $("#tituloForm").html();
  var fecha = $("#datepickerReserva").val();
  var turno = $("#dropdownTurnos").val();
  var adultos = $("#quantity").val();
  var ninos = $("#quantity2").val();
  var bebes = $("#quantity3").val();
  var total = $("#total").html();
  var categoria = $('#category').val();

  if (!fecha || !turno || !adultos) {
    Swal.fire(
      "¡Complete todos lo campos requeridos *!",
      'Haga click en "OK" para continuar',
      "warning"
    );
  } else {
    //Añadimos la imagen de carga en el contenedor
    $("#contentRsm").html(
      '<div class="loading"><img src="vistas/assets/img/loader.gif" style="width: 70px" alt="loading" /><br/>Un momento, por favor...</div>'
    );

    $.ajax({
      type: "POST",
      url: "ajax/reserva.php",
      success: function (data) {

        $("#contentRsm").fadeIn(1000).html(data);

        localStorage.setItem("reserva", JSON.stringify(datos));

        var guardado = localStorage.getItem("reserva");

        var ver = JSON.parse(guardado);

        var q = ver.excursion;
        var p = ver.total;
        var t = ver.turno;
        var f = ver.fecha;
        var a = ver.adultos;
        var n = ver.ninos;
        var b = ver.bebes;
        var o = ver.opcionales;
        var c = ver.categoria;

        var price = parseInt(p.replace(/[$.]/g, ""));

        crearCookie("Precio", price, 1);
        crearCookie("Excursion", q, 1);
        crearCookie("Turno", t, 1);
        crearCookie("Adultos", a, 1);
        crearCookie("Ninos", n, 1);
        crearCookie("Bebes", b, 1);
        crearCookie("FechaReserva", f, 1);
        crearCookie("Opcionales", o, 1);
        crearCookie("Categoria", c, 1);

        // $('#exc').html(q);
        $("#precioReservaTotal").val(p);
        // $('#turn').html(t);
        $("#fech").html(f);
        // $('#adu').html(a);
        // $('#nin').html(n);
        // $('#beb').html(b);

        var ppal = localStorage.getItem("pasajeroPpal");

        if(ppal){
            localStorage.removeItem("pasajeroPpal");
        }
      },
      //Cargamos finalmente el contenido deseado
    });

    const opcionales = [];

    for (let i = 1; i <= 3; i++) {
      if ($(`#almuerzoRsm${i}`).prop("checked")) {
        var almuerzo = $(`#tituloAlmuerzo${i}`).html();

        opcionales.push(almuerzo);
      }
    }

    for (let i = 1; i <= 3; i++) {
      if ($(`#viandaRsm${i}`).prop("checked")) {
        var vianda = $(`#tituloVianda${i}`).html();

        opcionales.push(vianda);
      }
    }

    for (let i = 1; i <= 3; i++) {
      if ($(`#trasladoRsm${i}`).prop("checked")) {
        var traslado = $(`#tituloTraslado${i}`).html();

        opcionales.push(traslado);
      }
    }

    for (let i = 1; i <= 3; i++) {
      if ($(`#navegacionRsm${i}`).prop("checked")) {
        var navegacion = $(`#tituloNavegacion${i}`).html();

        opcionales.push(navegacion);
      }
    }

    for (let i = 1; i <= 3; i++) {
      if ($(`#entradaRsm${i}`).prop("checked")) {
        var navegacion = $(`#tituloEntrada${i}`).html();

        opcionales.push(navegacion);
      }
    }

    var datos = {
      excursion: excursion,
      fecha: fecha,
      turno: turno,
      adultos: adultos,
      ninos: ninos,
      bebes: bebes,
      opcionales: opcionales,
      total: total,
      categoria: categoria
    };

    $("#frmReserva").css("display", "none");
    $("#frmCasi").css("display", "block");
  }
}

function volver() {
  $("#frmReserva").css("display", "block");
  $("#frmCasi").css("display", "none");
}
