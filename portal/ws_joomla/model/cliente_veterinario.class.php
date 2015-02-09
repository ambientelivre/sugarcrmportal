<?php
    class cliente_veterinario{
        private $cli_sec;
        private $cli_reg;
        private $cli_id;
        private $cli_nm_razao;
        private $cli_nm_fantasia;
        private $cli_tp_logradouro;
        private $cli_logradouro;
        private $cli_numero;
        private $cli_complemento;
        private $cli_cep;
        private $cli_bairro;
        private $cli_cidade;
        private $cli_estado;
        private $cli_cnpj_cpf;
        private $cli_inscricao_estadual;
        private $cli_contato;
        private $cli_telefone;
        private $cli_email;
        private $cli_crmv;
        private $cli_pncebt;
        private $cli_situacao;
        
        //Método construtor
        public function cliente_veterinario (
            $cli_id,
            $cli_sec,
            $cli_reg,
            $cli_nm_razao,
            $cli_nm_fantasia,
            $cli_tp_logradouro,
            $cli_logradouro,
            $cli_numero,
            $cli_complemento,
            $cli_cep,
            $cli_bairro,
            $cli_cidade,
            $cli_estado,
            $cli_cnpj_cpf,
            $cli_inscricao_estadual,
            $cli_contato,
            $cli_telefone,
            $cli_email,
            $cli_crmv,
            $cli_pncebt,
            $cli_situacao){

                $this->cli_id = $cli_id;
                $this->cli_sec = $cli_sec;
                $this->cli_reg = $cli_reg;
                $this->cli_nm_razao = $cli_nm_razao;
                $this->cli_nm_fantasia = $cli_nm_fantasia;
                $this->cli_tp_logradouro = $cli_tp_logradouro;
                $this->cli_logradouro = $cli_logradouro;
                $this->cli_numero = $cli_numero;
                $this->cli_complemento = $cli_complemento;
                $this->cli_cep = $cli_cep;
                $this->cli_bairro = $cli_bairro;
                $this->cli_cidade = $cli_cidade;
                $this->cli_estado = $cli_estado;
                $this->cli_cnpj_cpf = $cli_cnpj_cpf;
                $this->cli_inscricao_estadual = $cli_inscricao_estadual;
                $this->cli_contato = $cli_contato;
                $this->cli_telefone = $cli_telefone;
                $this->cli_email = $cli_email;
                $this->cli_crmv = $cli_crmv;
                $this->cli_pncebt = $cli_pncebt;
                $this->cli_situacao = $cli_situacao;
        }
        
         
        //Métodos de acesso
        
        public function getCli_id(){
            return $this->cli_id;
        }
        
        public function getCli_sec(){
            return $this->cli_sec;
        }
        
        public function getCli_reg(){
            return $this->cli_reg;
        }
        
        public function getCli_nm_razao(){
            return $this->cli_nm_razao;
        }

        public function getCli_nm_fantasia(){
            return $this->cli_nm_fantasia;
        }

        public function getCli_tp_logradouro(){
            return $this->cli_tp_logradouro;
        }

        public function getCli_logradouro(){
            return $this->cli_logradouro;
        }

        public function getCli_numero(){
            return $this->cli_numero;
        }

        public function getCli_complemento(){
            return $this->cli_complemento;
        }

        public function getCli_cep(){
            return $this->cli_cep;
        }

        public function getCli_bairro(){
            return $this->cli_bairro;
        }

        public function getCli_cidade(){
            return $this->cli_cidade;
        }

        public function getCli_estado(){
            return $this->cli_estado;
        }

        public function getCli_cnpj_cpf(){
            return $this->cli_cnpj_cpf;
        }

        public function getCli_inscricao_estadual(){
            return $this->cli_inscricao_estadual;
        }

        public function getCli_contato(){
            return $this->cli_contato;
        }

        public function getCli_telefone(){
            return $this->cli_telefone;
        }

        public function getCli_email(){
            return $this->cli_email;
        }

        public function getCli_crmv(){
            return $this->cli_crmv;
        }

        public function getCli_pncebt(){
            return $this->cli_pncebt;
        }

        public function getCli_situacao(){
            return $this->cli_situacao;
        }

        
        //Métodos modificadores
        
        public function setCli_id($novoId){
            $this->cli_id = $novoId;
        }
        
        public function setCli_sec($novoSec){
            $this->cli_sec = $novoSec;
        }
        
        public function setCli_reg($novoReg){
            $this->cli_reg = $novoReg;
        }
        
        public function setCli_nm_razao($novoRazao_social){
            $this->cli_nm_razao = $novoRazao_social;
        }
        
        public function setCli_nm_fantasia($novoNm_fantasia){
            $this->cli_nm_fantasia = $novoNm_fantasia;
        }

        public function setCli_tp_logradouro($novoTp_logradouro){
            $this->cli_tp_logradouro = $novoTp_logradouro;
        }

        public function setCli_logradouro($novoLogradouro){
            $this->cli_logradouro = $novoLogradouro;
        }

        public function setCli_numero($novoNumero){
            $this->cli_numero = $novoNumero;
        }

        public function setCli_complemento($novoComplemento){
            $this->cli_complemento = $novoComplemento;
        }

        public function setCli_cep($novoCep){
            $this->cli_cep = $novoCep;
        }

        public function setCli_bairro($novoBairro){
            $this->cli_bairro= $novoBairro;
        }

        public function setCli_cidade($novoCidade){
            $this->cli_cidade = $novoCidade;
        }

        public function setCli_estado($novoEstado){
            $this->cli_estado = $novoEstado;
        }

        public function setCli_cnpj_cpf($novoCnpj){
            $this->cli_cnpj_cpf = $novoCnpj;
        }

        public function setCli_inscricao_estadual($novoInscricao_estadual){
            $this->cli_inscricao_estadual = $novoInscricao_estadual;
        }

        public function setCli_contato($novoContato){
            $this->cli_contato = $novoContato;
        }

        public function setCli_telefone($novoTelefone){
            $this->cli_telefone = $novoTelefone;
        }

        public function setCli_email($novoEmail){
            $this->cli_email = $novoEmail;
        }

        public function setCli_crmv($novoCrmv){
            $this->cli_crmv = $novoCrmv;
        }

        public function setCli_pncebt($novoPncebt){
            $this->cli_pncebt = $novoPncebt;
        }

        public function setCli_situacao($novoSituacao){
            $this->cli_situacao = $novoSituacao;
        }

    }
?>