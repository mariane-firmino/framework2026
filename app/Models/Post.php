<?php

class Post {
    private $db;

    public function __construct() {
        $this->db = new Database();
    } // fim do construtor

    public function armazenar($dados){
        $this->db->query("INSERT INTO post(usua_id, post_titulo, post_texto) VALUES (:usuario, :titulo, :texto)");
        $this->db->bind('usuario', $dados['usuario_id']);
        $this->db->bind('titulo', $dados['titulo']);
        $this->db->bind('texto', $dados['texto']);
        if($this->db->executa()):
            return true;
        else:
            return false;
        endif;
    }

    public function lerPosts() {
        $this->db->query("SELECT *, 
            p.post_id AS postID, 
            p.post_criado_em AS postDataCadastro, 
            u.usua_id AS usuarioID,
            u.usua_criado_em AS usuarioDataCadastro 
        FROM post p
        INNER JOIN usuarios u ON p.usua_id = u.usua_id
        ORDER BY p.post_id DESC");
    }

    public function lerPostPorId ($id) {
        $this->db->query("SELECT * FROM post WHERE id = :id");
        $this->db->bind('id', $id);
        return $this->db->resultado();
    }
} // fim da classe post