<?php
// created: 2014-12-17 16:02:12
$dictionary["ant_produto"]["fields"]["ant_log_estue_ant_produto"] = array (
  'name' => 'ant_log_estue_ant_produto',
  'type' => 'link',
  'relationship' => 'ant_log_estoque_ant_produto',
  'source' => 'non-db',
  'vname' => 'LBL_ANT_LOG_ESTOQUE_ANT_PRODUTO_FROM_ANT_LOG_ESTOQUE_TITLE',
);
$dictionary["ant_produto"]["fields"]["ant_log_estt_produto_name"] = array (
  'name' => 'ant_log_estt_produto_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_ANT_LOG_ESTOQUE_ANT_PRODUTO_FROM_ANT_LOG_ESTOQUE_TITLE',
  'save' => true,
  'id_name' => 'ant_log_es1933estoque_ida',
  'link' => 'ant_log_estue_ant_produto',
  'table' => 'ant_log_estoque',
  'module' => 'ant_log_estoque',
  'rname' => 'name',
);
$dictionary["ant_produto"]["fields"]["ant_log_es1933estoque_ida"] = array (
  'name' => 'ant_log_es1933estoque_ida',
  'type' => 'link',
  'relationship' => 'ant_log_estoque_ant_produto',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'left',
  'vname' => 'LBL_ANT_LOG_ESTOQUE_ANT_PRODUTO_FROM_ANT_LOG_ESTOQUE_TITLE',
);
