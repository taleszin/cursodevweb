<?php 
    //modelo
    // a partir do modelo podemos instanciar um objeto (por exemplo, podemos ter uma classe carro, e a partir dela instanciar o objeto "Corolla" )
class Funcionario{ // sempre primeira letra em maiusculo
    //atributos
    public $nome = null;
    public $telefone = null;
    public $numFilhos = null;
    //getters e setters
    function setNome($nome){ //variavel diferente, apesar  do mesmo nome la de cima
        $this->nome = $nome;
    }
    function setNumFilhos($numFilhos){ //modifica    //variavel diferente, apesar  do mesmo nome la de cima
        $this->nome = $nome;
    }
    function getNome(){
        return $this->nome;
    }
    function getNumFilhos(){ //acessa
        return $this-> numFilhos;
    }

    //métodos
    function resumirCadFunc(){
        return "$this->nome $this->telefone $this->numFilhos"; // acessando os valores das variáveis do objeto. 

    }
    function modificarNumFilhos($numFilhos){
        //afetar um atributo do objeto
       /*variável do contexto do objeto -> */ $this->numFilhos = $numFilhos; // <- variável do contexto do método
    }
}
$y = new Funcionario();
echo $y -> resumirCadFunc(); //essa setinha acessa atributos e métodos do objeto.
$y-> modificarNumFilhos(3);
echo $y -> resumirCadFunc();
?>