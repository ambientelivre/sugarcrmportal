<?php
// created: 2014-12-17 16:02:12
$dictionary["ant_log_estoque"]["fields"]["ant_log_estue_ant_produto"] = array (
  'name' => 'ant_log_estue_ant_produto',
  'type' => 'link',
  'relationship' => 'ant_log_estoque_ant_produto',
  'source' => 'non-db',
  'vname' => 'LBL_ANT_LOG_ESTOQUE_ANT_PRODUTO_FROM_ANT_PRODUTO_TITLE',
);
$dictionary["ant_log_estoque"]["fields"]["ant_log_estt_produto_name"] = array (
  'name' => 'ant_log_estt_produto_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_ANT_LOG_ESTOQUE_ANT_PRODUTO_FROM_ANT_PRODUTO_TITLE',
  'save' => true,
  'id_name' => 'ant_log_es537eproduto_idb',
  'link' => 'ant_log_estue_ant_produto',
  'table' => 'ant_produto',
  'module' => 'ant_produto',
  'rname' => 'name',
);
$dictionary["ant_log_estoque"]["fields"]["ant_log_es537eproduto_idb"] = array (
  'name' => 'ant_log_es537eproduto_idb',
  'type' => 'link',
  'relationship' => 'ant_log_estoque_ant_produto',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'left',
  'vname' => 'LBL_ANT_LOG_ESTOQUE_ANT_PRODUTO_FROM_ANT_PRODUTO_TITLE',
);
