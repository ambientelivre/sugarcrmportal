<?php
/*
ARQUIVO DE CONFIGURAÇÃO DO SISTEMA
ALTERE AS VARIÁVEIS DE ACORDO COM A SUA NESCESSIDADE.
RENOMEIE ESTE ARQUIVO PARA: configuration.php
*/

// ADICIONE AQUI A URL DO SISTEMA ERP
$SERVER_URL = "http://localhost/tecpar/sugarcrmportal/portal/";
//$SERVER_URL = "http://sugar.tecpar.br/portaldocliente/";
//$SERVER_URL = "http://localhost/portaldocliente/";

$CONFIG_URL = "";
$NOME_PROJETO = 'ws_joomla';


//DEFINIÇÃO DE CONSTANTES DO PROJETO
// Model
define("MODEL_PATH", $SERVER_URL . $NOME_PROJETO . '/model');

// Controller
define("CONTROL_PATH", $SERVER_URL . $NOME_PROJETO . '/ctrl');

// View
define("VIEW_PATH", $SERVER_URL . $NOME_PROJETO . '/view');

// Libs (javascript, css, imagens, etc.)
define("LIB_PATH", $SERVER_URL . $NOME_PROJETO . '/lib');

// Includes
define("INCLUDE_PATH", $SERVER_URL . $NOME_PROJETO . '/lib/includes');

// BoletoPhp
define("BOLETOPHP_PATH", $SERVER_URL . $NOME_PROJETO .  '/lib/boleto_php');

// Caminho do projeto + nome do projeto
define("PROJECT_PATH", $SERVER_URL . $NOME_PROJETO);

// Caminho padrão do projeto (URL)
define("PROJECT_URL", $SERVER_URL);

// Caminhos do css, javascript e imagens
define("JS_PATH", $SERVER_URL . $NOME_PROJETO . '/lib/js');
define("CSS_PATH", $SERVER_URL . $NOME_PROJETO . '/lib/css');
define("IMAGE_PATH", $SERVER_URL . $NOME_PROJETO . '/lib/imagens');

// Boleto
define("IDCONV", "0951538");
define("URL_RETORNO", "http://teste.com.br");
define("URL_INFORMA", "http://teste.com.br");
define("MSG_LOJA", "Simulação teste boleto");
define("DIASPARAPAGAR", "7");
define("TPPAGAMENTO", "2");


