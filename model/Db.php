<?php
    class Db{
        private $servidor ='localhost';
        private $username = 'root';
        private $password = '';
        private $dbname = 'redesocialmz';

        public function conectar(){
            try{
                $conexao = new PDO("mysql:host=$this->servidor;dbname=$this->dbname",$this->username,$this->password);
                $conexao->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                return $conexao;
            }catch(PDOException $e){
                echo "A conexao com o banco de dados falhou: ".$e->getMessage();
            }
        }
    }