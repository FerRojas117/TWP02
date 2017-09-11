<?php
	class Persona
	{
		public $nombre;
		public $genero;
		private $edad;
		private $telefono;
		protected $correo;
		private $password;
		protected $direc;

		function visualizarEdad()
		{
			return $this->edad;
		}

		function visualizarGenero()
		{
			return $this->genero;
		}

		function visualizarTelefono()
		{
			return $this->telefono;
		}

		function __construct($nombre, $genero, $edad, $telefono, $correo, $password, $direc){
			$this->nombre = $nombre;
			$this->genero = $genero;
			$this->edad = $edad;
			$this->telefono = $telefono;
			$this->correo = $correo;
			$this->password = $password;
			$this->direc = $direc;
		}
	}

	$CecilElLeon = new Persona("Cecil", "Maricon", 50, 22222, "cecil_maricon@hotmail.com", "cecilio", "no se");
	echo $CecilElLeon->visualizarEdad();
	echo $CecilElLeon->visualizarGenero();
	echo $CecilElLeon->visualizarTelefono();
?>