
<?php
    include_once '../model/Postagem.php';

//METODOS DO CONTROLLER!----------------------------
    class PostagemController extends Postagem{
        private $foto;
        function __construct($foto,$texto,$privacidade)
        {
            $this->foto = $foto;
            parent::__construct($texto,$privacidade);
        }
        //Carregar Postagens da Base de Dados - Metodp Igual tambem no Model
        public static function carregarTodosPostC(){
            $todasPostagens = self::caregarTodosPost();
            return $todasPostagens;
        }

        //Inserir postagens na Base de dados - Metodo Igual tambem no Model
        public function publicaPostC(){
            $falha = "erro";
            //Verificar se ambos estao vazio ambos, Antes de Inserir
            if(empty($this->conteudoTexto) && $this->foto["size"]==0){
                return $falha;
            }else{
                if(($this->foto["size"] == 0)){
                    $this->conteudoFoto = null;
                    $ultimoid = $this->publicarPost();
                    $ultimopost = $this ->caregarUmPost($ultimoid);
                    return $ultimopost;
                    //return $sucesso;
                }else{
                    require_once '../utils/Upload.php';
                    $upload = new Upload($this->foto,"../assets/img/feedimages/");
                    $upload ->fazerUpload();
                    $this->conteudoFoto = $upload->caminhoImagem();
                    $ultimoid = $this->publicarPost();
                    $ultimopost = $this ->caregarUmPost($ultimoid);
                    return $ultimopost;
                }
            }
    }
}