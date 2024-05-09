<?php

include('conexion.php');

$pelicula = $_POST["pelicula"];
$genero = $_POST["genero"];

$sql = "INSERT INTO peliculas (pelicula, genero) VALUES ('$pelicula','$genero')";

mysqli_query($conn, $sql);

include('imprimir.php');
