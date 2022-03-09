<?php

$rutas = ControllerRutas::ctrRutas();
$servidor = ControllerRutas::ctrServidor();
$info = ControladorInfo::ctrMostrarInfo();
$moneda = ControladorMoneda::ctrMostrarMoneda();
$otros = ControladorOtros::ctrMostrarOtros();
$redes = ControladorOtros::ctrMostrarRedes();
$operacion = mt_rand(10000, 20000);

if (isset($_COOKIE["Detalles"])) {

    $detalles = json_decode($_COOKIE["Detalles"]);
    //  echo '<pre>'; print_r($detalles->purchase_units[0]->amount->value); echo '</pre>';
    $precio = $detalles->purchase_units[0]->amount->value;

    if (isset($_COOKIE["Reserva_Paypal"])) {

        $datos = array(
            "excursion" => $_COOKIE['Excursion'],
            "total" => $precio,
            "turno" => $_COOKIE['Turno'],
            "adultos" => $_COOKIE['Adultos'],
            "ninos" => $_COOKIE['Ninos'],
            "bebes" => $_COOKIE['Bebes'],
            "fecha_reserva" => $_COOKIE['FechaReserva'],
            "opcionales" => $_COOKIE['Opcionales'],
            "pasajeros" => $_COOKIE['Pasajeros'],
            "metodo_pago" => $_COOKIE['Metodo'],
            "operacion" => $operacion,
            "numero_transaccion" => $detalles->{'id'}
        );

        $respuesta = ControladorReservas::ctrCrearReserva($datos);
    } else if (isset($_COOKIE["Carrito_Paypal"])) {


        $datos = array(
            "excursiones" => $_COOKIE['Excursiones'],
            "total" => $precio,
            "pasajeros" => $_COOKIE['Pasajeros'],
            "metodo_pago" => $_COOKIE['Metodo'],
            "operacion" => $operacion,
            "numero_transaccion" => $detalles->{'id'}
        );

        $respuesta = ControllerCarrito::ctrEnviarCarrito($datos);
    } else if (isset($_COOKIE["Renta_Paypal"])) {


        $datos = array(
            "renta" => $_COOKIE['Renta'],
            "total" => $precio,
            "pasajeros" => $_COOKIE['Pasajeros'],
            "metodo_pago" => $_COOKIE['Metodo'],
            "operacion" => $operacion,
            "numero_transaccion" => $detalles->{'id'}
        );

        $respuesta = ControllerCarrito::ctrEnviarCarritoRenta($datos);
    }


    echo '<script> document.cookie = "Detalles=; expires=Thu, 01 Jan 1970 00:00:00 UTC;"; </script>';
    echo '<script> document.cookie = "Categoria_Carrito=; expires=Thu, 01 Jan 1970 00:00:00 UTC;"; </script>';
}

if (isset($_GET["status"])) {
    echo '<script>  localStorage.removeItem("carrito"); </script>';
    echo '<script>  localStorage.removeItem("info"); </script>';
    echo '<script>  localStorage.removeItem("TotalCarrito"); </script>';
    echo '<script>  localStorage.removeItem("reserva"); </script>';
    echo '<script>  localStorage.removeItem("pasajeroPpal"); </script>';
    echo '<script>           
            for (let i = 2; i < 11; i++) {
        
                localStorage.removeItem(`pasajero${i}`);
                
            } 
     </script>';
    echo '<script> document.cookie = "Categoria_Carrito=; expires=Thu, 01 Jan 1970 00:00:00 UTC;"; </script>';
}

$divisas = ControladorDivisas::ctrMostrarDivisas();

// echo '<pre>'; print_r($divisas[0][1]); echo '</pre>';

$moneda_usd = $divisas[0][1];
$moneda_eur = $divisas[0][2];
$moneda_brl = $divisas[0][3];

if (!$_GET) {

    header("Location: index");
}


?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" /> -->
    <title><?php echo $info[0]["titulo"] ?></title>
    <meta name="description" content="<?php echo $info[1]["descripcion"] ?>">
    <meta name="keywords" content="<?php echo $info[2]["etiquetas"] ?>">
    <!-- <link rel="icon" type="image/png" sizes="32x32" href="<?php echo $info[3]["logo"] ?>"> -->
    <link rel="stylesheet" type="text/css" href="./vistas/templates/css/breadcrumb.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Muli:300,400,300italic,400italic">
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:700,600' rel='stylesheet' type='text/css'>
    <!-- <link rel="stylesheet" href="./vistas/vendors/font-awesome/css/font-awesome.css"> -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="./vistas/vendors/bootstrap/dist/css/bootstrap.css">
    <link rel="stylesheet" href="./vistas/vendors/bootstrap/dist/css/bootstrap-impresion.css" media="print">

    <!-- <link rel="stylesheet" href="./vistas/vendors/mediaelement/build/mediaelementplayer.min.css"> -->
    <!-- <link rel="stylesheet" href="./vistas/vendors/owl-carousel/owl-carousel/owl.carousel.css">
    <link rel="stylesheet" href="./vistas/vendors/owl-carousel/owl-carousel/owl.theme.css"> -->
    <link rel="stylesheet" href="./vistas/assets/css/bootstrapx.css">
    <link rel="stylesheet" href="./vistas/assets/css/main.css">
    <link rel="stylesheet" href="./vistas/assets/css/main-impresion.css" media="print">
    <link rel="stylesheet" href="./vistas/assets/css/responsive.css">
    <!-- <link rel="stylesheet" href="./vistas/assets/css/cart-style.css"> -->
    <link rel="stylesheet" href="./vistas/assets/css/marquesina.css">
    <link rel="stylesheet" href="./vistas/assets/css/main2.css">
    <link rel="stylesheet" href="./vistas/assets/css/excursiones.css">
    <script src="https://code.jquery.com/jquery-1.10.2.js"></script>
    <script src="https://code.jquery.com/ui/1.10.4/jquery-ui.js"></script>
    <script type="text/javascript" src="./vistas/assets/js/fresco.js"></script>
    <link rel="stylesheet" type="text/css" href="./vistas/assets/css/fresco.css" />

    <style>
        body {
            -webkit-font-smoothing: subpixel-antialiased !important;
        }
    </style>
    <link rel="stylesheet" href="./vistas/assets/css/responsive2.css">



    <link rel="stylesheet" href="./vistas/assets/css/fullcalendar.min.css">
    <link rel="stylesheet" href="./vistas/assets/css/contacto.css">
    <!-- <link rel="stylesheet" href="./vistas/assets/css/colorbox.css"> -->
    <link rel="stylesheet" href="./vistas/assets/css/remodal.css">
    <!-- <link rel="stylesheet" href="./vistas/assets/css/slick.css">
    <link rel="stylesheet" href="./vistas/assets/css/slick-theme.css"> -->
    <link rel="stylesheet" href="./vistas/assets/css/checks.css">
    <link rel="stylesheet" href="./vistas/assets/css/ficha-obj.css">
    <link rel="stylesheet" href="./vistas/assets/css/tooltips.css">
    <link href="https://cdn.datatables.net/1.10.24/css/jquery.dataTables.css">

    <script src="https://cdn.datatables.net/1.10.24/js/jquery.dataTables.js">
    </script>

    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
    <style>
        .remodal-bg.with-red-theme.remodal-is-opening,
        .remodal-bg.with-red-theme.remodal-is-opened {
            filter: none;
        }

        .remodal-overlay.with-red-theme {
            background-color: #f44336;
        }

        .remodal.with-red-theme {
            background: #fff;
        }

        .panel-icon-plus,
        .panel-icon,
        .panel-icon-left,
        .panel-icon-plus:before {
            color: #484848 !important;
        }

        input::-webkit-input-placeholder {
            font-size: 14px !important;
            color: #333 !important;
        }

        input:-moz-placeholder {
            font-size: 14px !important;
            color: #333 !important;
        }

        input::-moz-placeholder {
            font-size: 14px !important;
            color: #333 !important;
        }

        input:-ms-input-placeholder {
            font-size: 14px !important;
            color: #333 !important;
        }

        .faqs-contacto input[type="text"] {
            width: 92%;
            display: inline-block;
            vertical-align: baseline;
            margin-top: 0;
            background: #fff;
            border-radius: 3px;
            height: 40px;
            font-size: 12px;
        }

        .buscador-div {
            width: 60%;
            margin: 0 auto;
        }

        .textarea-contacto {
            font-size: 12px;
        }

        @media only screen and (max-device-width: 769px) {
            .faqs-contacto input[type="text"] {
                width: 98%;
            }

            .buscador-div {
                width: 95%;
            }
        }

        @media print {
            .table {
                width: 90%;
                background-color: black;
            }

            .oe-box-tab {
                width: 90%;
            }

            .col-l-fich {
                width: 90%;
            }

            #linea-tiempo {
                width: 90%;
            }

            #noimprime {
                visibility: hidden;
                display: none;
            }

        }


        .btn3:hover {
            background-color: #0077b9;
            color: white;
        }

        .btn4:hover {
            border: 2px solid white;
        }
    </style>

    <link rel="stylesheet" href="./vistas/assets/css/reservas.css">
    <script src="vistas/assets/js/covid.js"></script>
    <!-- <script src="vistas/assets/js/bootstrap-datepicker.min.js"></script> -->
    <link rel="stylesheet" href="https://code.jquery.com/ui/1.10.1/themes/base/jquery-ui.css" />
    <script src="vistas/assets/js/moment.js"></script>
    <script src="vistas/assets/js/fullcalendar.min.js"></script>
    <script src="vistas/assets/js/datepickers.js"></script>
    <script src="vistas/assets/js/fly.js"></script>


    <style>
        .ui-datepicker {
            width: 300px;
            height: 235px;
            margin: 5px auto 0;
            font: 12pt Arial, sans-serif;
            border: none !important;
        }

        .ui-datepicker table {
            width: 100%;
        }

        .ui-datepicker-header {
            background: #3399ff;
            color: #ffffff;
            border: none !important;
        }

        /* .ui-state-highlight,
    .ui-widget-content .ui-state-highlight {
        background: none !important;
        background-color: #eaeaea !important;
        border: 1px solid #A51E1E !important;
        border-radius: 10% !important;
    } */

        .event a {
            background-color: #5FBA7D !important;
            color: #ffffff !important;
        }

        .demonstrations:hover img {
            border: 3px inset #3399ff;
        }

        .transferencia {
            display: flex;
            justify-content: center;
            padding: 20px;
        }

        .transferencia span:first-child {
            display: none;
            visibility: hidden;
            /* color: red !important; */
        }

        .transferencia a span:last-child {
            position: absolute;
            top: 0;
            right: 0;
            bottom: 0;
            left: 0;
            display: flex;
            align-items: center;
            justify-content: center;
            transform: translateY(100%);
            visibility: hidden;

        }

        .transferencia span {
            transition: transform 0.2s ease-out;

        }

        .transferencia:hover {
            display: flex;
            justify-content: center;
            background-color: #00c0ef;
            padding: 20px;
        }


        .transferencia:hover span:first-child {
            transform: translateY(-100%);
            visibility: visible;
        }

        .transferencia:hover span:last-child {
            transform: none;
            color: white !important;
            visibility: visible;
        }

        #cantidad2 {
            margin-top: 5px;
            padding: 10px;
            box-shadow: 2px 0px 3px #888888;
        }

        #cantidad2 li {
            list-style: none !important;
        }

        #cantidad2 input {
            text-align: center;
            border: none !important;
        }

        #cantidad3 {
            display: none !important;
        }

        #ocultar-precios {
            border: 1px dashed #888888;
            padding: 5px;
            margin-top: 3px;
            margin-bottom: 3px;
        }

        #ver-precios {
            border: 1px dashed #888888;
            padding: 5px;
            margin-top: 3px;
            margin-bottom: 3px;
        }

        #ocultar-cbu {
            /* border: 1px dashed #888888; */
            padding: 5px;
            margin-top: 3px;
            margin-bottom: 3px;
        }

        #ver-cbu {
            /* border: 1px dashed #888888; */
            padding: 5px;
            margin-top: 3px;
            margin-bottom: 3px;
        }


        #contact-whatsapp {
            background: #4dc247;
            position: fixed;
            bottom: 1.5rem;
            right: 1.5rem;
            z-index: 999;
            border-radius: 50% !important;
            height: 5rem;
            width: 5rem;
            display: flex;
            align-items: center;
            justify-content: center;
            box-shadow: 0px 1px 4px 1px rgba(17, 17, 17, 0.25);
            -webkit-transition: all 0.3s ease;
            -moz-transition: all 0.3s ease;
            -o-transition: all 0.3s ease;
            transition: all 0.3s ease;
        }
    </style>



</head>

<body class="blog-width-sidebar">

    <input type="hidden" id="usd" value="<?php echo $moneda_usd ?>">
    <?php foreach ($otros as $key => $value) : ?>
        <input type="hidden" id="descTra" value="<?php echo $value["descuento"] ?>">
        <input type="hidden" id="cbuTra" value="<?php echo $value["cbu"] ?>">
        <input type="hidden" id="aliasTra" value="<?php echo $value["alias"] ?>">
        <input type="hidden" id="cuitTra" value="<?php echo $value["cuit"] ?>">
        <input type="hidden" id="bancoTra" value="<?php echo $value["banco"] ?>">
    <?php endforeach; ?>

    <?php foreach ($redes as $key => $value) : ?>
        <?php if ($value["icono"] == "fa fa-whatsapp") : ?>
            <a href="<?php echo $value["detalle"] ?>" id="contact-whatsapp"><img src="vistas/images/whatsapp.svg" alt="Whatsapp" /></a>
        <?php endif; ?>
    <?php endforeach; ?>

    <?php


    if (isset($_GET["pagina"])) {

        if ($_GET["pagina"] == "index") {

            include "paginas/inicio.php";
        } else if ($_GET["pagina"] == "index-usd") {

            include "paginas/inicio_usd.php";
        } else if ($_GET["pagina"] == "index-eur") {

            include "paginas/inicio_eur.php";
        } else if ($_GET["pagina"] == "contact") {

            include "paginas/contacto.php";
        } else if ($_GET["pagina"] == "excursiones") {

            include "paginas/excursiones.php";
        } else if ($_GET["pagina"] == "excursiones-usd") {

            include "paginas/excursiones_usd.php";
        } else if ($_GET["pagina"] == "lugares") {

            include "paginas/lugares.php";
        } else if ($_GET["pagina"] == "lugares-usd") {

            include "paginas/lugares_usd.php";
        } else if ($_GET["pagina"] == "reserva") {

            include "paginas/reservas.php";
        } else if ($_GET["pagina"] == "reserva-usd") {

            include "paginas/reservas_usd.php";
        } else if ($_GET["pagina"] == "buses") {

            include "paginas/buses.php";
        } else if ($_GET["pagina"] == "buses-usd") {

            include "paginas/buses_usd.php";
        } else if ($_GET["pagina"] == "renta") {

            include "paginas/renta.php";
        } else if ($_GET["pagina"] == "renta-usd") {

            include "paginas/renta_usd.php";
        } else if ($_GET["pagina"] == "itinerario-listado") {

            include "paginas/itinerario-listado.php";
        } else if ($_GET["pagina"] == "medios-de-pagos") {

            include "paginas/medio-de-pagos.php";
        } else if ($_GET["pagina"] == "transferencia") {

            include "paginas/transferencia.php";
        } else if ($_GET["pagina"] == "carrito-reserva") {

            include "paginas/compras.php";
        } else if ($_GET["pagina"] == "carrito-reservas") {

            include "paginas/carrito-compras.php";
        } else if ($_GET["pagina"] == "carrito-reserva-renta") {

            include "paginas/carrito-compra-renta.php";
        } else if ($_GET["pagina"] == "quienes-somos") {

            include "paginas/about.php";
        } else {

            include "paginas/404.php";
        }
    } else {

        include "paginas/inicio.php";
    }

    ?>


    <?php include "paginas/modulos/footer.php" ?>
    <?php include "paginas/modulos/modal.php" ?>



    <script src="vistas/vendors/bootstrap/dist/js/bootstrap.js" type="text/javascript"></script>
    <script src="vistas/vendors/jquery.easy-pie-chart/dist/jquery.easypiechart.js" type="text/javascript"></script>
    <!-- <script src="vistas/vendors/mediaelement/build/mediaelement-and-player.min.js" type="text/javascript"></script> -->
    <script src="vistas/vendors/countUp.js/countUp.js" type="text/javascript"></script>
    <script src="vistas/vendors/vistas/imagesloaded/vistas/imagesloaded.pkgd.min.js" type="text/javascript"></script>
    <script src="vistas/vendors/masonry/dist/masonry.pkgd.min.js" type="text/javascript"></script>
    <!-- <script src="vistas/vendors/jquery-prettyPhoto/js/jquery.prettyPhoto.js" type="text/javascript"></script> -->
    <script src="vistas/vendors/stellar.js/jquery.stellar.min.js" type="text/javascript"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flexslider/2.7.0/jquery.flexslider.js"></script>
    <script src="vistas/vendors/uikit/dist/js/uikit.min.js" type="text/javascript"></script>
    <!-- <script src="vistas/vendors/owl-carousel/owl-carousel/owl.carousel.min.js" type="text/javascript"></script> -->
    <script src="vistas/assets/js/oe-main.js" type="text/javascript"></script>
    <script src="vistas/assets/js/oe-chart.js" type="text/javascript"></script>
    <script src="vistas/assets/js/oe-flexslider.js" type="text/javascript"></script>
    <script src="vistas/assets/js/oe-counter.js" type="text/javascript"></script>
    <script src="vistas/assets/js/oe-masonry.js" type="text/javascript"></script>
    <!-- <script src="vistas/assets/js/oe-prettyphoto.js" type="text/javascript"></script>
    <script src="vistas/assets/js/oe-parallax.js" type="text/javascript"></script>
    <script src="vistas/assets/js/oe-countdown.js" type="text/javascript"></script> -->
    <!-- <script src="vistas/assets/js/oe-videobg.js" type="text/javascript"></script>
    <script src="vistas/assets/js/oe-audio.js" type="text/javascript"></script> -->
    <!-- <script src="vistas/assets/js/oe-owl-carousel.js" type="text/javascript"></script> -->
    <!-- <script src="vistas/assets/js/oe-testimonial.js" type="text/javascript"></script> -->
    <script src="vistas/assets/js/exec.js"></script>



    <!-- <script src="vistas/assets/js/cart-main.js"></script> -->
    <script src="vistas/assets/js/alturas.js"></script>
    <script src="vistas/assets/js/tooltips.js"></script>
    <script src="vistas/assets/js/remodal.js"></script>
    <script src="vistas/assets/js/pasajeros.js"></script>
    <script src="vistas/assets/js/pasajeros2.js"></script>
    <script src="vistas/assets/js/carrito.js"></script>
    <!-- SDK Client-Side Mercado Pago -->
    <script src="https://sdk.mercadopago.com/js/v2"></script>
    <script src="https://www.paypal.com/sdk/js?client-id=AVY7Ud4tNEw5eT70kR_9zWoPMkXUpOu9QnZxy_LrfBcze0SJElOwdnsEBBtLaUMQHvWkv2FRtF8v_RXx">
    </script>
    <script src="vistas/assets/js/pagos.js"></script>

    <script>
        $(".btnExcursion").click(function() {

            var idExcursion = $(this).attr("idExcursion");

            var datos = new FormData();
            datos.append("idExcursion", idExcursion);

            $.ajax({
                url: 'ajax/ajax.php',
                method: 'POST',
                data: datos,
                cache: false,
                contentType: false,
                processData: false,
                dataType: 'json',
                success: function(respuesta) {
                    var horarios = [respuesta['horarios']];
                    $.each(horarios, function(index, value) {
                        console.log(value);
                    })

                    $('#excursion').val(respuesta["titulo"]);
                    $('#precio_bajo').val(respuesta["precio_bajo"]);
                    $('#precio_ninos').val(respuesta["precio_ninos"]);
                    $("#turnos option:selected").val(respuesta["horarios"]);
                    $("#turnos option:selected").html(respuesta["horarios"]);
                }
            });
        })
    </script>
    <script>
        function buscarAhora(buscar) {
            var parametros = {
                "buscar": buscar
            };

            $.ajax({
                data: parametros,
                type: 'POST',
                url: 'ajax/buscar.php',
                success: function(data) {
                    document.getElementById("datos_buscador").innerHTML = data;
                }
            })
        }

        function noFunciona() {
            Swal.fire(
                "¡No esta disponible esta función por el momento!",
                "Haga click en OK para continuar",
                "warning"
            );
        }


        function noPermitido() {
            Swal.fire(
                "¡La categoría no coincide con los items que están añadido al carrito!",
                "Haga click en OK para continuar",
                "warning"
            );
        }
    </script>

    <script>
        $('#buscador2').keyup(function() {
            var tituloItem = $('.tituloItem');
            console.log(tituloItem);
            var buscando = $(this).val();
            var itemBody = '';
            for (var i = 0; i < tituloItem.length; i++) {
                itemBody = $(tituloItem[i]).html().toLowerCase();

                for (var x = 0; x < itemBody.length; x++) {
                    if (buscando.length == 0 || itemBody.indexOf(buscando) > -1) {
                        $(tituloItem[i]).parents('.itemBody').show();
                    } else {
                        $(tituloItem[i]).parents('.itemBody').hide();

                    }
                }
            }
        });
    </script>



</body>

</html>