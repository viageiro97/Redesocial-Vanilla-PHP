<?php
    class Db{
        private static $username = 'root';
        private static $password = '';
        //MUDE OPCOES NESTA VARIAVEL PARA CONFIGURAR A BASE DE DADOS
        private static $parametros = "mysql:host=localhost;dbname=redesocialmz";

        //FUNCAO QUE CONECTA A BASE DE DADOS
        protected static function conectar(){
            try{
                $conexao = new PDO(self::$parametros,self::$username,self::$password);
                $conexao->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                return $conexao;
            }catch(PDOException $e){
                //echo "A conexao com o banco de dados falhou: ".$e->getMessage();
            }
        }
    }