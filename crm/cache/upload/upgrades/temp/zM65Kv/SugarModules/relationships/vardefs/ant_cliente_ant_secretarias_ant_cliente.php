<?php
// created: 2014-11-27 09:01:49
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
  'id_name' => 'ant_client1698etarias_ida',
  'link' => 'ant_clientent_secretarias',
  'table' => 'ant_secretarias',
  'module' => 'ant_secretarias',
  'rname' => 'name',
);
$dictionary["ant_cliente"]["fields"]["ant_client1698etarias_ida"] = array (
  'name' => 'ant_client1698etarias_ida',
  'type' => 'link',
  'relationship' => 'ant_cliente_ant_secretarias',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'right',
  'vname' => 'LBL_ANT_CLIENTE_ANT_SECRETARIAS_FROM_ANT_CLIENTE_TITLE',
);
