<?php
    class Aluno{
        private $Nome;
        private $Nota1;
        private $Nota2;

        public function __construct($Nome,$n1,$n2){
            $this -> Nome = $Nome;
            $this -> Nota1 = $n1;
            $this -> Nota2 = $n2;
        }

        public function getNome(){
            return $this->Nome;
        }

        public function getNota1(){
            return $this->Nota1;
        }

        public function getNota2(){
            return $this->Nota2;
        }

        public function Media($n1,$n2){
            $media = ($n1 + $n2)/2;
            return $media;
        }

        public function VerificarSituacao($media){
            if($media>=7){
                //APROVADO
                return "<b style= color:'green';>APROVADO </b>";

            }else{
                //REPROVADO
                return "<b style= color:'red';>REPROVADO </b>";
            }
        }
    }
?>