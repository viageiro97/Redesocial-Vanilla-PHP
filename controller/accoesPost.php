<?php
require_once "../controller/PostagemController.php";
//header('content-Type: application/json');
$action= $_POST["action"];
//-------------------------------------------//
    switch($action){
        case 'adicionar':
            $adicionar = new PostagemController($_FILES["foto"],$_POST["conteudoTexto"],$_POST["privacidade"]);
            $res = $adicionar ->publicaPostC();
            echo json_encode($res);
            //instanciar o controller do adicionar!
        break;
        case 'excluir':
            echo 'excluindo';
        break;
        default:
            include './view/feed.php';
    }
