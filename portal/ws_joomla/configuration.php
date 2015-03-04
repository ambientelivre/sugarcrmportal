<?php
/*
ARQUIVO DE CONFIGUTAÇÃO DO SISTEMA
ALTERE AS VARIÁVEIS DE ACORDO COM A SUA NESCESSIDADE.
RENOMEIE ESTE ARQUIVO PARA: configuration.php
*/

// ADICIONE AQUI A URL DO SISTEMA ERP
$SERVER_URL = "http://localhost/tecpar/sugarcrmportal/portal/";
// Localhost: http://localhost/tecpar/sugarcrmportal/portal/'
// Online: http://sugar.tecpar.br/portaldocliente/
// Por algum motivo JURI::base() não funciona nesse caso...

$CONFIG_URL = "";
$NOME_PROJETO = 'ws_joomla';


//DEFINIÇÃO DE CONSTANTES DO PROJETO
// Controller
define("CONTROL_PATH", $SERVER_URL . $NOME_PROJETO . '/ctrl');

// View
define("VIEW_PATH", $SERVER_URL . $NOME_PROJETO . '/view');

// Libs (javascript, css, imagens, etc.)
define("LIB_PATH", $SERVER_URL . $NOME_PROJETO . '/lib');

// Includes
define("INCLUDE_PATH", $SERVER_URL . $NOME_PROJETO . '/lib/includes');

// BoletoPhp
define("BOLETOPHP_PATH", $SERVER_URL . $NOME_PROJETO .  '/lib/boleto_php/');

// Caminho do projeto + nome do projeto
define("PROJECT_PATH", $SERVER_URL . $NOME_PROJETO);

// Caminho padrão do projeto (URL)
define("PROJECT_URL", $SERVER_URL);

// Caminhos do css, javascript e imagens
define("JS_PATH", $SERVER_URL . $NOME_PROJETO . '/lib/js');
define("CSS_PATH", $SERVER_URL . $NOME_PROJETO . '/lib/css');
define("IMAGE_PATH", $SERVER_URL . $NOME_PROJETO . '/lib/imagens');