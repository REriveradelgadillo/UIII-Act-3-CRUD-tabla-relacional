<?php

#Salir si alguno de los datos no está presente
if(
	!isset($_POST["nombre_p"]) || 
	!isset($_POST["marca"]) || 
	!isset($_POST["codigo"]) || 
	!isset($_POST["color"]) || 
	!isset($_POST["categoria"]) || 
	!isset($_POST["precio"]) || 
	!isset($_POST["precio_proveedor"]) || 
	!isset($_POST["tamano"]) || 
	!isset($_POST["existencia"]) || 
	!isset($_POST["id"])
) exit();

#Si todo va bien, se ejecuta esta parte del código...

include_once "base_de_datos.php";
$id = $_POST["id"];
$nombre_p = $_POST["nombre_p"];
$marca = $_POST["marca"];
$codigo = $_POST["codigo"];
$color = $_POST["color"];
$categoria = $_POST["categoria"];
$precio = $_POST["precio"];
$precio_proveedor = $_POST["precio_proveedor"];
$tamano = $_POST["tamano"];
$existencia = $_POST["existencia"];

$sentencia = $base_de_datos->prepare("UPDATE productos SET nombre_p = ?, marca = ?, codigo = ?, color = ?, categoria = ?, precio = ?, precio_proveedor = ?, tamano = ?, existencia = ? WHERE id = ?;");
$resultado = $sentencia->execute([$nombre_p, $marca, $codigo, $color, $categoria, $precio, $precio_proveedor, $tamano, $existencia, $id]);

if($resultado === TRUE){
	header("Location: ./listar.php");
	exit;
}
else echo "Algo salió mal. Por favor verifica que la tabla exista, así como el ID del producto";
?>