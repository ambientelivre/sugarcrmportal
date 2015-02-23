<?php
// created: 2014-12-09 15:48:26
$dictionary["ant_estoque_geral"]["fields"]["ant_estoquent_secretarias"] = array (
  'name' => 'ant_estoquent_secretarias',
  'type' => 'link',
  'relationship' => 'ant_estoque_geral_ant_secretarias',
  'source' => 'non-db',
  'vname' => 'LBL_ANT_ESTOQUE_GERAL_ANT_SECRETARIAS_FROM_ANT_SECRETARIAS_TITLE',
);
$dictionary["ant_estoque_geral"]["fields"]["ant_estoquecretarias_name"] = array (
  'name' => 'ant_estoquecretarias_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_ANT_ESTOQUE_GERAL_ANT_SECRETARIAS_FROM_ANT_SECRETARIAS_TITLE',
  'save' => true,
  'id_name' => 'ant_estoqu5de3etarias_idb',
  'link' => 'ant_estoquent_secretarias',
  'table' => 'ant_secretarias',
  'module' => 'ant_secretarias',
  'rname' => 'name',
);
$dictionary["ant_estoque_geral"]["fields"]["ant_estoqu5de3etarias_idb"] = array (
  'name' => 'ant_estoqu5de3etarias_idb',
  'type' => 'link',
  'relationship' => 'ant_estoque_geral_ant_secretarias',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'left',
  'vname' => 'LBL_ANT_ESTOQUE_GERAL_ANT_SECRETARIAS_FROM_ANT_SECRETARIAS_TITLE',
);
