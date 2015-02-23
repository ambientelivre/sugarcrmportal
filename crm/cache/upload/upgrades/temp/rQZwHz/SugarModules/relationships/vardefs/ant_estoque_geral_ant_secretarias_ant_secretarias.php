<?php
// created: 2014-11-27 11:41:21
$dictionary["ant_secretarias"]["fields"]["ant_estoquent_secretarias"] = array (
  'name' => 'ant_estoquent_secretarias',
  'type' => 'link',
  'relationship' => 'ant_estoque_geral_ant_secretarias',
  'source' => 'non-db',
  'vname' => 'LBL_ANT_ESTOQUE_GERAL_ANT_SECRETARIAS_FROM_ANT_ESTOQUE_GERAL_TITLE',
);
$dictionary["ant_secretarias"]["fields"]["ant_estoquecretarias_name"] = array (
  'name' => 'ant_estoquecretarias_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_ANT_ESTOQUE_GERAL_ANT_SECRETARIAS_FROM_ANT_ESTOQUE_GERAL_TITLE',
  'save' => true,
  'id_name' => 'ant_estoqu540ce_geral_ida',
  'link' => 'ant_estoquent_secretarias',
  'table' => 'ant_estoque_geral',
  'module' => 'ant_estoque_geral',
  'rname' => 'name',
);
$dictionary["ant_secretarias"]["fields"]["ant_estoqu540ce_geral_ida"] = array (
  'name' => 'ant_estoqu540ce_geral_ida',
  'type' => 'link',
  'relationship' => 'ant_estoque_geral_ant_secretarias',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'left',
  'vname' => 'LBL_ANT_ESTOQUE_GERAL_ANT_SECRETARIAS_FROM_ANT_ESTOQUE_GERAL_TITLE',
);
