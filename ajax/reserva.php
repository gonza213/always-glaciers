<?php

sleep(1);
echo '  <div class="row p-5">
<div class="col-md-1"></div>
<div class="col-md-7 p-2">
    <p class="text-success">¡Buena Elección! <br> Ha agregado la excursión a su carrito de compras <br> Fecha seleccionada: <span id="fech"></span> </p>
</div>
<div class="col-md-4 p-2">  
    <form action="carrito-reserva" id="precioReserva" method="POST">
        <input type="hidden" name="precio" id="precioReservaTotal">
        <button type="submit" onclick="document.getElementById("precioReserva").submit();" class="btn btn-success btn-lg"><i class="fa fa-shopping-cart"></i> Ver carrito y pagar</button>
    </form>
</div>
</div>';
?>