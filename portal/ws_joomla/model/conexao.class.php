<?php

class Conexao{
        
    private $_host = '186.202.13.17';    
    private $_user = 'ambientelivre25';    
    private $_pass = 'sejalivre';
    private $_data_base = 'ambientelivre25';
    
    public $_con = '';

    
    function __construct() {
        $this->conectar();   
    }
    
    
    function conectar(){
        $_con = mysql_connect($this->_host, $this->_user, $this->_pass) or die("Não conectou ao banco.</br>".  mysql_error());
        $_con = mysql_select_db($this->_data_base) or die('Nao foi possivel selecionar o banco de dados'.mysql_error());
        
        /*
        Força codificação UTF-8 para dados do banco
        A princípio não é necessário,
        
        mysql_query("SET NAMES 'utf8'");
        mysql_query('SET character_set_connection=utf8');
        mysql_query('SET character_set_client=utf8');
        mysql_query('SET character_set_results=utf8');
        */
        return $_con;
    }
}
?>