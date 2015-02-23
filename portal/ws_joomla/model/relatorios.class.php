<?php
    class relatorios{
        private $rel_sec_origem;
        private $rel_reg_origem;
        private $rel_sec_destino;
        private $rel_reg_destino;
        private $rel_produto;
        private $rel_lote;
        private $rel_dt_inicio;
        private $rel_dt_fim;
        
        
        //Método construtor
        public function relatorios(
            $rel_sec_origem,
            $rel_reg_origem,
            $rel_sec_destino,
            $rel_reg_destino,
            $rel_produto,
            $rel_lote,
            $rel_dt_inicio,
            $rel_dt_fim
            ){

                $this->rel_sec_origem = $rel_sec_origem;
                $this->rel_reg_origem = $rel_reg_origem;
                $this->rel_sec_destino = $rel_sec_destino;
                $this->rel_reg_destino = $rel_reg_destino;
                $this->rel_produto = $rel_produto;
                $this->rel_lote = $rel_lote;
                $this->rel_dt_inicio = $rel_dt_inicio;
                $this->rel_dt_fim = $rel_dt_fim;
                
        }
        
         
        //Métodos de acesso
        public function getRel_sec_origem(){
            return $this->rel_sec_origem;
        }
        
        public function getRel_reg_origem(){
            return $this->rel_reg_origem;
        }

        public function getRel_sec_destino(){
            return $this->rel_sec_destino;
        }

        public function getRel_reg_destino(){
            return $this->rel_reg_destino;
        }

        public function getRel_produto(){
            return $this->rel_produto;
        }

        public function getRel_lote(){
            return $this->rel_lote;
        }

        public function getRel_dt_inicio(){
            return $this->rel_dt_inicio;
        }

        public function getRel_dt_fim(){
            return $this->rel_dt_fim;
        }

        //Métodos modificadores
        public function setRel_sec_origem($novoSecOrigem){
            $this->rel_sec_origem = $novoSecOrigem;
        }
        
        public function setRel_reg_origem($novoRegOrigem){
            $this->rel_reg_origem = $novoRegOrigem;
        }
        
        public function setRel_sec_destino($novoSecDestino){
            $this->rel_sec_destino = $novoSecDestino;
        }
        
        public function setRel_reg_destino($novoRegDestino){
            $this->rel_reg_destino = $novoRegDestino;
        }
        
        public function setRel_produto($novoProduto){
            $this->rel_produto = $novoProduto;
        }

        public function setRel_lote($novoLote){
            $this->rel_lote = $novoLote;
        }

        public function setRel_dt_inicio($novoDt_inicio){
            $this->rel_dt_inicio = $novoDt_inicio;
        }

        public function setRel_dt_fim($novoDt_fim){
            $this->rel_dt_fim = $novoDt_fim;
        }

    }
?>