<?php
if(!isset($_GET["id"])) exit();
$id = $_GET["id"];
include_once "base_de_datos.php";
$sentencia = $base_de_datos->prepare("SELECT * FROM productos WHERE id = ?;");
$sentencia->execute([$id]);
$producto = $sentencia->fetch(PDO::FETCH_OBJ);
if($producto === FALSE){
	echo "¡No existe algún producto con ese ID!";
	exit();
}

?>
<?php include_once "encabezado.php" ?>
	<div class="col-xs-12">
		<h1>Editar producto con el ID <?php echo $producto->id; ?></h1>
		<form method="post" action="guardarDatosEditados.php">
			<input type="hidden" name="id" value="<?php echo $producto->id; ?>">
	
			<label for="nombre_p">Nombre de producto:</label>
			<input value="<?php echo $producto->nombre_p ?>" class="form-control" name="nombre_p" required type="text" id="nombre_p" placeholder="Escribe el nombre del producto">

			<label for="marca">Marca:</label>
			<input value="<?php echo $producto->marca ?>" class="form-control" name="marca" required type="text" id="marca" placeholder="Escribe la marca">

			<label for="codigo">Codigo:</label>
			<input value="<?php echo $producto->codigo ?>" class="form-control" name="codigo" required type="number" id="codigo" placeholder="Codigo">

			<label for="color">Color:</label>
			<input value="<?php echo $producto->color ?>" class="form-control" name="color" required type="text" id="color" placeholder="Color">

			<label for="categoria">Categoria:</label>
			<input value="<?php echo $producto->categoria ?>" class="form-control" name="categoria" required type="text" id="categoria" placeholder="Categoria">

			<label for="precio">Precio:</label>
			<input value="<?php echo $producto->precio ?>" class="form-control" name="precio" required type="number" id="precio" placeholder="Precio">

			<label for="precio_proveedor">Precio del proveedor:</label>
			<input value="<?php echo $producto->precio_proveedor ?>" class="form-control" name="precio_proveedor" required type="number" id="precio_proveedor" placeholder="Precio del proveedor">

			<label for="tamano">tamaño:</label>
			<input value="<?php echo $producto->tamano ?>" class="form-control" name="tamano" required type="text" id="tamano" placeholder="tamaño">

			<label for="existencia">existencia:</label>
			<input value="<?php echo $producto->existencia ?>" class="form-control" name="existencia" required type="number" id="existencia" placeholder="existencia">

			<br><br><input class="btn btn-info" type="submit" value="Guardar">
			<a class="btn btn-warning" href="./listar.php">Cancelar</a>
		</form>
	</div>
<?php include_once "pie.php" ?>
