<?php 
    //modelo
    // a partir do modelo podemos instanciar um objeto
class Funcionario{ // sempre primeira letra em maiusculo
    //atributos
    public $nome = "jose";
    public $telefone = "2135613621";
    public $numFilhos = 2;

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