<?php
require_once 'Db.php';
class Postagem extends Db{
    private $idPostagem;
    private $idUsuario;
    private $conteudoTexto;
    private $conteudoFoto;
    private $privacidade;
    private $dataPublicacao;
    public function __construct($id,$autor,$texto,$foto,$privacidade,$data)
    {
        $this->idPostagem = $id;
        $this->idUsuario = $autor;
        $this->conteudoTexto = $texto;
        $this->conteudoFoto = $foto;
        $this->privacidade=$privacidade;
        $this->dataPublicacao = $data;
    }
 

//PUBLICAR POSTAGENS
    public function publicarPost(){
        $conexao = $this->conectar();
        $sql = "INSERT INTO postagem(conteudoTexto, conteudoImagem, privacidade,usuario_idusuario) VALUES (:conteudoTexto,:conteudoImagem,:privacidade,:autor)";
        
        $stmt = $conexao->prepare($sql);
        $stmt ->bindParam(':conteudoTexto',$a);
        $stmt ->bindParam(':conteudoImagem',$b);
        $stmt ->bindParam(':privacidade',$c);
        $stmt ->bindParam(':autor',$d);
        if($stmt->execute()){
            echo 'Inserido com Sucesso';
        }else{
            echo "A insersao falhou";
        };
    }

//CARREGAR UNICO POST
    public function caregarUmPost($idPostagem){
        $conexao = $this->conectar();
        $sql = "SELECT * FROM postagem WHERE idpostagem = :id";
        $stmt = $conexao->prepare($sql);
        $stmt ->bindParam(':id', $idPostagem);
        $stmt->execute();
        $stmt->setFetchMode(PDO::FETCH_ASSOC);
        $postagem = $stmt ->fetch();
        return $postagem;
    }

//CAREGAR TODAS POSTAGENS


//ACTUALIZAR POSTAGEM



//APAGAR POSTAGEM

}