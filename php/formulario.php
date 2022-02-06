<?php

// Clase Persona a la cual se le asignaran a sus atributos los valores ingresados desde el formulario,
// para luego visualizar cada uno de ellos

class Auto{

    //atributos
    private $matricula;
    private $motor;
    private $chasis;
    private $marca;
    private $modelo;
    private $ano;
    private $color;
    private $precio;

    //Metodo "set"
    public function setMatricula($matricula) {
        $this->matricula = $matricula;
    }
    public function setMotor($motor) {
        $this->motor = $motor;
    }
    public function setChasis($chasis) {
        $this->chasis = $chasis;
    }
    public function setMarca($marca) {
        $this->marca = $marca;
    }
    public function setModelo($modelo) {
        $this->modelo = $modelo;
    }
    public function setAno($ano) {
        $this->ano = $ano;
    }
    public function setColor($color) {
        $this->color = $color;
    }
    public function setPrecio($precio) {
        $this->precio = $precio;
    }

    //Metodo "get"
    public function getMatricula() {
        return $this->matricula;
    }
    public function getMotor() {
        return $this->motor;
    }
    public function getChasis() {
        return $this->chasis;
    }
    public function getMarca() {
        return $this->marca;
    }
    public function getModelo() {
        return $this->modelo;
    }
    public function getAno() {
        return $this->ano;
    }
    public function getColor() {
        return $this->color;
    }
    public function getPrecio() {
        return $this->precio;
    }

}

//recuperando los datos del formulario enviados con el metodo post
//usando la variable $_POST['campo']

$matricula=$_POST["matricula"];
$motor=$_POST["motor"];
$chasis=$_POST["chasis"];
$marca=$_POST["marca"];
$modelo=$_POST["modelo"];
$ano=$_POST["ano"];
$color=$_POST["color"];
$precio=$_POST["precio"];

//creando un objeto de tipo Persona
$objetoAuto = new Auto();

//asignando o seteando valores a los atributos de objetoAuto
$objetoAuto->setMatricula($matricula);
$objetoAuto->setMotor($motor);
$objetoAuto->setChasis($chasis);
$objetoAuto->setMarca($marca);
$objetoAuto->setModelo($modelo);
$objetoAuto->setAno($ano);
$objetoAuto->setColor($color);
$objetoAuto->setPrecio($precio);

//Visualizando los valores asignados o seteados a los atributos de objetoAuto
echo "<b>Datos Ingresados</b><br/></b><br/>";
echo "Matricula: " . $objetoAuto->getMatricula() . "<br/>";
echo "N° de Motor: " . $objetoAuto->getMotor() . "<br/>";
echo "N° de Chasis: " . $objetoAuto->getChasis() . "<br/>";
echo "Marca: " . $objetoAuto->getMarca() . "<br/>";
echo "Modelo: " . $objetoAuto->getModelo() . "<br/>";
echo "Año: " . $objetoAuto->getAno() . "<br/>";
echo "Color: " . $objetoAuto->getColor() . "<br/>";
echo "Precio: " . $objetoAuto->getPrecio() . "<br/>";


?>