<?php

$server = "localhost";
$user = "root";
$pass = "";
$bd = "sistema_estoque";

if ($con = mysqli_connect($server,$user,$pass,$bd)){
    //echo "conectado";
} else{
    echo "erro!";
}