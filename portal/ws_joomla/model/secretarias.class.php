<?php
    class secretarias{
        private $sec_form_id;
        private $sec_razao_social;
        private $sec_nm_fantasia;
        private $sec_tp_logradouro;
        private $sec_logradouro;
        private $sec_numero;
        private $sec_complemento;
        private $sec_cep;
        private $sec_bairro;
        private $sec_cidade;
        private $sec_estado;
        private $sec_cnpj;
        private $sec_inscricao_estadual;
        private $sec_cnae;
        private $sec_contato;
        private $sec_telefone;
        private $sec_email;
        private $sec_pncebt;
        private $sec_pncebt_telefone;
        private $sec_pncebt_email;
        
        //Método construtor
        public function secretarias (
            $sec_razao_social,
            $sec_nm_fantasia,
            $sec_tp_logradouro,
            $sec_logradouro,
            $sec_numero,
            $sec_complemento,
            $sec_cep,
            $sec_bairro,
            $sec_cidade,
            $sec_estado,
            $sec_cnpj,
            $sec_inscricao_estadual,
            $sec_cnae,
            $sec_contato,
            $sec_telefone,
            $sec_email,
            $sec_pncebt,
            $sec_pncebt_telefone,
            $sec_pncebt_email){

                $this->sec_razao_social = $sec_razao_social;
                $this->sec_nm_fantasia = $sec_nm_fantasia;
                $this->sec_tp_logradouro = $sec_tp_logradouro;
                $this->sec_logradouro = $sec_logradouro;
                $this->sec_numero = $sec_numero;
                $this->sec_complemento = $sec_complemento;
                $this->sec_cep = $sec_cep;
                $this->sec_bairro = $sec_bairro;
                $this->sec_cidade = $sec_cidade;
                $this->sec_estado = $sec_estado;
                $this->sec_cnpj = $sec_cnpj;
                $this->sec_inscricao_estadual = $sec_inscricao_estadual;
                $this->sec_cnae = $sec_cnae;
                $this->sec_contato = $sec_contato;
                $this->sec_telefone = $sec_telefone;
                $this->sec_email = $sec_email;
                $this->sec_pncebt = $sec_pncebt;
                $this->sec_pncebt_telefone = $sec_pncebt_telefone;
                $this->sec_pncebt_email = $sec_pncebt_email;
        }
        
         
        //Métodos de acesso
        public function getSec_form_id(){
            return $this->sec_form_id;
        }
        
        public function getSec_razao_social(){
            return $this->sec_razao_social;
        }

        public function getSec_nm_fantasia(){
            return $this->sec_nm_fantasia;
        }

        public function getSec_tp_logradouro(){
            return $this->sec_tp_logradouro;
        }

        public function getSec_logradouro(){
            return $this->sec_logradouro;
        }

        public function getSec_numero(){
            return $this->sec_numero;
        }

        public function getSec_complemento(){
            return $this->sec_complemento;
        }

        public function getSec_cep(){
            return $this->sec_cep;
        }

        public function getSec_bairro(){
            return $this->sec_bairro;
        }

        public function getSec_cidade(){
            return $this->sec_cidade;
        }

        public function getSec_estado(){
            return $this->sec_estado;
        }

        public function getSec_cnpj(){
            return $this->sec_cnpj;
        }

        public function getSec_inscricao_estadual(){
            return $this->sec_inscricao_estadual;
        }

        public function getSec_cnae(){
            return $this->sec_cnae;
        }

        public function getSec_contato(){
            return $this->sec_contato;
        }

        public function getSec_telefone(){
            return $this->sec_telefone;
        }

        public function getSec_email(){
            return $this->sec_email;
        }

        public function getSec_pncebt(){
            return $this->sec_pncebt;
        }

        public function getSec_pncebt_telefone(){
            return $this->sec_pncebt_telefone;
        }

        public function getSec_pncebt_email(){
            return $this->sec_pncebt_email;
        }

        
        //Métodos modificadores
        public function setSec_form_id($novoId){
            $this->sec_form_id = $novoId;
        }
        
        public function setSec_razao_social($novoRazao_social){
            $this->sec_razao_social = $novoRazao_social;
        }
        
        public function setSec_nm_fantasia($novoNm_fantasia){
            $this->sec_nm_fantasia = $novoNm_fantasia;
        }

        public function setSec_tp_logradouro($novoTp_logradouro){
            $this->sec_tp_logradouro = $novoTp_logradouro;
        }

        public function setSec_logradouro($novoLogradouro){
            $this->sec_logradouro = $novoLogradouro;
        }

        public function setSec_numero($novoNumero){
            $this->sec_numero = $novoNumero;
        }

        public function setSec_complemento($novoComplemento){
            $this->sec_complemento = $novoComplemento;
        }

        public function setSec_cep($novoCep){
            $this->sec_cep = $novoCep;
        }

        public function setSec_bairro($novoBairro){
            $this->sec_bairro= $novoBairro;
        }

        public function setSec_cidade($novoCidade){
            $this->sec_cidade = $novoCidade;
        }

        public function setSec_estado($novoEstado){
            $this->sec_estado = $novoEstado;
        }

        public function setSec_cnpj($novoCnpj){
            $this->sec_cnpj = $novoCnpj;
        }

        public function setSec_inscricao_estadual($novoInscricao_estadual){
            $this->sec_inscricao_estadual = $novoInscricao_estadual;
        }

        public function setSec_cnae($novoCnae){
            $this->sec_cnae = $novoCnae;
        }

        public function setSec_contato($novoContato){
            $this->sec_contato = $novoContato;
        }

        public function setSec_telefone($novoTelefone){
            $this->sec_telefone = $novoTelefone;
        }

        public function setSec_email($novoEmail){
            $this->sec_email = $novoEmail;
        }

        public function setSec_pncebt($novoPncebt){
            $this->sec_pncebt = $novoPncebt;
        }

        public function setSec_pncebt_telefone($novoPncebt_telefone){
            $this->sec_pncebt_telefone = $novoPncebt_telefone;
        }

        public function setSec_pncebt_email($novoPncebt_email){
            $this->sec_pncebt_email = $novoPncebt_email;
        }
    }
?>