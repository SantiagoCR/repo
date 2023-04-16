<?php
// include_once("\proyecto_uno\models\conexion_mysql_pdo.php");
// include_once $_SERVER['DOCUMENT_ROOT'] . "/models/conexion_base.php";
//include_once "../models/conexion_base.php";



echo $_SERVER["REQUEST_METHOD"];
echo '<pre>';
print_r($_POST);
//die();
echo guardar_base();

function guardar_base()
{
    include_once "../models/conexion_mysql_pdo.php";
    $nombre = $_POST["nombre"];
    $direccion = $_POST["direccion"];
    $fecha = $_POST["fecha_nacimiento"];
    $telf = $_POST["telf"];

    $sentencia = $base_de_datos->prepare("INSERT INTO cliente(nombre, direccion, telf, fecha_nacimiento) VALUES (?, ?, ?, ?);");
    $resultado = $sentencia->execute([$nombre, $direccion, $telf, $fecha]);

    if($resultado === TRUE){
        header("Location: ../views/Cliente/mostrar.php");
        exit;
    }
    else echo "Algo salió mal. Por favor verifica que la tabla exista";    

}
    

?>