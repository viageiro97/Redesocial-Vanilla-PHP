<?php require_once '../controller/PostagemController.php';
session_start();
//Retirar os dados da BD
$post = PostagemController::carregarTodosPostC();
include '../view/feed.php';
/*if(isset($_GET['action'])){
    $opcao = $_GET['action'];
    switch($opcao){
        case 'adicionar':
            $adicionar = new PostagemController($_FILES["foto"],$_POST["conteudoTexto"],$_POST["privacidade"]);
            $adicionar ->publicaPostC();
            $_GET['action']="adicionado";
            //instanciar o controller do adicionar!
        break;
        case 'excluir':
            echo 'excluindo';
        break;
        default:
            include './view/feed.php';
    }
}*/