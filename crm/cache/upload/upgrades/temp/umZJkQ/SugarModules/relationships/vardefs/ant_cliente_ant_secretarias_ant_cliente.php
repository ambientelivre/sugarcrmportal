<?php
// created: 2014-12-17 16:02:10
$dictionary["ant_cliente"]["fields"]["ant_clientent_secretarias"] = array (
  'name' => 'ant_clientent_secretarias',
  'type' => 'link',
  'relationship' => 'ant_cliente_ant_secretarias',
  'source' => 'non-db',
  'vname' => 'LBL_ANT_CLIENTE_ANT_SECRETARIAS_FROM_ANT_SECRETARIAS_TITLE',
);
$dictionary["ant_cliente"]["fields"]["ant_clientecretarias_name"] = array (
  'name' => 'ant_clientecretarias_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_ANT_CLIENTE_ANT_SECRETARIAS_FROM_ANT_SECRETARIAS_TITLE',
  'save' => true,
  'id_name' => 'ant_client3388etarias_idb',
  'link' => 'ant_clientent_secretarias',
  'table' => 'ant_secretarias',
  'module' => 'ant_secretarias',
  'rname' => 'name',
);
$dictionary["ant_cliente"]["fields"]["ant_client3388etarias_idb"] = array (
  'name' => 'ant_client3388etarias_idb',
  'type' => 'link',
  'relationship' => 'ant_cliente_ant_secretarias',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'left',
  'vname' => 'LBL_ANT_CLIENTE_ANT_SECRETARIAS_FROM_ANT_SECRETARIAS_TITLE',
);
