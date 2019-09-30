<?php
    //NO SE QUE TENGO MAL PERO NO ME MUESTRA POR PANTALLA LOS DATOS
    class Persona{
        //propiedades
        private $nombre = "";
        private $apellido = "";
        private $dni = "";

        //Metodo constructor
        public function __construct($nombre, $apellido, $dni){
            $this->nombre = $nombre;
            $this->apellido = $apellido;
            $this->dni = $dni;
        }

        //Getters y setters
        public function setNombre($nombre){
            $this->nombre = $nombre;
        }
        public function setApellido($apellido){
            $this->apellido = $apellido;
        }
        public function setDni($dni){
            $this->dni = $dni;
        }

        public function getNombre(){
            echo $this->nombre;
        }
        public function getApellido(){
            echo $this->apellido;
        }
        public function getDni(){
            echo $this->dni;
        }

        //método que devuelve el nombre completo de la persona
        public function mostrarDatos(){
            echo(get_class($this).": ".$this->getNombre()." ".$this->getApellido());
        }
    }

    class User extends Persona{
        //atributo de la clase user
        private $puntos = rand(1,200);

        //Getters y Setters
        public function setPuntos($puntos) {
            $this->puntos = $puntos;
        }
        public function getPuntos() {
            echo $this->puntos;
        }

        //sobreescribe el método que devuelve el nombre completo de la persona
        trait mostrarDatos(){
            echo(get_class($this).": ".$this->getNombre()." ".$this->getApellido());
        }

        //Metodo que indique un mensaje si el usuario tiene menos de 100 puntos.
        public function Puntos() {
            if ($this->puntos < 100)
                echo "Tienes menos de 100 puntos";
            else 
                echo "Tienes 100 o mas puntos";
        }
    }
?>
<html>
	<head>
		<title>10. Ejercicio</title>
	</head>
	<body>
       <?php
            $jon = new Persona("Jon", "Valdes", "74141414J");

            echo $jon->mostrarDatos();

       ?>
	</body>
</html>