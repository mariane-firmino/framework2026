<?php
class Paginas extends Controller{
    public function index(){
        $dados = ['titulo'=>"Página Inicial", 'descricao'=>"Aula de PW com 3º matutino"];
        $this->view('paginas/home', $dados);
    } // fim da funçao index
    public function sobre(){
        $dados = ['titulo'=>"Página sobre nós", 'descricao'=>"Aqui você encontra as melhores noticias mais confiaveis..."];
        $this->view('paginas/sobre', $dados);
    } // fim da funçao sobre
    public function contato(){
        $dados = ['titulo'=>"Página contato", 'descricao'=>"Aqui você encontra os contatos"];
        $this->view('paginas/contato', $dados);
    } // fim da funçao contato
}// fim da classe Paginas
?>