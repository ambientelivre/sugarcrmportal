<?php
// created: 2014-09-01 17:23:54
$dictionary["ant_produto"]["fields"]["ant_produto_estoque_geral"] = array (
  'name' => 'ant_produto_estoque_geral',
  'type' => 'link',
  'relationship' => 'ant_produto_ant_estoque_geral',
  'source' => 'non-db',
  'vname' => 'LBL_ANT_PRODUTO_ANT_ESTOQUE_GERAL_FROM_ANT_ESTOQUE_GERAL_TITLE',
);
$dictionary["ant_produto"]["fields"]["ant_produtoque_geral_name"] = array (
  'name' => 'ant_produtoque_geral_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_ANT_PRODUTO_ANT_ESTOQUE_GERAL_FROM_ANT_ESTOQUE_GERAL_TITLE',
  'save' => true,
  'id_name' => 'ant_produteb18e_geral_ida',
  'link' => 'ant_produto_estoque_geral',
  'table' => 'ant_estoque_geral',
  'module' => 'ant_estoque_geral',
  'rname' => 'name',
);
$dictionary["ant_produto"]["fields"]["ant_produteb18e_geral_ida"] = array (
  'name' => 'ant_produteb18e_geral_ida',
  'type' => 'link',
  'relationship' => 'ant_produto_ant_estoque_geral',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'right',
  'vname' => 'LBL_ANT_PRODUTO_ANT_ESTOQUE_GERAL_FROM_ANT_PRODUTO_TITLE',
);
