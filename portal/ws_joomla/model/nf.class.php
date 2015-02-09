<?php
    class nf{
        private $id; 
        private $cb; 
        private $data;
        private $status;
        private $valor_total;
        
        //Método construtor
        public function nf (
            $id,
            $cb,
            $data,
            $status,
            $valor_total){

                $this->id = $id;
                $this->cb = $cb;
                $this->data = $data;
                $this->status = $status;
                $this->valor_total = $valor_total;
        }
        
         
        //Métodos de acesso
        public function getNf_id(){
            return $this->id;
        }
        
        public function getNf_cb(){
            return $this->cb;
        }
        
        public function getNf_data(){
            return $this->data;
        }

        public function getNf_status(){
            return $this->status;
        }

        public function getNf_valor_total(){
            return $this->valor_total;
        }

        
        //Métodos modificadores
        public function setNf_id($novoId){
            $this->id = $novoId;
        }
        
        public function setNf_cb($novoCb){
            $this->cb = $novoCb;
        }
        
        public function setNf_data($novoData){
            $this->data = $novoData;
        }
        
        public function setNf_status($novoStatus){
            $this->status = $novoStatus;
        }
        
        public function setCt_celular($novoValor_total){
            $this->valor_total = $novoValor_total;
        }
        
    }
?>