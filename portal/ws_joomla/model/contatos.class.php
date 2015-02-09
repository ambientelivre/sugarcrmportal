<?php
    class contatos{
        private $ct_id; 
        private $ct_nome; 
        private $ct_sobrenome;
        private $ct_cargo;
        private $ct_email;
        private $ct_telefone;
        private $ct_celular;
        private $ct_secretaria;
        private $ct_regional;
        
        
        
        //Método construtor
        public function contatos (
            $ct_id,
            $ct_nome,
            $ct_sobrenome,
            $ct_cargo,
            $ct_email,
            $ct_telefone,
            $ct_celular,
            $ct_secretaria,
            $ct_regional){

                $this->ct_id = $ct_id;
                $this->ct_nome = $ct_nome;
                $this->ct_sobrenome = $ct_sobrenome;
                $this->ct_cargo = $ct_cargo;
                $this->ct_email = $ct_email;
                $this->ct_telefone = $ct_telefone;
                $this->ct_celular = $ct_celular;
                $this->ct_secretaria = $ct_secretaria;
                $this->ct_regional = $ct_regional;
        }
        
         
        //Métodos de acesso
        public function getCt_id(){
            return $this->ct_id;
        }
        
        public function getCt_nome(){
            return $this->ct_nome;
        }
        
        public function getCt_sobrenome(){
            return $this->ct_sobrenome;
        }
        
        public function getCt_email(){
            return $this->ct_email;
        }

        public function getCt_telefone(){
            return $this->ct_telefone;
        }

        public function getCt_celular(){
            return $this->ct_celular;
        }

        public function getCt_cargo(){
            return $this->ct_cargo;
        }

        public function getCt_secretaria(){
            return $this->ct_secretaria;
        }

        public function getCt_regional(){
            return $this->ct_regional;
        }

        
        //Métodos modificadores
        public function setCt_id($novoId){
            $this->ct_id = $novoId;
        }
        
        public function setCt_nome($novoNome){
            $this->ct_nome = $novoNome;
        }
        
        public function setCt_sobrenome($novoSobreNome){
            $this->ct_sobrenome = $novoSobreNome;
        }
        
        public function setCt_email($novoEmail){
            $this->ct_email = $novoEmail;
        }
        
        public function setCt_telefone($novoTelefone){
            $this->ct_telefone = $novoTelefone;
        }
        
        public function setCt_celular($novoCelular){
            $this->ct_celular = $novoCelular;
        }
        
        public function setCt_cargo($novoCargo){
            $this->ct_cargo= $novoCargo;
        }
        
        public function setCt_secretaria($novoSec){
            $this->ct_secretaria= $novoSec;
        }
        
        public function setCt_regional($novoReg){
            $this->ct_regional= $novoReg;
        }

    }
?>