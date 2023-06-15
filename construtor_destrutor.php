<?php 
class Pessoa{
    public $nome = null; // Atributo público 'nome' inicializado como nulo

    function __construct($nome){
        echo ("objeto iniciado"); // Exibe mensagem ao iniciar o objeto
        $this->nome = $nome; // Atribui o valor do parâmetro $nome ao atributo 'nome'
    }
    
    function __destruct(){
        echo 'Objeto removido'; // Exibe mensagem ao remover o objeto
    }
    
    function __get($atributo){
        return $this->$atributo; // Retorna o valor do atributo solicitado
    }
    
    function correr(){
        return $this->nome . ' está correndo'; 
    }
}
$pessoa = new Pessoa('Tales'); // Cria uma nova instância da classe Pessoa com o nome 'Tales'
echo '<br>' .  $pessoa->__get('nome'); // Exibe o valor do atributo 'nome' usando o método mágico __get
echo '<br>' .  $pessoa->correr(); // Chama o método 'correr' e exibe a frase resultante
echo '<br>';
?>