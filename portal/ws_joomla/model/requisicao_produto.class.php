<?php
    class requisicao_produto{
        private $req_form_id;
        private $req_data;
        private $req_solicitante;
        private $req_cnpj;
        private $req_contato;
        private $req_telefone;
        private $req_email;
        private $req_qnt_frascos;
        private $req_desc_prod;
        private $req_lote;
        private $req_val_unit;
        private $req_val_total;
        private $req_observacoes;
        
        //Método construtor
        public function requisicao_produto (
            $req_form_id,
            $req_data,
            $req_solicitante,
            $req_cnpj,
            $req_contato,
            $req_telefone,
            $req_email,
            $req_qnt_frascos,
            $req_desc_prod,
            $req_lote,
            $req_val_unit,
            $req_val_total,
            $req_observacoes){

                $this->req_form_id = $req_form_id;
                $this->req_data = $req_data;
                $this->req_solicitante = $req_solicitante;
                $this->req_cnpj = $req_cnpj;
                $this->req_contato = $req_contato;
                $this->req_telefone = $req_telefone;
                $this->req_email = $req_email;
                $this->req_qnt_frascos = $req_qnt_frascos;
                $this->req_desc_prod = $req_desc_prod;
                $this->req_lote = $req_lote;
                $this->req_val_unit = $req_val_unit;
                $this->req_val_total = $req_val_total;
                $this->req_observacoes = $req_observacoes;
        }
        
         
        //Métodos de acesso
        public function getReq_form_id(){
            return $this->req_form_id;
        }
        
        public function getReq_data(){
            return $this->req_data;
        }

        public function getReq_solicitante(){
            return $this->req_solicitante;
        }

        public function getReq_cnpj(){
            return $this->req_cnpj;
        }

        public function getReq_contato(){
            return $this->req_contato;
        }

        public function getReq_telefone(){
            return $this->req_telefone;
        }

        public function getReq_email(){
            return $this->req_email;
        }

        public function getReq_qnt_frascos(){
            return $this->req_qnt_frascos;
        }

        public function getReq_desc_prod(){
            return $this->req_desc_prod;
        }

        public function getReq_lote(){
            return $this->req_lote;
        }

        public function getReq_val_unit(){
            return $this->req_val_unit;
        }

        public function getReq_val_total(){
            return $this->req_val_total;
        }

        public function getReq_observacoes(){
            return $this->req_observacoes;
        }


        
        //Métodos modificadores
        public function setReq_form_id($novoId){
            $this->req_form_id = $novoId;
        }
        
        public function setReq_data($novoData){
            $this->req_data = $novoData;
        }
        
        public function setReq_solicitante($novoSolicitante){
            $this->req_solicitante = $novoSolicitante;
        }

        public function setReq_cnpj($novoCnpj){
            $this->req_cnpj = $novoCnpj;
        }

        public function setReq_contato($novoContato){
            $this->req_contato = $novoContato;
        }

        public function setReq_telefone($novoTelefone){
            $this->req_telefone = $novoTelefone;
        }

        public function setReq_email($novoEmail){
            $this->req_email = $novoEmail;
        }

        public function setReq_qnt_frascos($novoQnt_frascos){
            $this->req_qnt_frascos = $novoQnt_frascos;
        }

        public function setReq_desc_produto($novoDesc_produto){
            $this->req_desc_prod = $novoDesc_produto;
        }

        public function setReq_lote($novoLote){
            $this->req_lote = $novoLote;
        }

        public function setReq_val_unit($novoVal_unit){
            $this->req_val_unit = $novoVal_unit;
        }

        public function setReq_val_total($novoVal_total){
            $this->req_val_total = $novoVal_total;
        }

        public function setReq_observacoes($novoObservacoes){
            $this->req_observacoes = $novoObservacoes;
        }

    }
?>