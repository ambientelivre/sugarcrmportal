<?php
// created: 2014-12-09 15:48:29
$dictionary["ant_secretarias"]["fields"]["ant_pedido_nt_secretarias"] = array (
  'name' => 'ant_pedido_nt_secretarias',
  'type' => 'link',
  'relationship' => 'ant_pedido_ant_secretarias',
  'source' => 'non-db',
  'vname' => 'LBL_ANT_PEDIDO_ANT_SECRETARIAS_FROM_ANT_PEDIDO_TITLE',
);
$dictionary["ant_secretarias"]["fields"]["ant_pedido_cretarias_name"] = array (
  'name' => 'ant_pedido_cretarias_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_ANT_PEDIDO_ANT_SECRETARIAS_FROM_ANT_PEDIDO_TITLE',
  'save' => true,
  'id_name' => 'ant_pedido7367_pedido_ida',
  'link' => 'ant_pedido_nt_secretarias',
  'table' => 'ant_pedido',
  'module' => 'ant_pedido',
  'rname' => 'name',
);
$dictionary["ant_secretarias"]["fields"]["ant_pedido7367_pedido_ida"] = array (
  'name' => 'ant_pedido7367_pedido_ida',
  'type' => 'link',
  'relationship' => 'ant_pedido_ant_secretarias',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'left',
  'vname' => 'LBL_ANT_PEDIDO_ANT_SECRETARIAS_FROM_ANT_PEDIDO_TITLE',
);
