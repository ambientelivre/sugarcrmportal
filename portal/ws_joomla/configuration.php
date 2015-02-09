<?php

/*

ARQUIVO DE CONFIGUTAÇÃO DO SISTEMA

ALTERE AS VARIÁVEIS DE ACORDO COM A SUA NESCESSIDADE.

RENOMEIE ESTE ARQUIVO PARA: configuration.php

*/


// ADICIONE AQUI A URL DO SISTEMA ERP

$SERVER_URL = 'http://sugar.tecpar.br/portaldocliente/';

$CONFIG_URL = "";

$NOME_PROJETO = 'ws_joomla';


//DEFINIÇÃO DE CONSTANTES DO PROJETO

define(__CONTROL_PATH__, $SERVER_URL . $NOME_PROJETO . '/ctrl');

define(__VIEW_PATH__, $SERVER_URL . $NOME_PROJETO . '/view');

define(__LIB_PATH__, $SERVER_URL . $NOME_PROJETO . '/lib');

define(__BOLETOPHP_PATH__, $SERVER_URL . $NOME_PROJETO .  '/lib/boleto_php/');

define(__PROJECT_PATH__, $SERVER_URL . $NOME_PROJETO);

?>