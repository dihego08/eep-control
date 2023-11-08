<?php
require_once "clsEpp.php";
$accion = $_GET['accion'];
$epp = new clsEpp;
if ($accion == "lista_epps") {
    echo $epp->lista_epps();
} elseif ($accion == "guardar_epp") {
    echo $epp->guardar_epp($_POST);
}
