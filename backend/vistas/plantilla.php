<?php

session_start();

?>


<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Always Glaciers | Backend</title>

    <!-- VINCULOS CSS -->

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">

    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <!-- DataTables -->
    <link rel="stylesheet" href="vistas/plugins/datatables/dataTables.bootstrap4.css">


    <!-- RichText CSS -->
    <!-- <link rel="stylesheet" href="vistas/plugins/richtext/richtext.min.css"> -->

    <!-- Google Font: Source Sans Pro -->
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">

    <!-- VINCULOS JS -->
    <!-- Jquery library -->
    <!-- jQuery library -->
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>

    <!-- Popper JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"></script>

    <!-- Bootstrap JS -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
        integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous">
    </script>
    <!-- include summernote css/js -->
    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.js"></script>

    <!-- Theme style -->
    <link rel="stylesheet" href="vistas/dist/css/adminlte.min.css">

    <link rel="stylesheet" href="https://code.jquery.com/ui/1.10.1/themes/base/jquery-ui.css" />
    <!-- AdminLTE App -->
    <script src="vistas/dist/js/adminlte.min.js"></script>


    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
    <style>
    #status {
        position: relative;
        display: block;
        margin: auto;
    }
    </style>
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
    </style>
    <script>
    $.datepicker.regional['es'] = {
        closeText: 'Cerrar',
        prevText: '< Ant',
        nextText: 'Sig >',
        currentText: 'Hoy',
        monthNames: ['Enero', 'Febrero', 'Marzo', 'Abril', 'Mayo', 'Junio', 'Julio', 'Agosto', 'Septiembre',
            'Octubre', 'Noviembre', 'Diciembre'
        ],
        monthNamesShort: ['Ene', 'Feb', 'Mar', 'Abr', 'May', 'Jun', 'Jul', 'Ago', 'Sep', 'Oct', 'Nov', 'Dic'],
        dayNames: ['Domingo', 'Lunes', 'Martes', 'Miércoles', 'Jueves', 'Viernes', 'Sábado'],
        dayNamesShort: ['Dom', 'Lun', 'Mar', 'Mié', 'Juv', 'Vie', 'Sáb'],
        dayNamesMin: ['Do', 'Lu', 'Ma', 'Mi', 'Ju', 'Vi', 'Sá'],
        weekHeader: 'Sm',
        dateFormat: 'yy/mm/dd',
        firstDay: 1,
        isRTL: false,
        showMonthAfterYear: false,
        yearSuffix: ''
    };
    $.datepicker.setDefaults($.datepicker.regional['es']);
    $(function() {
        $("#datepicker").datepicker();
    });
    </script>
</head>

<body class="hold-transition sidebar-mini">

    <?php if (isset($_SESSION["iniciarSesion"]) && $_SESSION["iniciarSesion"] == "ok") : ?>

    <div class="wrapper">


        <?php

            include "paginas/modulos/header.php";
            include "paginas/modulos/menu.php";

            if (isset($_GET["pagina"])) {

                if ($_GET["pagina"] == "inicio") {

                    include "paginas/inicio.php";
                } else if ($_GET["pagina"] == "administrador") {

                    include "paginas/administrador.php";
                } else if ($_GET["pagina"] == "banner") {

                    include "paginas/banner.php";
                } else if ($_GET["pagina"] == "subcategorias") {

                    include "paginas/subcategorias.php";
                } else if ($_GET["pagina"] == "excursiones") {

                    include "paginas/excursiones.php";
                } else if ($_GET["pagina"] == "transferencia") {

                    include "paginas/transferencia.php";
                } else if ($_GET["pagina"] == "mercado-pago") {

                    include "paginas/mercado_pago.php";
                } else if ($_GET["pagina"] == "paypal") {

                    include "paginas/paypal.php";
                } else if ($_GET["pagina"] == "info") {

                    include "paginas/info.php";
                } else if ($_GET["pagina"] == "galeria") {

                    include "paginas/galeria.php";
                } else if ($_GET["pagina"] == "contacto") {

                    include "paginas/contacto.php";
                } else if ($_GET["pagina"] == "recorridos") {

                    include "paginas/recorridos.php";
                } else if ($_GET["pagina"] == "frecuentes") {

                    include "paginas/frecuentes.php";
                } else if ($_GET["pagina"] == "opcionales") {

                    include "paginas/opcionales.php";
                } else if ($_GET["pagina"] == "otros") {

                    include "paginas/otros.php";
                } else if ($_GET["pagina"] == "precios") {

                    include "paginas/precio.php";
                } else if ($_GET["pagina"] == "trip") {

                    include "paginas/trip.php";
                } else if ($_GET["pagina"] == "turnos") {

                    include "paginas/turnos.php";
                } else if ($_GET["pagina"] == "dias-reservados") {

                    include "paginas/dias_reservados.php";
                } else if ($_GET["pagina"] == "divisas") {

                    include "paginas/divisas.php";
                } else if ($_GET["pagina"] == "salir") {

                    include "paginas/salir.php";
                } else if ($_GET["pagina"] == "relacion-excursiones") {

                    include "paginas/modulos/relacion-excursion.php";
                } else if ($_GET["pagina"] == "relacion-lugares") {

                    include "paginas/modulos/relacion-lugares.php";
                } else if ($_GET["pagina"] == "relacion-buses") {

                    include "paginas/modulos/relacion-buses.php";
                } else if ($_GET["pagina"] == "relacion-rentas") {

                    include "paginas/modulos/relacion-renta.php";
                } else if ($_GET["pagina"] == "relacion-opcional") {

                    include "paginas/relacion-opcional.php";
                } else if ($_GET["pagina"] == "crear-admin") {

                    include "paginas/modulos/crear-admin.php";
                } else if ($_GET["pagina"] == "editar-admin") {

                    include "paginas/modulos/editar-admin.php";
                } else if ($_GET["pagina"] == "crear-banner") {

                    include "paginas/modulos/crear-banner.php";
                } else if ($_GET["pagina"] == "edit-banner") {

                    include "paginas/modulos/edit-banner.php";
                } else if ($_GET["pagina"] == "crear-excursion") {

                    include "paginas/modulos/crear-excursion.php";
                } else if ($_GET["pagina"] == "editar-excursion") {

                    include "paginas/modulos/editar-excursion.php";
                } else if ($_GET["pagina"] == "ver-excursion") {

                    include "paginas/modulos/ver-excursion.php";
                } else if ($_GET["pagina"] == "ver-galeria") {

                    include "paginas/modulos/ver-galeria.php";
                } else if ($_GET["pagina"] == "ver-recorrido") {

                    include "paginas/modulos/ver-recorrido.php";
                } else if ($_GET["pagina"] == "editar-recorrido") {

                    include "paginas/modulos/editar-recorrido.php";
                } else if ($_GET["pagina"] == "crear-pregunta") {

                    include "paginas/modulos/crear-pregunta.php";
                } else if ($_GET["pagina"] == "editar-pregunta") {

                    include "paginas/modulos/editar-pregunta.php";
                } else {

                    include "paginas/404.php";
                }
            } else {

                include "paginas/inicio.php";
            }


            include "paginas/modulos/footer.php"

            ?>

        <?php else : ?>

        <?php include "paginas/login.php"; ?>

        <?php endif; ?>

    </div>

    <!-- DataTables -->
    <script src="vistas/plugins/datatables/jquery.dataTables.js"></script>
    <script src="vistas/plugins/datatables/dataTables.bootstrap4.js"></script>
    <script src="vistas/dist/js/main.js"></script>
    <!-- Rich Text js -->
    <!-- <script src="vistas/plugins/richtext/jquery.richtext.min.js"></script> -->


    <!-- page script -->
    <script>
    $(function() {
        $("#example1").DataTable({
            "language": {
                "url": "//cdn.datatables.net/plug-ins/1.10.15/i18n/Spanish.json"
            }
        });
    });
    </script>
       <script>
    $(function() {
        $("#example3").DataTable({
            "language": {
                "url": "//cdn.datatables.net/plug-ins/1.10.15/i18n/Spanish.json"
            }
        });
    });
    </script>


    <script>
    $(function() {
        $("#exampleTraslado").DataTable({
            "language": {
                "url": "//cdn.datatables.net/plug-ins/1.10.15/i18n/Spanish.json"
            }
        });
    });
    </script>
    <script>
    $(function() {
        $("#exampleAlmuerzo").DataTable({
            "language": {
                "url": "//cdn.datatables.net/plug-ins/1.10.15/i18n/Spanish.json"
            }
        });
    });
    </script>
    <script>
    $(function() {
        $("#exampleNavegacion").DataTable({
            "language": {
                "url": "//cdn.datatables.net/plug-ins/1.10.15/i18n/Spanish.json"
            }
        });
    });
    </script>
    <script>
    $(function() {
        $("#exampleVianda").DataTable({
            "language": {
                "url": "//cdn.datatables.net/plug-ins/1.10.15/i18n/Spanish.json"
            }
        });
    });
    </script>

    <script>
    $(function() {
        $("#exampleEntrada").DataTable({
            "language": {
                "url": "//cdn.datatables.net/plug-ins/1.10.15/i18n/Spanish.json"
            }
        });
    });
    </script>

    <script>
    $(function() {
        $("#exampleBuses").DataTable({
            "language": {
                "url": "//cdn.datatables.net/plug-ins/1.10.15/i18n/Spanish.json"
            }
        });
    });
    </script>

    <script>
    $(function() {
        $("#exampleRenta").DataTable({
            "language": {
                "url": "//cdn.datatables.net/plug-ins/1.10.15/i18n/Spanish.json"
            }
        });
    });
    </script>

    <script>
    $(function() {
        $("#example2").DataTable({
            "pageLength": 100,
            "language": {
                "url": "//cdn.datatables.net/plug-ins/1.10.15/i18n/Spanish.json"
            }
        });
    });
    </script>

    <script>
    $(document).ready(function() {
        $('#summernoteIntro').summernote();
    });
    </script>
    <script>
    $(document).ready(function() {
        $('#summernoteDescripcion').summernote();
    });
    </script>

    <script>
    $(document).ready(function() {
        $('#summernoteRespuesta').summernote();
    });
    </script>

    <script>
    //Cambiar de posiciones
    $(document).ready(function() {
        $('.orden tbody').sortable({
            update: function(event, ui) {
                console.log($(this));
                $(this).children().each(function(index) {

                    if ($(this).attr('data-position') != (index + 1)) {
                        $(this).attr('data-position', (index + 1)).addClass('updated');
                    }
                });

                saveNewPositions();
            }
        });
    });

    function saveNewPositions() {
        var positions = [];
        $('.updated').each(function() {
            positions.push([$(this).attr('data-index'), $(this).attr('data-position')]);
            $(this).removeClass('updated');
        });

        $.ajax({
            url: 'vistas/paginas/subcategorias.php',
            method: 'POST',
            dataType: 'text',
            data: {
                update: 1,
                positions: positions
            },
            success: function(response) {
                console.log(response);
            }
        })
    }
    </script>

    <script>
    $(document).ready(function() {
        $('#buscador').keyup(function() {
            var tituloOpcional = $('.tituloOpcional');
            console.log(tituloOpcional);
            var buscando = $(this).val();
            var itemOpcional = '';
            for (var i = 0; i < tituloOpcional.length; i++) {
                itemOpcional = $(tituloOpcional[i]).html().toLowerCase();

                for (var x = 0; x < itemOpcional.length; x++) {
                    if (buscando.length == 0 || itemOpcional.indexOf(buscando) > -1) {
                        $(tituloOpcional[i]).parents('.itemOpcional').show();
                    } else {
                        $(tituloOpcional[i]).parents('.itemOpcional').hide();

                    }
                }
            }
        });
    });
    </script>

    <script>
    $(document).ready(function() {
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
    });
    </script>
</body>

</html>