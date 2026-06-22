<?php
class Paginas extends Controller{
    public function index(){
        $this->view('home');
        
    } // fim da funçao index
    public function sobre($id){
        echo $id.'<hr>';
    } // fim da funçao sobre
}// fim da classe Paginas
?>