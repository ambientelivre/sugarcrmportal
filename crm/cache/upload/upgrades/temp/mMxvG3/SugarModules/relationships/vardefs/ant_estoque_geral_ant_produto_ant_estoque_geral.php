<?php
// created: 2014-12-09 15:48:26
$dictionary["ant_estoque_geral"]["fields"]["ant_estoqueal_ant_produto"] = array (
  'name' => 'ant_estoqueal_ant_produto',
  'type' => 'link',
  'relationship' => 'ant_estoque_geral_ant_produto',
  'source' => 'non-db',
  'vname' => 'LBL_ANT_ESTOQUE_GERAL_ANT_PRODUTO_FROM_ANT_PRODUTO_TITLE',
);
$dictionary["ant_estoque_geral"]["fields"]["ant_estoquet_produto_name"] = array (
  'name' => 'ant_estoquet_produto_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_ANT_ESTOQUE_GERAL_ANT_PRODUTO_FROM_ANT_PRODUTO_TITLE',
  'save' => true,
  'id_name' => 'ant_estoqu70a5produto_idb',
  'link' => 'ant_estoqueal_ant_produto',
  'table' => 'ant_produto',
  'module' => 'ant_produto',
  'rname' => 'name',
);
$dictionary["ant_estoque_geral"]["fields"]["ant_estoqu70a5produto_idb"] = array (
  'name' => 'ant_estoqu70a5produto_idb',
  'type' => 'link',
  'relationship' => 'ant_estoque_geral_ant_produto',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'left',
  'vname' => 'LBL_ANT_ESTOQUE_GERAL_ANT_PRODUTO_FROM_ANT_PRODUTO_TITLE',
);
