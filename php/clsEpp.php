<?php
/*ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);*/
require_once "env.php";
class clsEpp
{
    private $mbd;
    function __construct()
    {
        $this->mbd = new Connection;
        $this->mbd = $this->mbd->openConnection();
    }
    function guardar_epp($POST)
    {
        $query = $this->mbd->prepare("INSERT INTO tbl_epp(descripcion, stock, usuario, marca_baja) VALUES(:descripcion, :stock, 1, 0);");
        $query->bindParam(":descripcion", $POST['descripcion']);
        $query->bindParam(":stock", $POST['stock']);
        $query->execute();

        return json_encode(
            array(
                "Result" => "OK"
            )
        );
    }
    function lista_epps() {
        
    }
}
