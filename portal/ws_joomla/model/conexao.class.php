<?php

class Conexao{
    
    private $_host = 'mysql20.ambientelivre.com.br';
    private $_user = 'ambientelivre25';
    private $_pass = 'sejalivre';
    private $_data_base = 'ambientelivre25';
    
    public $_con = '';

    
    function __construct() {
        $this->conectar();   
    }
    
    
    function conectar(){
        //$config = JFactory::getConfig();
        //$_con = mysql_connect($config->get('host'), $config->get('user'), $config->get('pass')) or die("Não conectou ao banco.</br>".  mysql_error());
        //$_con = mysql_select_db($config->get('data_base')) or die('Nao foi possivel selecionar o banco de dados'.mysql_error());
        
        
        $_con = mysql_connect($this->_host, $this->_user, $this->_pass) or die("Não conectou ao banco.</br>".  mysql_error());
        $_con = mysql_select_db($this->_data_base) or die('Nao foi possivel selecionar o banco de dados'.mysql_error());
        return $_con;
    }
}
?>