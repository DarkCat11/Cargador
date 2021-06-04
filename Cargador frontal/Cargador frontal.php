<?php
include('Clase.php');

if(isset($_GET['Q']) && isset($_GET['Metodo']))
{
    $Q = $_GET['Q'];
    $Metodo = $_GET['Metodo'];
 echo "Hola";
}
else
{
 echo "Carga";
}
?>