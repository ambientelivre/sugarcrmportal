<?php
    class upload{
        private $up_diretorio; 
        private $up_categoria;
        private $up_cod_arquivo;
        
        //Método construtor
        public function upload (
            $up_diretorio,
            $up_categoria,
            $up_cod_arquivo ){

                $this->up_diretorio = $up_diretorio;
                $this->up_categoria = $up_categoria;
                $this->up_cod_arquivo = $up_cod_arquivo;
            }
        
         
        //Métodos de acesso
        public function getUp_diretorio(){
            return $this->up_diretorio;
        }
        
        public function getUp_categoria(){
            return $this->up_categoria;
        }
        
        public function getUp_cod_arquivo(){
            return $this->up_cod_arquivo;
        }
        
        //Métodos modificadores
        public function setUp_diretorio($novoDiretorio){
            $this->up_diretorio = $novoDiretorio;
        }
        
        public function setUp_categoria($novoCategoria){
            $this->up_categoria = $novoCategoria;
        }
        
        public function setUp_cod_arquivo($novoCod_arquivo){
            $this->up_cod_arquivo = $novoCod_arquivo;
        }

    }
?>