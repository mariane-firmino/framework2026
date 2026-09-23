<?php
class Usuario{
    private $db;

    public function __construct(){
        $this->db = new Database();
    } // fim do constructor

    public function armazenar($dados){
        $this->db->query("INSERT INTO usuarios(usua_nome, usua_email, usua_senha) VALUES (:nome, :email, :senha)");
        $this->db->bind(":nome", $dados['nome']);
        $this->db->bind(":email", $dados['email']);
        $this->db->bind(":senha", $dados['senha']);
        if($this->db->executa()):
            return true;
        else:
            return false;
        endif;
    }// fim da função armazenar

    public function checarEmail($email){
        $this->db->query("SELECT usua_email FROM usuarios WHERE usua_email = :e");
        $this->db->bind(":e", $email);
        if($this->db->resultado()):
            return true;
        else:
            return false;
        endif;
    } // fim da função checar email

    public function checarLogin($email, $senha) {
        $this->db->query("SELECT * FROM usuarios WHERE usua_email = :e");
        $this->db->bind(":e", $email);
        if($this->db->resultado()):
            $resultado = $this->db->resultado();
            if(password_verify($senha, $resultado->usua_senha)):
                return $resultado;
            else:
                return false;
            endif;
        else:
            return false;
        endif;
    }

    public function lerUsuarioPorId($id) {
        $this->db->query("SELECT * FROM usuarios WHERE usua_id = :id");
        $this->db->bind("id", $id);
        return $this->db->resultados();
    } // fim da função lerUsuarioPorId
}