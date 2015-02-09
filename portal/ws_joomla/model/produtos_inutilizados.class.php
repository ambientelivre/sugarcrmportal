<?php
    class produtos_inutilizados{
        private $in_id;
        private $in_data;
        private $in_secretaria;
        private $in_regionais;
        private $in_motivo;
        private $in_observacoes;
        private $in_produto;
        private $in_lote;
        private $in_qnt;
        private $in_nome;
        
        //Método construtor
        public function produtos_inutilizados(
            $in_id,
            $in_data,
            $in_secretaria,
            $in_regionais,
            $in_motivo,
            $in_observacoes,
            $in_produto,
            $in_lote,
            $in_qnt,
            $in_nome){

                $this->in_id = $in_id;
                $this->in_data = $in_data;
                $this->in_secretaria = $in_secretaria;
                $this->in_regionais = $in_regionais;
                $this->in_motivo = $in_motivo;
                $this->in_observacoes = $in_observacoes;
                $this->in_produto = $in_produto;
                $this->in_lote = $in_lote;
                $this->in_qnt = $in_qnt;
                $this->in_nome = $in_nome;       
        }
        
        //Métodos de acesso
        public function getIn_id(){
            return $this->in_id;
        }
        
        public function getIn_data(){
            return $this->in_data;
        }
        
        public function getIn_secretaria(){
            return $this->in_secretaria;
        }
        
        public function getIn_regionais(){
            return $this->in_regionais;
        }

        public function getIn_motivo(){
            return $this->in_motivo;
        }

        public function getIn_observacoes(){
            return $this->in_observacoes;
        }

        public function getIn_produto(){
            return $this->in_produto;
        }

        public function getIn_lote(){
            return $this->in_lote;
        }

        public function getIn_qnt(){
            return $this->in_qnt;
        }

        public function getIn_nome(){
            return $this->in_nome;
        }
        
        //Métodos modificadores
        public function setIn_id($novoId){
            $this->in_id = $novoId;
        }
        
        public function setIn_data($novoData){
            $this->in_data = $novoData;
        }
        
        public function setIn_secretaria($novoSecretaria){
            $this->in_secretaria = $novoSecretaria;
        }
        
        public function setIn_regionais($novoRegionais){
            $this->in_regionais = $novoRegionais;
        }
        
        public function setIn_motivo($novoMotivo){
            $this->in_motivo = $novoMotivo;
        }
                
        public function setIn_observacoes($novoObservacoes){
            $this->in_observacoes = $novoObservacoes;
        }
                
        public function setIn_produto($novoProduto){
            $this->in_produto = $novoProduto;
        }
        
        public function setIn_lote($novoLote){
            $this->in_lote = $novoLote;
        }
        
        public function setIn_qnt($novoQnt){
            $this->in_qnt = $novoQnt;
        }

        public function setIn_nome($novoNome){
            $this->in_nome = $novoNome;
        }

    }
?>