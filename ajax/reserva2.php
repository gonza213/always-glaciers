<?php

sleep(1);
echo '  <div class="row p-5">
<div class="col-md-1"></div>
<div class="col-md-7 p-2">
    <p class="text-success">¡Buena Elección! <br> Ha agregado la reserva a su carrito de compras <br> Fecha de entrada: <span id="fechR"></span> </p>
</div>
<div class="col-md-4 p-2">  
    <form action="carrito-reserva-renta" id="precioReservaR" method="POST">
        <input type="hidden" name="precio" id="precioReservaRTotal">
        <button type="submit" onclick="document.getElementById("precioReservaR").submit();" class="btn btn-success btn-lg"><i class="fa fa-shopping-cart"></i> Ver reserva y pagar</button>
    </form>
</div>
</div>';
?>