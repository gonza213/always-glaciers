<?php


$conn = new mysqli("localhost", "root", "", "reservas-turismo");

if (isset($_POST["update"])) {
    foreach ($_POST["positions"] as $position) {
        $index = $position[0];
        $newPosition = $position[1];

        $conn->query("UPDATE subcategoria SET position = '$newPosition' WHERE id = '$index'");
    }

    exit('success');
}