<h1>REGISTRO DE MAESTROS</h1>

<form method="post">
	
	<input type="text" placeholder="Numero Empleado" name="empleado" required>
	<input type="text" placeholder="Nombre" name="nombre" required>
	<input type="text" placeholder="Apellido" name="apellido" required>
	<input type="text" placeholder="Carrera" name="carrera" required>
	<input type="text" placeholder="Email" name="email" required>

	<input type="submit" class="btn btn-secondary" value="Enviar">

</form>

<?php

$registro = new MvcController();
$registro -> registroMaestrosController();//utiliza la el metodo de la clase MvcController de controller/controller.php

if(isset($_GET["action"])){

	if($_GET["action"] == "ok"){

		echo "Registro Exitoso";
	
	}

}

?>
