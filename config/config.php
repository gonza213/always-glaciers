<?php

$host = "localhost";
$user = "root";
$pass = "";
$db = "always_glaciers";

$con = mysqli_connect($host, $user, $pass, $db);

if (!$con) {
    die("Connection failed: " . mysqli_connect_error());
  }