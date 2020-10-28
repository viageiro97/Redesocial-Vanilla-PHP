
<?php
    include_once './model/Postagem.php';

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
            //Verificar se ambos estao vazio ambos, Antes de Inserir
            if(empty($this->conteudoTexto) && empty($this->conteudoFoto)){
                $_SESSION["postvazio"] = "Insira pelo menos um texto ou carregue uma foto para publicar seu post!";
            }else{
            require_once './utils/Upload.php';
            $upload = new Upload($this->foto,"./assets/img/feedimages/");
            $upload ->fazerUpload();
            $this->conteudoFoto = $upload->caminhoImagem();
            $this->publicarPost();
        }
    }
}