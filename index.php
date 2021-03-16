<?php

    require_once("config.php");

    //Carrega um usuário
    //$root = new Usuario();
    //$root->loadbyId(3);
    //echo $root;
    
    //Carrega uma lista de usuários
    $lista = Usuario::getList(); 

    echo json_encode($lista);

?>