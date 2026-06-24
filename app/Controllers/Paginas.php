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
}// fim da classe Paginas
?>