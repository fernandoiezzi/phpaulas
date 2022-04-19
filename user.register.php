<?php
  require_once("config/config.php");

 $service = new UsuarioService(); 

 $nome = filter_input(INPUT_POST, 'inputName', FILTER_SANITIZE_SPECIAL_CHARS);
 $email = filter_input(INPUT_POST, 'inputEmail', FILTER_SANITIZE_SPECIAL_CHARS);
 $senha = filter_input(INPUT_POST, 'inputSenha', FILTER_SANITIZE_SPECIAL_CHARS);

 $usuario = new Usuario();
 $usuario->setNome($nome);
 $usuario->setEmail($email);
 $usuario->setSenha($senha);

 $service->cadastrar($usuario);

 if($service->cadastrar($usuario)){
     echo "cadastrado com sucesso";
 }else{
    echo "Falha no cadastro";
 }

    