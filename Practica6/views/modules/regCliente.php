<h1>REGISTRO DE CLIENTES</h1>

<form method="post">
	
	<input type="text" placeholder="Nombre" name="Nombre" required>

	<input type="text" placeholder="Apellido" name="Apellido" required>

    <input type="text" placeholder="Tipo Cliente" name="Tipo" required>

	<input type="submit" value="Enviar">

</form>

<?php

$regCliente = new MvcController();
$regCliente-> registroClientesController();//utiliza la el metodo de la clase MvcController de controller/controller.php


if(isset($_GET["action"])){

	if($_GET["action"] == "productos"){

		echo "Registro Exitoso";
	
	}

}

?>
