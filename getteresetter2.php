<?php   
class Videogame {
    private $marca = null;
    private $modelo = null;

    public function __get($atributo) {
        return $this->$atributo;
    }

    public function __set($atributo, $valor) {
        $this->$atributo = $valor;
    }
}

$videogame = new Videogame();
$videogame->marca = "Sony"; // Utiliza o setter mágico
$marcaVideogame = $videogame->marca; // Utiliza o getter mágico
$videogame->modelo = "Playstation 4"; // Utiliza o setter mágico
$modeloVideogame = $videogame->modelo; // Utiliza o getter mágico
echo $marcaVideogame . ' ' . $modeloVideogame;

?>