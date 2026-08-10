<?php
class Usuarios extends Controller{
    public function cadastrar() {
        $formulario = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
        if(isset($formulario)):
            $dados = [
                'nome' => trim($formulario['nome']),
                'email' => trim($formulario['email']),
                'senha' => trim($formulario['senha']),
                'confirma_senha' => trim($formulario['confirma_senha'])
            ];
            var_dump($formulario);
            // verifica se o campo esta vazio com a funcao empty
            if(empty($formulario['nome'])):
                $dados['nome_erro'] = "Preencha o campo nome";
            endif;
            if(empty($formulario['email'])):
                $dados['email_erro'] = "Preencha o campo email";
            endif;
            if(empty($formulario['senha'])):
                $dados['senha_erro'] = "Preencha o campo senha";
                elseif(strlen($formulario['senha']) < 7):
                    $dados['erro_senha'] = "A senha deve ter no minimo 6 caracteres";
            endif;
            if(empty($formulario['confirma_senha'])):
                $dados['confirma_senha_erro'] = "Preencha o campo confirma_senha";
            endif;
            else:
                if($formulario['senha'] != $formulario['confirma_senha']):
                    $dados['confirma_senha_erro'] = "Senhas diferentes";
                endif;
            endif;
        else:
            $dados = [
                'nome' => '',
                'email' => '',
                'senha' => '',
                'confirma_senha' => '',
                'erro_nome' => '',
                'erro_email' => '',
                'erro_senha' => '',
                'confirma_senha_erro' => '',
            ];
        endif;

        $this->view('usuarios/cadastrar');
    }
}

?>