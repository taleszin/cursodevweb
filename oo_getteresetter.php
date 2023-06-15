<?php
class Carro {
    private $marca;
    private $modelo;

    function getMarca() {
        return $this->marca; // Retorna o valor do atributo $marca
    }

    function setMarca($marca) {
        $this->marca = $marca; // Atribui um novo valor ao atributo $marca
    }

    function getModelo() {
        return $this->modelo; // Retorna o valor do atributo $modelo
    }

    function setModelo($modelo) {
        $this->modelo = $modelo; // Atribui um novo valor ao atributo $modelo
    }
}

$carro = new Carro();
$carro->setMarca("Toyota");
$carro->setModelo("Corolla");
$modeloCarro = $carro->getModelo();
$marcaCarro = $carro->getMarca();
echo $marcaCarro . ' ' . $modeloCarro;
?>
