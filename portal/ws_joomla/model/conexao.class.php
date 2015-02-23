<?php

class Conexao{
    private $_host = 'localhost';
    private $_user = 'ambientelivre';
    private $_pass = 'sugarsql123';
    private $_data_base = 'portal_homologacao';
    public $_con = '';

    function __construct() {
        $this->conectar();   
    }
    
    
    function conectar(){
        $_con = mysql_connect($this->_host, $this->_user, $this->_pass) or die("Não conectou ao banco.</br>".  mysql_error());
        $_con = mysql_select_db($this->_data_base) or die('Nao foi possivel selecionar o banco de dados'.mysql_error());
        return $_con;
    }
}
?>