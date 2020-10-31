<?php
require_once 'Db.php';
class Postagem extends Db{
    protected $idPostagem;
    protected $idUsuario;
    protected $conteudoTexto;
    protected $conteudoFoto;
    protected $privacidade;
    protected $dataPublicacao;
    public function __construct($texto,$privacidade)
    {
        $this->conteudoTexto = $texto;
        $this->privacidade=$privacidade;
    }
 

//PUBLICAR POSTAGENS
    protected function publicarPost(){
        $conexao = self::conectar();
        $sql = "INSERT INTO postagem(conteudoTexto, conteudoImagem, privacidade,usuario_idusuario) VALUES (:conteudoTexto,:conteudoImagem,:privacidade,:autor)";
        $autor = 3;
        $stmt = $conexao->prepare($sql);
        $stmt ->bindParam(':conteudoTexto',$this->conteudoTexto);
        $stmt ->bindParam(':conteudoImagem',$this->conteudoFoto);
        $stmt ->bindParam(':privacidade',$this->privacidade);
        $stmt ->bindParam(':autor',$autor);
        if($stmt->execute()){
            //echo 'Inserido com Sucesso';
        }else{
            //echo "A insersao falhou";
        };
    }

//CARREGAR UNICO POST
    protected function caregarUmPost($idPostagem){
        $conexao = self::conectar();
        $sql = "SELECT * FROM postagem WHERE idpostagem = :id";
        $stmt = $conexao->prepare($sql);
        $stmt ->bindParam(':id', $idPostagem);
        $stmt->execute();
        $stmt->setFetchMode(PDO::FETCH_ASSOC);
        $postagem = $stmt ->fetch();
        return $postagem;
    }
//CAREGAR TODAS POSTAGENS
protected static function caregarTodosPost(){
    $conexao = self::conectar();
    $sql = "SELECT p.*, u.nomeProprio, u.apelido, u.nomeUsuario from postagem as p inner join usuario as u on p.usuario_idusuario = u.idusuario ORDER BY idpostagem DESC";
    $stmt = $conexao->prepare($sql);
    $stmt->execute();
    $stmt->setFetchMode(PDO::FETCH_ASSOC);
    $postagem = $stmt ->fetchAll();
    return $postagem;
}


//ACTUALIZAR POSTAGEM



//APAGAR POSTAGEM

}