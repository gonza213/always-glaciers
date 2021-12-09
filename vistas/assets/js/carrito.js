function anadirCarrito() {
  var excursion = $("#tituloForm").html();
  var fecha = $("#datepickerReserva").val();
  var turno = $("#dropdownTurnos").val();
  var adultos = $("#quantity").val();
  var ninos = $("#quantity2").val();
  var bebes = $("#quantity3").val();
  var total = $("#total").html();
  var categoria = $("#category").val();

 crearCookie('Categoria_Carrito', categoria, 1);

  if (!fecha || !turno || !adultos) {
    Swal.fire(
      "¡Complete todos lo campos requeridos *!",
      'Haga click en "OK" para continuar',
      "warning"
    );
  } else {
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

    var carrito = JSON.parse(localStorage.getItem(`carrito`));

    let excursiones = [];
    excursiones.push(datos);

    if (carrito != null) {
      carrito.forEach((element) => {
        excursiones.push(element);

        console.log(element);
      });

      localStorage.setItem(`carrito`, JSON.stringify(excursiones));
    } else {
      localStorage.setItem(`carrito`, JSON.stringify(excursiones));
    }

    Swal.fire({
      icon: "success",
      title: "¡Has añanido la reserva al carrito!",
      showConfirmButton: true,
      confirmButtonText: "Cerrar",
      closeOnConfirm: false,
    }).then((result) => {
      if (result.value) {
        window.location = "index";
      }
    });
  }
}

function botonPasajero() {
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
};

function verCarrito() {
  var carrito = JSON.parse(localStorage.getItem("carrito"));

  if (!carrito) {
    if ($(".carro-lateral-1")) {
      $(".carro-lateral-1").remove();
    }
    $(".carro-lateral").append(
      //html
      `
          <li class="carro-lateral-1">
             <div class="cd-price bco">Su carrito se encuentra vacío</div>
          </li>;
          `
    );
  } else {
    if (carrito[0] === undefined) {
      if ($(".carro-lateral-1")) {
        $(".carro-lateral-1").remove();
      }
      $(".carro-lateral").append(
        //html
        `
            <li class="carro-lateral-1">
               <div class="cd-price bco">Su carrito se encuentra vacío</div>
            </li>;
            `
      );
    } else {
      if ($(".carro-lateral-1")) {
        $(".carro-lateral-1").remove();
      }

      carrito.forEach((element, index) => {
        $(".carro-lateral").append(
          //html
          `
                  <li class="carro-lateral-1">
                     <div class="cd-price bco p-3">Excursión: <b>${element.excursion}</b> <br> <span>Precio: <b>$${element.total}</b> <button type="button" class="btn btn-danger btn-sm pull-right btnCarrito p-2" onclick="borrarItem(${index})" > <i class="fa fa-trash"></i></button> </span> </div>
                  </li>;
                  `
        );
      });

      $(".carro-lateral").append(
        //html
        `
              <li class="carro-lateral-1">
                 <a href="carrito-reservas" class="btn btn-secondary btn-sm btn-block" onclick="carritoTotal()">Continuar <i class="fa fa-arrow-right"></i></a>
              </li>;
              `
      );
    }
  }
}

function borrarItem(id) {
  const carrito = JSON.parse(localStorage.getItem("carrito"));

  const index = carrito.indexOf(id);
  if (index === -1) carrito.splice(index, 1);

  localStorage.setItem("carrito", JSON.stringify(carrito));

  Swal.fire({
    icon: "success",
    title: "¡Has borrado la reserva del carrito!",
    showConfirmButton: true,
    confirmButtonText: "Cerrar",
    closeOnConfirm: false,
  }).then((result) => {
    if (result.value) {
      window.location = "index";
    }
  });
}

function carritoTotal(){
  var carrito = JSON.parse(localStorage.getItem("carrito"));
  var reserva = localStorage.getItem("reserva");

  if(reserva){
    localStorage.removeItem('reserva');
  }


  if(carrito){

    var total = 0;
    var reservas = [];

    carrito.forEach(element => {
      
      var excursiones = element.excursion; 
      var fechas = element.fecha;
      var turnos = element.turno;
      var adultos = element.adultos;
      var ninos = element.ninos;
      var bebes = element.bebes;
      var opcionales = element.opcionales;
      var precio = element.total;

      
      var info = {
        excursion: excursiones,
        fecha: fechas,
        turno: turnos,
        pasajeros: {
          adultos: adultos,
          ninos: ninos,
          bebes: bebes
        },
        totaL: precio,
        opcionales: opcionales
      };

      reservas.push(info);

      crearCookie('Excursiones', JSON.stringify(reservas), 1);


      var precios = element.total.replace(/[$.]/g, ''); 
      total += parseInt(precios);
      localStorage.setItem('TotalCarrito', total);
      crearCookie('TotalCarrito', total, 1);


    });  

    return total;


  

  }

}


$(".blog-width-sidebar").hover(function () {
  var carrito = JSON.parse(localStorage.getItem("carrito"));
  var totalCarrito = JSON.parse(localStorage.getItem("TotalCarrito"));


  if (!carrito) {
    if ($("#cartItem")) {
      $("#cartItem").remove();
    }

    $("#cd-cart-trigger").append(
      //html
      `
            <i class="fa fa-shopping-cart" id="cartItem" style="font-size:20px;width:10px;margin:5px 0 0 0;"></i> 
       
        `
    );
  } else {
    if (carrito[0] === undefined) {
      if ($("#cartItem")) {
        $("#cartItem").remove();
      }

      $("#cd-cart-trigger").append(
        //html
        `
            <i class="fa fa-shopping-cart" id="cartItem" style="font-size:20px;width:10px;margin:5px 0 0 0;"></i> 
       
        `
      );
    } else {
      if ($("#cartItem")) {
        $("#cartItem").remove();
        $("#numeroItem").remove();
      }
      $("#cd-cart-trigger").append(
        //html
        `
        <i class="fa fa-shopping-cart" id="cartItem" style="font-size:20px;width:10px;margin:5px 0 0 0;"></i> 
        <b id="numeroItem" style="font-size:10px; margin-left: 7px; background: red; color: #fff; padding: 2px;">1</b> 
        `
      );
    }
  }

  if(carrito){
    carrito.forEach((element, index) => {

      if($(`#listaPedido${index}`)){

        $(`#listaPedido${index}`).remove();

      }
      
      $('#pedidoCarrito').append(//html
        `
        <ul class="list-group text-info p-5" id="listaPedido${index}">
            <li class="list-group-item">
                <span class="badge" style="background: #024e6a">${element.excursion}</span>
                <b>Excursión:</b>
            </li>
            <li class="list-group-item">
                <span class="badge" style="background: #024e6a" >${element.fecha}</span>
                <b>Fecha:</b>
            </li>
            <li class="list-group-item">
                <span class="badge" style="background: #024e6a">${element.turno}</span>
                <b>Turno:</b>
            </li>
            <li class="list-group-item">
                Pasajeros: <br>
                <ul class="list-group text-info">
                    <li class="list-group-item">
                        <span class="badge" style="background: #024e6a" >${element.adultos}</span>
                        <b>Adultos:</b>
                    </li>
                    <li class="list-group-item">
                        <span class="badge" style="background: #024e6a">${element.ninos}</span>
                        <b>Niños:</b>
                    </li>
                </ul>
            </li>
            <li class="list-group-item">
                <span class="badge" style="background: #024e6a">${element.opcionales}</span>
                <b>Opcionales:</b>
            </li>
        </ul>
        `
      )
    });
 
  }

  if(totalCarrito){

    $('#totalCarrito').html(Intl.NumberFormat("de-DE").format(totalCarrito))
  }

});



