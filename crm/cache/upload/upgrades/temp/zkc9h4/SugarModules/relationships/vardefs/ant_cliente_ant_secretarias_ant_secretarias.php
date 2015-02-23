<?php
// created: 2014-12-09 15:48:26
$dictionary["ant_secretarias"]["fields"]["ant_clientent_secretarias"] = array (
  'name' => 'ant_clientent_secretarias',
  'type' => 'link',
  'relationship' => 'ant_cliente_ant_secretarias',
  'source' => 'non-db',
  'vname' => 'LBL_ANT_CLIENTE_ANT_SECRETARIAS_FROM_ANT_CLIENTE_TITLE',
);
$dictionary["ant_secretarias"]["fields"]["ant_clientecretarias_name"] = array (
  'name' => 'ant_clientecretarias_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_ANT_CLIENTE_ANT_SECRETARIAS_FROM_ANT_CLIENTE_TITLE',
  'save' => true,
  'id_name' => 'ant_client895acliente_ida',
  'link' => 'ant_clientent_secretarias',
  'table' => 'ant_cliente',
  'module' => 'ant_cliente',
  'rname' => 'name',
);
$dictionary["ant_secretarias"]["fields"]["ant_client895acliente_ida"] = array (
  'name' => 'ant_client895acliente_ida',
  'type' => 'link',
  'relationship' => 'ant_cliente_ant_secretarias',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'left',
  'vname' => 'LBL_ANT_CLIENTE_ANT_SECRETARIAS_FROM_ANT_CLIENTE_TITLE',
);
