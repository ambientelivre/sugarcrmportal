<?php
    class regionais{
        private $reg_form_id;
        private $reg_sec_id;
        private $reg_razao_social;
        private $reg_nm_fantasia;
        private $reg_tp_logradouro;
        private $reg_logradouro;
        private $reg_numero;
        private $reg_complemento;
        private $reg_cep;
        private $reg_bairro;
        private $reg_cidade;
        private $reg_estado;
        private $reg_cnpj;
        private $reg_inscricao_estadual;
        private $reg_cnae;
        private $reg_contato;
        private $reg_telefone;
        private $reg_email;
        private $reg_pncebt;
        
        //Método construtor
        public function regionais (
            $reg_sec_id,
            $reg_razao_social,
            $reg_nm_fantasia,
            $reg_tp_logradouro,
            $reg_logradouro,
            $reg_numero,
            $reg_complemento,
            $reg_cep,
            $reg_bairro,
            $reg_cidade,
            $reg_estado,
            $reg_cnpj,
            $reg_inscricao_estadual,
            $reg_cnae,
            $reg_contato,
            $reg_telefone,
            $reg_email,
            $reg_pncebt){

                $this->reg_sec_id = $reg_sec_id;
                $this->reg_razao_social = $reg_razao_social;
                $this->reg_nm_fantasia = $reg_nm_fantasia;
                $this->reg_tp_logradouro = $reg_tp_logradouro;
                $this->reg_logradouro = $reg_logradouro;
                $this->reg_numero = $reg_numero;
                $this->reg_complemento = $reg_complemento;
                $this->reg_cep = $reg_cep;
                $this->reg_bairro = $reg_bairro;
                $this->reg_cidade = $reg_cidade;
                $this->reg_estado = $reg_estado;
                $this->reg_cnpj = $reg_cnpj;
                $this->reg_inscricao_estadual = $reg_inscricao_estadual;
                $this->reg_cnae = $reg_cnae;
                $this->reg_contato = $reg_contato;
                $this->reg_telefone = $reg_telefone;
                $this->reg_email = $reg_email;
                $this->reg_pncebt = $reg_pncebt;
        }
        
         
        //Métodos de acesso
        public function getReg_form_id(){
            return $this->reg_form_id;
        }
        
        public function getReg_sec_id(){
            return $this->reg_sec_id;
        }
        
        public function getReg_razao_social(){
            return $this->reg_razao_social;
        }

        public function getReg_nm_fantasia(){
            return $this->reg_nm_fantasia;
        }

        public function getReg_tp_logradouro(){
            return $this->reg_tp_logradouro;
        }

        public function getReg_logradouro(){
            return $this->reg_logradouro;
        }

        public function getReg_numero(){
            return $this->reg_numero;
        }

        public function getReg_complemento(){
            return $this->reg_complemento;
        }

        public function getReg_cep(){
            return $this->reg_cep;
        }

        public function getReg_bairro(){
            return $this->reg_bairro;
        }

        public function getReg_cidade(){
            return $this->reg_cidade;
        }

        public function getReg_estado(){
            return $this->reg_estado;
        }

        public function getReg_cnpj(){
            return $this->reg_cnpj;
        }

        public function getReg_inscricao_estadual(){
            return $this->reg_inscricao_estadual;
        }

        public function getReg_cnae(){
            return $this->reg_cnae;
        }

        public function getReg_contato(){
            return $this->reg_contato;
        }

        public function getReg_telefone(){
            return $this->reg_telefone;
        }

        public function getReg_email(){
            return $this->reg_email;
        }

        public function getReg_pncebt(){
            return $this->reg_pncebt;
        }

        
        //Métodos modificadores
        public function setReg_form_id($novoId){
            $this->reg_form_id = $novoId;
        }
        
        public function setReg_sec_id($novoSecId){
            $this->reg_sec_id = $novoSecId;
        }
        
        public function setReg_razao_social($novoRazao_social){
            $this->reg_razao_social = $novoRazao_social;
        }
        
        public function setReg_nm_fantasia($novoNm_fantasia){
            $this->reg_nm_fantasia = $novoNm_fantasia;
        }

        public function setReg_tp_logradouro($novoTp_logradouro){
            $this->reg_tp_logradouro = $novoTp_logradouro;
        }

        public function setReg_logradouro($novoLogradouro){
            $this->reg_logradouro = $novoLogradouro;
        }

        public function setReg_numero($novoNumero){
            $this->reg_numero = $novoNumero;
        }

        public function setReg_complemento($novoComplemento){
            $this->reg_complemento = $novoComplemento;
        }

        public function setReg_cep($novoCep){
            $this->reg_cep = $novoCep;
        }

        public function setReg_bairro($novoBairro){
            $this->reg_bairro= $novoBairro;
        }

        public function setReg_cidade($novoCidade){
            $this->reg_cidade = $novoCidade;
        }

        public function setReg_estado($novoEstado){
            $this->reg_estado = $novoEstado;
        }

        public function setReg_cnpj($novoCnpj){
            $this->reg_cnpj = $novoCnpj;
        }

        public function setReg_inscricao_estadual($novoInscricao_estadual){
            $this->reg_inscricao_estadual = $novoInscricao_estadual;
        }

        public function setReg_cnae($novoCnae){
            $this->reg_cnae = $novoCnae;
        }

        public function setReg_contato($novoContato){
            $this->reg_contato = $novoContato;
        }

        public function setReg_telefone($novoTelefone){
            $this->reg_telefone = $novoTelefone;
        }

        public function setReg_email($novoEmail){
            $this->reg_email = $novoEmail;
        }

        public function setReg_pncebt($novoPncebt){
            $this->reg_pncebt = $novoPncebt;
        }

    }
?>