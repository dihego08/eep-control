<?php
require_once "clsEpp.php";
$accion = $_GET['accion'];
$epp = new clsEpp;
if ($accion == "lista_epps") {
    echo $epp->lista_epps();
} elseif ($accion == "guardar_epp") {
    echo $epp->guardar_epp($_POST);
} elseif ($accion == "editar_epp") {
    echo $epp->editar_epp($_POST['id']);
} elseif ($accion == "actualizar_epp") {
    echo $epp->actualizar_epp($_POST);
} elseif ($accion == "eliminar_epp") {
    echo $epp->eliminar_epp($_POST['id']);
} elseif ($accion == "lista_equipos") {
    echo $epp->lista_equipos();
} elseif ($accion == "guardar_equipo") {
    echo $epp->guardar_equipo($_POST);
} elseif ($accion == "editar_equipo") {
    echo $epp->editar_equipo($_POST['id']);
} elseif ($accion == "actualizar_equipo") {
    echo $epp->actualizar_equipo($_POST);
} elseif ($accion == "eliminar_equipo") {
    echo $epp->eliminar_equipo($_POST['id']);
} elseif ($accion == "lista_materiales") {
    echo $epp->lista_materiales();
} elseif ($accion == "guardar_material") {
    echo $epp->guardar_material($_POST);
} elseif ($accion == "editar_material") {
    echo $epp->editar_material($_POST['id']);
} elseif ($accion == "actualizar_material") {
    echo $epp->actualizar_material($_POST);
} elseif ($accion == "eliminar_material") {
    echo $epp->eliminar_material($_POST['id']);
} elseif ($accion == "lista_herramientas") {
    echo $epp->lista_herramientas();
} elseif ($accion == "guardar_herramienta") {
    echo $epp->guardar_herramienta($_POST);
} elseif ($accion == "editar_herramienta") {
    echo $epp->editar_herramienta($_POST['id']);
} elseif ($accion == "actualizar_herramienta") {
    echo $epp->actualizar_herramienta($_POST);
} elseif ($accion == "eliminar_herramienta") {
    echo $epp->eliminar_herramienta($_POST['id']);
} elseif ($accion == "lista_puestos") {
    echo $epp->lista_puestos();
} elseif ($accion == "guardar_puesto") {
    echo $epp->guardar_puesto($_POST);
} elseif ($accion == "editar_puesto") {
    echo $epp->editar_puesto($_POST['id']);
} elseif ($accion == "actualizar_puesto") {
    echo $epp->actualizar_puesto($_POST);
} elseif ($accion == "eliminar_puesto") {
    echo $epp->eliminar_puesto($_POST['id']);
} elseif ($accion == "lista_personal") {
    echo $epp->lista_personal();
} elseif ($accion == "guardar_personal") {
    echo $epp->guardar_personal($_POST);
} elseif ($accion == "editar_personal") {
    echo $epp->editar_personal($_POST['id']);
} elseif ($accion == "actualizar_personal") {
    echo $epp->actualizar_personal($_POST);
} elseif ($accion == "eliminar_personal") {
    echo $epp->eliminar_personal($_POST['id']);
} elseif ($accion == "lista_movimientos_epp") {
    echo $epp->lista_movimientos_epp();
} elseif ($accion == "guardar_movimiento_epp") {
    echo $epp->guardar_movimiento_epp($_POST);
} elseif ($accion == "lista_tipos_movimientos") {
    echo $epp->lista_tipos_movimientos();
} elseif ($accion == "lista_movimientos_equipos") {
    echo $epp->lista_movimientos_equipos();
} elseif ($accion == "guardar_movimiento_equipos") {
    echo $epp->guardar_movimiento_equipos($_POST);
} elseif ($accion == "lista_movimientos_materiales") {
    echo $epp->lista_movimientos_materiales();
} elseif ($accion == "guardar_movimiento_materiales") {
    echo $epp->guardar_movimiento_materiales($_POST);
}elseif ($accion == "lista_movimientos_herramientas") {
    echo $epp->lista_movimientos_herramientas();
} elseif ($accion == "guardar_movimiento_herramientas") {
    echo $epp->guardar_movimiento_herramientas($_POST);
}
