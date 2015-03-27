<?php
    class pedido_veterinario_regional{
        private $ped_form_id;
        private $ped_nm_razao;
        private $ped_cep;
        private $ped_num_logradouro;
        private $ped_tp_logradouro;
        private $ped_logradouro;
        private $ped_complemento;
        private $ped_bairro;
        private $ped_cidade;
        private $ped_estado;
        private $ped_cpf_cnpj;
        private $ped_inscricao_estadual;
        private $ped_telefone_contato;
        private $ped_quantidade;
        private $ped_produto;
        private $ped_desc_produto;
        private $ped_lote;
        private $ped_valor_unitario;
        private $ped_valor_total;
        private $ped_status;
        private $ped_sec_origem;
        private $ped_reg_origem;
        private $ped_sec_destino;
        private $ped_reg_destino;
        private $ped_clie_destino;
        private $ped_codigo_boleto;
        
        //Método construtor
        public function pedido_veterinario_regional (
            $ped_nm_razao,
            $ped_cep,
            $ped_num_logradouro,
            $ped_tp_logradouro,
            $ped_logradouro,
            $ped_complemento,
            $ped_bairro,
            $ped_cidade,
            $ped_estado,
            $ped_cpf_cnpj,
            $ped_inscricao_estadual,
            $ped_telefone_contato,
            $ped_quantidade,
            $ped_produto,
            $ped_desc_produto,
            $ped_lote,
            $ped_valor_unitario,
            $ped_valor_total,
            $ped_status,
            $ped_sec_origem,
            $ped_reg_origem,
            $ped_sec_destino,    
            $ped_reg_destino,
            $ped_clie_destino,
            $ped_codigo_boleto){

                $this->ped_nm_razao = $ped_nm_razao;
                $this->ped_cep = $ped_cep;
                $this->ped_num_logradouro = $ped_num_logradouro;
                $this->ped_tp_logradouro = $ped_tp_logradouro;
                $this->ped_logradouro = $ped_logradouro;
                $this->ped_complemento = $ped_complemento;
                $this->ped_bairro = $ped_bairro;
                $this->ped_cidade = $ped_cidade;
                $this->ped_estado = $ped_estado;
                $this->ped_cpf_cnpj = $ped_cpf_cnpj;
                $this->ped_inscricao_estadual = $ped_inscricao_estadual;
                $this->ped_telefone_contato = $ped_telefone_contato;
                $this->ped_quantidade = $ped_quantidade;
                $this->ped_produto = $ped_produto;
                $this->ped_desc_produto = $ped_desc_produto;
                $this->ped_lote = $ped_lote;
                $this->ped_valor_unitario = $ped_valor_unitario;
                $this->ped_valor_total = $ped_valor_total;
                $this->ped_status = $ped_status;
                $this->ped_sec_origem = $ped_sec_origem;
                $this->ped_reg_origem = $ped_reg_origem;
                $this->ped_sec_destino = $ped_sec_destino;
                $this->ped_reg_destino = $ped_reg_destino;
                $this->ped_clie_destino = $ped_clie_destino;
                $this->ped_codigo_boleto = $ped_codigo_boleto;
        }
        
         
        //Métodos de acesso
        public function getPed_form_id(){
            return $this->ped_form_id;
        }
        
        public function getPed_nm_razao(){
            return $this->ped_nm_razao;
        }

        public function getPed_cep(){
            return $this->ped_cep;
        }

        public function getPed_num_logradouro(){
            return $this->ped_num_logradouro;
        }

        public function getPed_tp_logradouro(){
            return $this->ped_tp_logradouro;
        }

        public function getPed_logradouro(){
            return $this->ped_logradouro;
        }

        public function getPed_complemento(){
            return $this->ped_complemento;
        }

        public function getPed_bairro(){
            return $this->ped_bairro;
        }

        public function getPed_cidade(){
            return $this->ped_cidade;
        }

        public function getPed_estado(){
            return $this->ped_estado;
        }

        public function getPed_cpf_cnpj(){
            return $this->ped_cpf_cnpj;
        }

        public function getPed_inscricao_estadual(){
            return $this->ped_inscricao_estadual;
        }

        public function getPed_quantidade(){
            return $this->ped_quantidade;
        }

        public function getPed_telefone_contato(){
            return $this->ped_telefone_contato;
        }

        public function getPed_produto(){
            return $this->ped_produto;
        }

        public function getPed_desc_produto(){
            return $this->ped_desc_produto;
        }

        public function getPed_lote(){
            return $this->ped_lote;
        }

        public function getPed_valor_unitario(){
            return $this->ped_valor_unitario;
        }

        public function getPed_valor_total(){
            return $this->ped_valor_total;
        }

        public function getPed_status(){
            return $this->ped_status;
        }

        public function getPed_sec_origem(){
            return $this->ped_sec_origem;
        }

        public function getPed_reg_origem(){
            return $this->ped_reg_origem;
        }

        public function getPed_sec_destino(){
            return $this->ped_sec_destino;
        }
        
        public function getPed_reg_destino(){
            return $this->ped_reg_destino;
        }

        public function getPed_clie_destino(){
            return $this->ped_clie_destino;
        }

        public function getPed_codigo_boleto(){
            return $this->ped_codigo_boleto;
        }

        
        //Métodos modificadores
        public function setPed_form_id($novoId){
            $this->ped_form_id = $novoId;
        }
        
        public function setPed_nm_razao($novoNm_razao){
            $this->ped_nm_razao = $novoNm_razao;
        }
        
        public function setPed_cep($novoCep){
            $this->ped_cep = $novoCep;
        }
        
        public function setPed_num_logradouro($novoNum_logradouro){
            $this->ped_num_logradouro = $novoNum_logradouro;
        }
        
        public function setPed_tp_logradouro($novoTp_logradouro){
            $this->ped_tp_logradouro = $novoTp_logradouro;
        }

        public function setPed_logradouro($novoLogradouro){
            $this->ped_logradouro = $novoLogradouro;
        }

        public function setPed_complemento($novoComplemento){
            $this->ped_complemento = $novoComplemento;
        }

        public function setPed_bairro($novoBairro){
            $this->ped_bairro= $novoBairro;
        }

        public function setPed_cidade($novoCidade){
            $this->ped_cidade = $novoCidade;
        }

        public function setPed_estado($novoEstado){
            $this->ped_estado = $novoEstado;
        }

        public function setPed_cpf_cnpj($novoCpf_cnpj){
            $this->ped_cpf_cnpj = $novoCpf_cnpj;
        }

        public function setPed_inscricao_estadual($novoInscricao_estadual){
            $this->ped_inscricao_estadual = $novoInscricao_estadual;
        }

        public function setPed_telefone_contato($novoTelefone_contato){
            $this->ped_telefone_contato = $novoTelefone_contato;
        }

        public function setPed_quantidade($novoCnae){
            $this->ped_quantidade = $novoCnae;
        }

        public function setPed_Produto($novoProduto){
            $this->ped_produto = $novoProduto;
        }

        public function setPed_desc_produto($novoDesc_produto){
            $this->ped_desc_produto = $novoDesc_produto;
        }

        public function setPed_lote($novoLote){
            $this->ped_lote = $novoLote;
        }

        public function setPed_valor_unitario($novoValor_unitario){
            $this->ped_valor_unitario = $novoValor_unitario;
        }

        public function setPed_valor_total($novoValor_total){
            $this->ped_valor_total = $novoValor_total;
        }

        public function setPed_status($novoValor_total){
            $this->ped_status = $novoValor_total;
        }

        public function setPed_sec_origem($novoValor_sec_origem){
            $this->ped_sec_origem = $novoValor_sec_origem;
        }
        
        public function setPed_sec_destino($novoValor_sec_destino){
            $this->ped_sec_destino = $novoValor_sec_destino;
        }

        public function setPed_reg_origem($novoValor_reg_origem){
            $this->ped_reg_origem = $novoValor_reg_origem;
        }

        public function setPed_reg_destino($novoValor_reg_destino){
            $this->ped_reg_destino = $novoValor_reg_destino;
        }

        public function setPed_clie_destino($novoValor_clie_destino){
            $this->ped_clie_destino = $novoValor_clie_destino;
        }

        public function setPed_codigo_boleto($novoValor_codigo_boleto){
            $this->ped_codigo_boleto = $novoValor_codigo_boleto;
        }

    }
?>