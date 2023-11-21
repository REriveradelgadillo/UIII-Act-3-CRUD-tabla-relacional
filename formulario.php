<?php include_once "encabezado.php" ?>

<div class="col-xs-12">
	<h1>Nuevo producto</h1>
	<form method="post" action="nuevo.php">
		<label for="nombre_p">Nombre del producto:</label>
		<input class="form-control" name="nombre_p" required type="text" id="nombre_p" placeholder="Escribe el nombre">

		<label for="marca">Marca:</label>
		<input class="form-control" name="marca" required type="text" id="marca" placeholder="marca">

		<label for="codigo">Codigo:</label>
		<input class="form-control" name="codigo" required type="number" id="codigo" placeholder="codigo">

		<label for="color">Color:</label>
		<input class="form-control" name="color" required type="text" id="color" placeholder="color">

		<label for="categoria">Categoria:</label>
		<input class="form-control" name="categoria" required type="text" id="categoria" placeholder="categoria">

		<label for="precio">Precio:</label>
		<input class="form-control" name="precio" required type="number" id="precio" placeholder="precio">

		<label for="precio_proveedor">Precio del proveedor:</label>
		<input class="form-control" name="precio_proveedor" required type="number" id="precio_proveedor" placeholder="precio del proveedor">

		<label for="tamano">Tamaño:</label>
		<input class="form-control" name="tamano" required type="text" id="tamano" placeholder="tamaño">

		<label for="existencia">Existencia:</label>
		<input class="form-control" name="existencia" required type="number" id="existencia" placeholder="existencia">
		<br><br><input class="btn btn-info" type="submit" value="Guardar">
	</form>
</div>
<?php include_once "pie.php" ?>