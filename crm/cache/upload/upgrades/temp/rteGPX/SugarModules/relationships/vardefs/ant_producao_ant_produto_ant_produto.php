<?php
// created: 2014-11-27 09:33:51
$dictionary["ant_produto"]["fields"]["ant_producao_ant_produto"] = array (
  'name' => 'ant_producao_ant_produto',
  'type' => 'link',
  'relationship' => 'ant_producao_ant_produto',
  'source' => 'non-db',
  'vname' => 'LBL_ANT_PRODUCAO_ANT_PRODUTO_FROM_ANT_PRODUCAO_TITLE',
);
$dictionary["ant_produto"]["fields"]["ant_producat_produto_name"] = array (
  'name' => 'ant_producat_produto_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_ANT_PRODUCAO_ANT_PRODUTO_FROM_ANT_PRODUCAO_TITLE',
  'save' => true,
  'id_name' => 'ant_producf7ecroducao_ida',
  'link' => 'ant_producao_ant_produto',
  'table' => 'ant_producao',
  'module' => 'ant_producao',
  'rname' => 'name',
);
$dictionary["ant_produto"]["fields"]["ant_producf7ecroducao_ida"] = array (
  'name' => 'ant_producf7ecroducao_ida',
  'type' => 'link',
  'relationship' => 'ant_producao_ant_produto',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'left',
  'vname' => 'LBL_ANT_PRODUCAO_ANT_PRODUTO_FROM_ANT_PRODUCAO_TITLE',
);
