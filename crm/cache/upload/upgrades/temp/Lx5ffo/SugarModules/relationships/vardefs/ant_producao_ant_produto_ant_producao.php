<?php
// created: 2014-11-27 09:33:51
$dictionary["ant_producao"]["fields"]["ant_producao_ant_produto"] = array (
  'name' => 'ant_producao_ant_produto',
  'type' => 'link',
  'relationship' => 'ant_producao_ant_produto',
  'source' => 'non-db',
  'vname' => 'LBL_ANT_PRODUCAO_ANT_PRODUTO_FROM_ANT_PRODUTO_TITLE',
);
$dictionary["ant_producao"]["fields"]["ant_producat_produto_name"] = array (
  'name' => 'ant_producat_produto_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_ANT_PRODUCAO_ANT_PRODUTO_FROM_ANT_PRODUTO_TITLE',
  'save' => true,
  'id_name' => 'ant_produc7cb0produto_idb',
  'link' => 'ant_producao_ant_produto',
  'table' => 'ant_produto',
  'module' => 'ant_produto',
  'rname' => 'name',
);
$dictionary["ant_producao"]["fields"]["ant_produc7cb0produto_idb"] = array (
  'name' => 'ant_produc7cb0produto_idb',
  'type' => 'link',
  'relationship' => 'ant_producao_ant_produto',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'left',
  'vname' => 'LBL_ANT_PRODUCAO_ANT_PRODUTO_FROM_ANT_PRODUTO_TITLE',
);
