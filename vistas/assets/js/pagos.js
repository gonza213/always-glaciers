function crearCookieDetalle(nombre, valor, diasExpedicion) {
  var hoy = new Date();

  hoy.setTime(hoy.getTime() + diasExpedicion * 24 * 60 * 60 * 1000);

  var fechaExpedicion = "expires=" + hoy.toUTCString();

  document.cookie = nombre + "=" + valor + "; " + fechaExpedicion;
}

// RESERVA INDIVIDUAL
// OBTENER DATOS
var category = localStorage.getItem("Category");
var local = JSON.parse(localStorage.getItem("reserva"));
var precioCarrito = localStorage.getItem("TotalCarrito");
var totalRenta = JSON.parse(localStorage.getItem("ReservaR"))

if(category != 'Renta'){

  if (local) {
    var posTotal = local.total.replace(/[$.]/g, "");
    var total = parseInt(posTotal);
    var descripcion = local.excursion;
    var page = "http://localhost/always/carrito-reserva";
    crearCookieDetalle("Reserva_Paypal", "ok", 1);
    document.cookie = "Carrito_Paypal=; expires=Thu, 01 Jan 1970 00:00:00 UTC;";
    document.cookie = "Renta_Paypal=; expires=Thu, 01 Jan 1970 00:00:00 UTC;";
  } else if (precioCarrito) {
    var total = parseInt(precioCarrito);
    var descripcion = "Excursiones";
    var page = "http://localhost/always/carrito-reservas";
    crearCookieDetalle("Carrito_Paypal", "ok", 1);
    document.cookie = "Reserva_Paypal=; expires=Thu, 01 Jan 1970 00:00:00 UTC;";
    document.cookie = "Renta_Paypal=; expires=Thu, 01 Jan 1970 00:00:00 UTC;";
  }

}else{

  if (totalRenta) {
    var posTotal = totalRenta.total.replace(/[$.]/g, "");
    var total = parseInt(posTotal);
    var descripcion = totalRenta.renta;
    var page = "http://localhost/always/carrito-reserva-renta";
    crearCookieDetalle("Renta_Paypal", "ok", 1);
    document.cookie = "Reserva_Paypal=; expires=Thu, 01 Jan 1970 00:00:00 UTC;";
    document.cookie = "Carrito_Paypal=; expires=Thu, 01 Jan 1970 00:00:00 UTC;";
  }

}



// MERCADO PAGO
// Agrega credenciales de SDK
const mp = new MercadoPago("APP_USR-fda6d4b7-3692-41b1-aeb2-6c07a91c5669", {
  locale: "es-AR",
});

// Inicializa el Web Tokenize Checkout
mp.checkout({
  tokenizer: {
    totalAmount: total,
    backUrl: page,
    summary: {
      productLabel: descripcion,
      product: total,
    },
  },
  render: {
    container: "#btnMercado", // Indica dónde se mostrará el botón
    label: "Pagar Reserva",
    // Cambia el texto del botón de pago (opcional)
  },
});

//CONVERTIDOR
let precioDolar = 98.94;
let totalPrecio = Number.parseFloat(total / precioDolar).toFixed(2);

// let url = "http://api.currencylayer.com/live?access_key=2f11302b22dbe72165f1c6a267bf54d4&currencies=ARS";

// fetch(url)
//   .then(function (response) {
//     return response.json();
//   })
//   .then(function (data) {
//     var dolar = data.quotes.USDARS;
//     precioDolar = Number.parseFloat(total / dolar).toFixed(2);
//   })
//   .catch(function (error) {
//     console.error(error);
//   });

//PAYPAL

paypal
  .Buttons({
    createOrder: function (data, actions) {
      // This function sets up the details of the transaction, including the amount and line item details.
      return actions.order.create({
        purchase_units: [
          {
            amount: {
              value: totalPrecio,
            },
          },
        ],
      });
    },
    onApprove: function (data, actions) {
      // This function captures the funds from the transaction.
      return actions.order.capture().then(function (details) {
        // This function shows a transaction success message to your buyer.
        var detalles = JSON.stringify(details);
        // document.cookie = "Detalles=" + detalles;

        crearCookieDetalle("Detalles", detalles, 1);

        Swal.fire({
          icon: "success",
          title: "¡Felicitaciones! Has reservado la excursión exitosamente",
          showConfirmButton: true,
          confirmButtonText: "Cerrar",
          closeOnConfirm: false,
        }).then((result) => {
          if (result.value) {
            window.location = "index.php?pagina=index&status=apro";
          }
        });
      });
    },
  })
  .render("#btnPaypal");
// This function displays Smart Payment Buttons on your web page.
