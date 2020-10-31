<?php
class Upload{
    private $ficheiro;
    private $nomeFicheiro;
    private $tipo;
    private $ficheiroTemporario;
    private $erro;
    private $tamanho;
    private $diretoriofinal;

    public function __construct($ficheiro,$diretoriofinal)
    {
        $this->ficheiro = $ficheiro;
        //---------------------------------------------//
        $this->nomeFicheiro = $this->ficheiro["name"];
        $this->tipo = $this->ficheiro["type"];
        $this->ficheiroTemporario = $this->ficheiro["tmp_name"];
        $this->erro = $this->ficheiro["error"];
        $this->tamanho = $this->ficheiro["size"];
        $this->diretoriofinal = $diretoriofinal;

        //-------------------------------------------//
    }


//------------ Verificar se é uma imagem ou não!------------------------------//
    public function verificarImagem(){
        $checar = getimagesize($this->ficheiroTemporario);
        if($checar){
            echo "Ficheiro eh imagem: ".$checar["mime"];
        }else{
            echo "Ficheiro nao eh uma imagem";
        }
    }

//------------ Verificar se ja existe a imagem!-------------------------------//
    function verificarRepeticao(){
        if(file_exists($this->nomeFicheiro)){
            echo "Desculpa o ficheiro ja existe.";
        }
    }

//------------ Verificar tamanho da imagem! colocar valor maximo--------------//
    function verificarTamanho($tamanhomaximo){
        if($this->tamanho>$tamanhomaximo){
            echo "A imagem eh muito grande";
        }
    }

//------------ Verificar formato da imagem ---------------------------------//
    function verificarFormato($tipospermitidos){
        if(in_array($this->tipo,$tipospermitidos)){
            echo "Ficheiro eh aceite";
        }
        else{
            echo "Ficheiro nao aceite";
        }
    }

//------------ Realizar o Upload ---------------------------------//
    function fazerUpload(){
        $ficheirofinal = $this->diretoriofinal.basename($this->nomeFicheiro);
        if(move_uploaded_file($this->ficheiroTemporario,$ficheirofinal)){
            //echo "foi carregado com sucesso!";
        }else{
            //echo "desculpe nao foi possivel carregar o ficheiro";
        }
    }

//------------ Retornar Caminho final do ficheiro ---------------------------------//
    function caminhoImagem(){
        $caminhoImagem = $this->diretoriofinal.basename($this->nomeFicheiro);
        return $caminhoImagem;
    }
}
