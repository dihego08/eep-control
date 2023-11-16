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
    function lista_epps()
    {
        $query = $this->mbd->prepare("SELECT * FROM tbl_epp WHERE marca_baja = 0;");
        $query->execute();
        $values = array();
        while ($res = $query->fetch(PDO::FETCH_ASSOC)) {
            $values[] = $res;
        }
        return json_encode($values);
    }
    function editar_epp($id)
    {
        $query = $this->mbd->prepare("SELECT * FROM tbl_epp WHERE id = :id;");
        $query->bindParam(":id", $id);
        $query->execute();
        return json_encode($query->fetch(PDO::FETCH_ASSOC));
    }
    function actualizar_epp($POST)
    {
        $query = $this->mbd->prepare("UPDATE tbl_epp SET descripcion = :descripcion, stock = :stock WHERE id = :id");
        $query->bindParam(":descripcion", $POST['descripcion']);
        $query->bindParam(":stock", $POST['stock']);
        $query->bindParam(":id", $POST['id']);
        $query->execute();
        return json_encode(
            array(
                "Result" => "OK"
            )
        );
    }
    function eliminar_epp($id){
        $query = $this->mbd->prepare("UPDATE tbl_epp SET marca_baja = 1 WHERE id = :id");
        $query->bindParam(":id", $id);
        $query->execute();
        return json_encode(
            array(
                "Result" => "OK"
            )
        );
    }
    /***************************** */
    function guardar_equipo($POST)
    {
        $query = $this->mbd->prepare("INSERT INTO tbl_equipos(descripcion, stock, usuario, marca_baja) VALUES(:descripcion, :stock, 1, 0);");
        $query->bindParam(":descripcion", $POST['descripcion']);
        $query->bindParam(":stock", $POST['stock']);
        $query->execute();

        return json_encode(
            array(
                "Result" => "OK"
            )
        );
    }
    function lista_equipos()
    {
        $query = $this->mbd->prepare("SELECT * FROM tbl_equipos WHERE marca_baja = 0;");
        $query->execute();
        $values = array();
        while ($res = $query->fetch(PDO::FETCH_ASSOC)) {
            $values[] = $res;
        }
        return json_encode($values);
    }
    function editar_equipo($id)
    {
        $query = $this->mbd->prepare("SELECT * FROM tbl_equipos WHERE id = :id;");
        $query->bindParam(":id", $id);
        $query->execute();
        return json_encode($query->fetch(PDO::FETCH_ASSOC));
    }
    function actualizar_equipo($POST)
    {
        $query = $this->mbd->prepare("UPDATE tbl_equipos SET descripcion = :descripcion, stock = :stock WHERE id = :id");
        $query->bindParam(":descripcion", $POST['descripcion']);
        $query->bindParam(":stock", $POST['stock']);
        $query->bindParam(":id", $POST['id']);
        $query->execute();
        return json_encode(
            array(
                "Result" => "OK"
            )
        );
    }
    function eliminar_equipo($id){
        $query = $this->mbd->prepare("UPDATE tbl_equipos SET marca_baja = 1 WHERE id = :id");
        $query->bindParam(":id", $id);
        $query->execute();
        return json_encode(
            array(
                "Result" => "OK"
            )
        );
    }
    /***************************** */
    function guardar_material($POST)
    {
        $query = $this->mbd->prepare("INSERT INTO tbl_materiales(descripcion, stock, usuario, marca_baja) VALUES(:descripcion, :stock, 1, 0);");
        $query->bindParam(":descripcion", $POST['descripcion']);
        $query->bindParam(":stock", $POST['stock']);
        $query->execute();

        return json_encode(
            array(
                "Result" => "OK"
            )
        );
    }
    function lista_materiales()
    {
        $query = $this->mbd->prepare("SELECT * FROM tbl_materiales WHERE marca_baja = 0;");
        $query->execute();
        $values = array();
        while ($res = $query->fetch(PDO::FETCH_ASSOC)) {
            $values[] = $res;
        }
        return json_encode($values);
    }
    function editar_material($id)
    {
        $query = $this->mbd->prepare("SELECT * FROM tbl_materiales WHERE id = :id;");
        $query->bindParam(":id", $id);
        $query->execute();
        return json_encode($query->fetch(PDO::FETCH_ASSOC));
    }
    function actualizar_material($POST)
    {
        $query = $this->mbd->prepare("UPDATE tbl_materiales SET descripcion = :descripcion, stock = :stock WHERE id = :id");
        $query->bindParam(":descripcion", $POST['descripcion']);
        $query->bindParam(":stock", $POST['stock']);
        $query->bindParam(":id", $POST['id']);
        $query->execute();
        return json_encode(
            array(
                "Result" => "OK"
            )
        );
    }
    function eliminar_material($id){
        $query = $this->mbd->prepare("UPDATE tbl_materiales SET marca_baja = 1 WHERE id = :id");
        $query->bindParam(":id", $id);
        $query->execute();
        return json_encode(
            array(
                "Result" => "OK"
            )
        );
    }
    /***************************** */
    function guardar_herramienta($POST)
    {
        $query = $this->mbd->prepare("INSERT INTO tbl_herramientas(descripcion, stock, usuario, marca_baja) VALUES(:descripcion, :stock, 1, 0);");
        $query->bindParam(":descripcion", $POST['descripcion']);
        $query->bindParam(":stock", $POST['stock']);
        $query->execute();

        return json_encode(
            array(
                "Result" => "OK"
            )
        );
    }
    function lista_herramientas()
    {
        $query = $this->mbd->prepare("SELECT * FROM tbl_herramientas WHERE marca_baja = 0;");
        $query->execute();
        $values = array();
        while ($res = $query->fetch(PDO::FETCH_ASSOC)) {
            $values[] = $res;
        }
        return json_encode($values);
    }
    function editar_herramienta($id)
    {
        $query = $this->mbd->prepare("SELECT * FROM tbl_herramientas WHERE id = :id;");
        $query->bindParam(":id", $id);
        $query->execute();
        return json_encode($query->fetch(PDO::FETCH_ASSOC));
    }
    function actualizar_herramienta($POST)
    {
        $query = $this->mbd->prepare("UPDATE tbl_herramientas SET descripcion = :descripcion, stock = :stock WHERE id = :id");
        $query->bindParam(":descripcion", $POST['descripcion']);
        $query->bindParam(":stock", $POST['stock']);
        $query->bindParam(":id", $POST['id']);
        $query->execute();
        return json_encode(
            array(
                "Result" => "OK"
            )
        );
    }
    function eliminar_herramienta($id){
        $query = $this->mbd->prepare("UPDATE tbl_herramientas SET marca_baja = 1 WHERE id = :id");
        $query->bindParam(":id", $id);
        $query->execute();
        return json_encode(
            array(
                "Result" => "OK"
            )
        );
    }
    /***************************** */
    function guardar_puesto($POST)
    {
        $query = $this->mbd->prepare("INSERT INTO tbl_puestos(descripcion, usuario, marca_baja) VALUES(:descripcion, 1, 0);");
        $query->bindParam(":descripcion", $POST['descripcion']);
        $query->execute();

        return json_encode(
            array(
                "Result" => "OK"
            )
        );
    }
    function lista_puestos()
    {
        $query = $this->mbd->prepare("SELECT * FROM tbl_puestos WHERE marca_baja = 0;");
        $query->execute();
        $values = array();
        while ($res = $query->fetch(PDO::FETCH_ASSOC)) {
            $values[] = $res;
        }
        return json_encode($values);
    }
    function editar_puesto($id)
    {
        $query = $this->mbd->prepare("SELECT * FROM tbl_puestos WHERE id = :id;");
        $query->bindParam(":id", $id);
        $query->execute();
        return json_encode($query->fetch(PDO::FETCH_ASSOC));
    }
    function actualizar_puesto($POST)
    {
        $query = $this->mbd->prepare("UPDATE tbl_puestos SET descripcion = :descripcion WHERE id = :id");
        $query->bindParam(":descripcion", $POST['descripcion']);
        $query->bindParam(":id", $POST['id']);
        $query->execute();
        return json_encode(
            array(
                "Result" => "OK"
            )
        );
    }
    function eliminar_puesto($id){
        $query = $this->mbd->prepare("UPDATE tbl_puestos SET marca_baja = 1 WHERE id = :id");
        $query->bindParam(":id", $id);
        $query->execute();
        return json_encode(
            array(
                "Result" => "OK"
            )
        );
    }
    /***************************** */
    function guardar_personal($POST)
    {
        $query = $this->mbd->prepare("INSERT INTO tbl_personal(nombres, id_puesto, celular, correo, usuario, marca_baja) VALUES(:nombres, :id_puesto, :celular, :correo, 1, 0);");
        $query->bindParam(":nombres", $POST['nombres']);
        $query->bindParam(":id_puesto", $POST['id_puesto']);
        $query->bindParam(":celular", $POST['celular']);
        $query->bindParam(":correo", $POST['correo']);
        $query->execute();

        return json_encode(
            array(
                "Result" => "OK"
            )
        );
    }
    function lista_personal()
    {
        $query = $this->mbd->prepare("SELECT p.*, pp.descripcion as puesto FROM tbl_personal AS p left join tbl_puestos AS pp ON p.id_puesto = pp.id WHERE p.marca_baja = 0;");
        $query->execute();
        $values = array();
        while ($res = $query->fetch(PDO::FETCH_ASSOC)) {
            $values[] = $res;
        }
        return json_encode($values);
    }
    function editar_personal($id)
    {
        $query = $this->mbd->prepare("SELECT * FROM tbl_personal WHERE id = :id;");
        $query->bindParam(":id", $id);
        $query->execute();
        return json_encode($query->fetch(PDO::FETCH_ASSOC));
    }
    function actualizar_personal($POST)
    {
        $query = $this->mbd->prepare("UPDATE tbl_personal SET nombres = :nombres, id_puesto = :id_puesto, celular = :celular, correo = :correo WHERE id = :id");
        $query->bindParam(":nombres", $POST['nombres']);
        $query->bindParam(":id_puesto", $POST['id_puesto']);
        $query->bindParam(":celular", $POST['celular']);
        $query->bindParam(":correo", $POST['correo']);
        $query->bindParam(":id", $POST['id']);
        $query->execute();
        return json_encode(
            array(
                "Result" => "OK"
            )
        );
    }
    function eliminar_personal($id){
        $query = $this->mbd->prepare("UPDATE tbl_personal SET marca_baja = 1 WHERE id = :id");
        $query->bindParam(":id", $id);
        $query->execute();
        return json_encode(
            array(
                "Result" => "OK"
            )
        );
    }
    function lista_movimientos_epp(){
        $query = $this->mbd->prepare("SELECT m.*, p.nombres, tm.descripcion as tipo_movimiento, e.descripcion as epp, tm.factor from tbl_movimientos_epps AS m join tbl_epp AS e on m.id_epp = e.id JOIN tbl_tipos_movimientos as tm on m.id_tipo_movimiento = tm.id JOIN tbl_personal p ON m.id_personal = p.id WHERE e.marca_baja = 0;");
        $query->execute();
        $values = array();
        while ($res = $query->fetch(PDO::FETCH_ASSOC)) {
            $values[] = $res;
        }
        return json_encode($values);
    }
    function guardar_movimiento_epp($POST){
        $query = $this->mbd->prepare("INSERT INTO tbl_movimientos_epps(id_epp, fecha, cantidad, id_tipo_movimiento, id_personal, usuario, marca_baja, stock_inicial, stock_final) VALUES (:id_epp, :fecha, :cantidad, :id_tipo_movimiento, :id_personal, 1, 0, (SELECT stock FROM tbl_epp WHERE id = :id_epp), (SELECT stock FROM tbl_epp WHERE id = :id_epp) + (:cantidad * (SELECT factor FROM tbl_tipos_movimientos WHERE id = :id_tipo_movimiento)))");
        $query->bindParam(":id_epp", $POST['id_epp']);
        $query->bindParam(":fecha", $POST['fecha']);
        $query->bindParam(":cantidad", $POST['cantidad']);
        $query->bindParam(":id_tipo_movimiento", $POST['id_tipo_movimiento']);
        $query->bindParam(":id_personal", $POST['id_personal']);
        $query->execute();

        $query = $this->mbd->prepare("UPDATE tbl_epp SET stock = stock + (:cantidad * (SELECT factor FROM tbl_tipos_movimientos WHERE id = :id_tipo_movimiento)) WHERE id = :id");
        $query->bindParam(":id", $POST['id_epp']);
        $query->bindParam(":cantidad", $POST['cantidad']);
        $query->bindParam(":id_tipo_movimiento", $POST['id_tipo_movimiento']);
        $query->execute();
        return json_encode(
            array(
                "Result" => "OK"
            )
        );
    }
    function lista_tipos_movimientos() {
        $query = $this->mbd->prepare("SELECT * FROM tbl_tipos_movimientos;");
        $query->execute();
        $values = array();
        while ($res = $query->fetch(PDO::FETCH_ASSOC)) {
            $values[] = $res;
        }
        return json_encode($values);
    }
    function lista_movimientos_equipos(){
        $query = $this->mbd->prepare("SELECT m.*, p.nombres, tm.descripcion as tipo_movimiento, e.descripcion as equipo from tbl_movimientos_equipos AS m join tbl_equipos AS e on m.id_equipo = e.id JOIN tbl_tipos_movimientos as tm on m.id_tipo_movimiento = tm.id JOIN tbl_personal p ON m.id_personal = p.id WHERE e.marca_baja = 0;");
        $query->execute();
        $values = array();
        while ($res = $query->fetch(PDO::FETCH_ASSOC)) {
            $values[] = $res;
        }
        return json_encode($values);
    }
    function guardar_movimiento_equipos($POST){
        $query = $this->mbd->prepare("INSERT INTO tbl_movimientos_equipos(id_equipo, fecha, cantidad, id_tipo_movimiento, id_personal, usuario, marca_baja, stock_inicial, stock_final) VALUES (:id_equipo, :fecha, :cantidad, :id_tipo_movimiento, :id_personal, 1, 0, (SELECT stock FROM tbl_equipos WHERE id = :id_equipo), (SELECT stock FROM tbl_equipos WHERE id = :id_equipo) + (:cantidad * (SELECT factor FROM tbl_tipos_movimientos WHERE id = :id_tipo_movimiento)))");
        $query->bindParam(":id_equipo", $POST['id_equipo']);
        $query->bindParam(":fecha", $POST['fecha']);
        $query->bindParam(":cantidad", $POST['cantidad']);
        $query->bindParam(":id_tipo_movimiento", $POST['id_tipo_movimiento']);
        $query->bindParam(":id_personal", $POST['id_personal']);
        $query->execute();

        $query = $this->mbd->prepare("UPDATE tbl_equipos SET stock = stock + (:cantidad * (SELECT factor FROM tbl_tipos_movimientos WHERE id = :id_tipo_movimiento)) WHERE id = :id");
        $query->bindParam(":id", $POST['id_equipo']);
        $query->bindParam(":cantidad", $POST['cantidad']);
        $query->bindParam(":id_tipo_movimiento", $POST['id_tipo_movimiento']);
        $query->execute();
        return json_encode(
            array(
                "Result" => "OK"
            )
        );
    }
    function lista_movimientos_materiales(){
        $query = $this->mbd->prepare("SELECT m.*, p.nombres, tm.descripcion as tipo_movimiento, e.descripcion as material from tbl_movimientos_materiales AS m join tbl_materiales AS e on m.id_material = e.id JOIN tbl_tipos_movimientos as tm on m.id_tipo_movimiento = tm.id JOIN tbl_personal p ON m.id_personal = p.id WHERE e.marca_baja = 0;");
        $query->execute();
        $values = array();
        while ($res = $query->fetch(PDO::FETCH_ASSOC)) {
            $values[] = $res;
        }
        return json_encode($values);
    }
    function guardar_movimiento_materiales($POST){
        $query = $this->mbd->prepare("INSERT INTO tbl_movimientos_materiales(id_material, fecha, cantidad, id_tipo_movimiento, id_personal, usuario, marca_baja, stock_inicial, stock_final) VALUES (:id_material, :fecha, :cantidad, :id_tipo_movimiento, :id_personal, 1, 0, (SELECT stock FROM tbl_materiales WHERE id = :id_material), (SELECT stock FROM tbl_materiales WHERE id = :id_material) + (:cantidad * (SELECT factor FROM tbl_tipos_movimientos WHERE id = :id_tipo_movimiento)))");
        $query->bindParam(":id_material", $POST['id_material']);
        $query->bindParam(":fecha", $POST['fecha']);
        $query->bindParam(":cantidad", $POST['cantidad']);
        $query->bindParam(":id_tipo_movimiento", $POST['id_tipo_movimiento']);
        $query->bindParam(":id_personal", $POST['id_personal']);
        $query->execute();

        $query = $this->mbd->prepare("UPDATE tbl_materiales SET stock = stock + (:cantidad * (SELECT factor FROM tbl_tipos_movimientos WHERE id = :id_tipo_movimiento)) WHERE id = :id");
        $query->bindParam(":id", $POST['id_material']);
        $query->bindParam(":cantidad", $POST['cantidad']);
        $query->bindParam(":id_tipo_movimiento", $POST['id_tipo_movimiento']);
        $query->execute();
        return json_encode(
            array(
                "Result" => "OK"
            )
        );
    }

    function lista_movimientos_herramientas(){
        $query = $this->mbd->prepare("SELECT m.*, p.nombres, tm.descripcion as tipo_movimiento, e.descripcion as herramienta from tbl_movimientos_herramientas AS m join tbl_herramientas AS e on m.id_herramienta = e.id JOIN tbl_tipos_movimientos as tm on m.id_tipo_movimiento = tm.id JOIN tbl_personal p ON m.id_personal = p.id WHERE e.marca_baja = 0;");
        $query->execute();
        $values = array();
        while ($res = $query->fetch(PDO::FETCH_ASSOC)) {
            $values[] = $res;
        }
        return json_encode($values);
    }
    function guardar_movimiento_herramientas($POST){
        $query = $this->mbd->prepare("INSERT INTO tbl_movimientos_herramientas(id_herramienta, fecha, cantidad, id_tipo_movimiento, id_personal, usuario, marca_baja, stock_inicial, stock_final) VALUES (:id_herramienta, :fecha, :cantidad, :id_tipo_movimiento, :id_personal, 1, 0, (SELECT stock FROM tbl_herramientas WHERE id = :id_herramienta), (SELECT stock FROM tbl_herramientas WHERE id = :id_herramienta) + (:cantidad * (SELECT factor FROM tbl_tipos_movimientos WHERE id = :id_tipo_movimiento)))");
        $query->bindParam(":id_herramienta", $POST['id_herramienta']);
        $query->bindParam(":fecha", $POST['fecha']);
        $query->bindParam(":cantidad", $POST['cantidad']);
        $query->bindParam(":id_tipo_movimiento", $POST['id_tipo_movimiento']);
        $query->bindParam(":id_personal", $POST['id_personal']);
        $query->execute();

        $query = $this->mbd->prepare("UPDATE tbl_herramientas SET stock = stock + (:cantidad * (SELECT factor FROM tbl_tipos_movimientos WHERE id = :id_tipo_movimiento)) WHERE id = :id");
        $query->bindParam(":id", $POST['id_herramienta']);
        $query->bindParam(":cantidad", $POST['cantidad']);
        $query->bindParam(":id_tipo_movimiento", $POST['id_tipo_movimiento']);
        $query->execute();
        return json_encode(
            array(
                "Result" => "OK"
            )
        );
    }
}
