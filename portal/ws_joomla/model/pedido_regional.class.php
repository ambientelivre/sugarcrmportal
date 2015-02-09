<?php
    class prido_regional{
        private $pr_regional;
        private $pr_secretaria;
        private $pr_produto;
        private $pr_quantidade;
        
        //Método construtor
        public function prido_veterinario_regional (
            $pr_regional,
            $pr_secretaria,
            $pr_produto,
            $pr_quantidade){

                $this->pr_regional = $pr_regional;
                $this->pr_secretaria = $pr_secretaria;
                $this->pr_produto = $pr_produto;
                $this->pr_quantidade = $pr_quantidade;
        }
        
         
        //Métodos de acesso
        public function getPr_regional(){
            return $this->pr_regional;
        }
        
        public function getPr_secretaria(){
            return $this->pr_secretaria;
        }

        public function getPr_produto(){
            return $this->pr_produto;
        }

        public function getPr_quantidade(){
            return $this->pr_quantidade;
        }

        
        //Métodos modificadores
        public function setPr_regional($novoRegional){
            $this->pr_regional = $novoRegional;
        }
        
        public function setPr_secretaria($novoSecretaria){
            $this->pr_secretaria = $novoSecretaria;
        }
        
        public function setPr_produto($novoProduto){
            $this->pr_produto = $novoProduto;
        }
        
        public function setPr_quantidade($novoQuantidade){
            $this->pr_quantidade = $novoQuantidade;
        }
        
        public function setPr_tp_logradouro($novoTp_logradouro){
            $this->pr_tp_logradouro = $novoTp_logradouro;
        }

    }
?>