<?php

class Conexion{

	public function conectar(){
		$Otp = array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES 'utf8'");
		$link = new PDO("mysql:host=localhost;dbname=practica5;port=3307","root","usbw", $Otp);
		
		return $link;

	}

}

?>