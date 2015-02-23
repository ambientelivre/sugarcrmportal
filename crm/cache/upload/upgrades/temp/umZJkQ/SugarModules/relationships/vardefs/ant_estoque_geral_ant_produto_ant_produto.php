<?php
// created: 2014-12-17 16:02:11
$dictionary["ant_produto"]["fields"]["ant_estoqueal_ant_produto"] = array (
  'name' => 'ant_estoqueal_ant_produto',
  'type' => 'link',
  'relationship' => 'ant_estoque_geral_ant_produto',
  'source' => 'non-db',
  'vname' => 'LBL_ANT_ESTOQUE_GERAL_ANT_PRODUTO_FROM_ANT_ESTOQUE_GERAL_TITLE',
);
$dictionary["ant_produto"]["fields"]["ant_estoquet_produto_name"] = array (
  'name' => 'ant_estoquet_produto_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_ANT_ESTOQUE_GERAL_ANT_PRODUTO_FROM_ANT_ESTOQUE_GERAL_TITLE',
  'save' => true,
  'id_name' => 'ant_estoqu8380e_geral_ida',
  'link' => 'ant_estoqueal_ant_produto',
  'table' => 'ant_estoque_geral',
  'module' => 'ant_estoque_geral',
  'rname' => 'name',
);
$dictionary["ant_produto"]["fields"]["ant_estoqu8380e_geral_ida"] = array (
  'name' => 'ant_estoqu8380e_geral_ida',
  'type' => 'link',
  'relationship' => 'ant_estoque_geral_ant_produto',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'left',
  'vname' => 'LBL_ANT_ESTOQUE_GERAL_ANT_PRODUTO_FROM_ANT_ESTOQUE_GERAL_TITLE',
);
