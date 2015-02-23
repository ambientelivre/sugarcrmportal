<?php
// created: 2012-04-03 09:42:18
$dictionary["Account"]["fields"]["a__retorno_mento_accounts"] = array (
  'name' => 'a__retorno_mento_accounts',
  'type' => 'link',
  'relationship' => 'a__retorno_de_investimento_accounts',
  'source' => 'non-db',
  'vname' => 'LBL_A__RETORNO_DE_INVESTIMENTO_ACCOUNTS_FROM_A__RETORNO_DE_INVESTIMENTO_TITLE',
);
$dictionary["Account"]["fields"]["a__retorno__accounts_name"] = array (
  'name' => 'a__retorno__accounts_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_A__RETORNO_DE_INVESTIMENTO_ACCOUNTS_FROM_A__RETORNO_DE_INVESTIMENTO_TITLE',
  'save' => true,
  'id_name' => 'a__retorno7b64timento_ida',
  'link' => 'a__retorno_mento_accounts',
  'table' => 'a__retorno_de_investimento',
  'module' => 'A__Retorno_de_investimento',
  'rname' => 'name',
);
$dictionary["Account"]["fields"]["a__retorno7b64timento_ida"] = array (
  'name' => 'a__retorno7b64timento_ida',
  'type' => 'link',
  'relationship' => 'a__retorno_de_investimento_accounts',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'right',
  'vname' => 'LBL_A__RETORNO_DE_INVESTIMENTO_ACCOUNTS_FROM_ACCOUNTS_TITLE',
);
