<?php
// created: 2014-12-17 16:02:13
$dictionary["ant_secretarias"]["fields"]["ant_pedido__secretarias_1"] = array (
  'name' => 'ant_pedido__secretarias_1',
  'type' => 'link',
  'relationship' => 'ant_pedido_ant_secretarias_1',
  'source' => 'non-db',
  'vname' => 'LBL_ANT_PEDIDO_ANT_SECRETARIAS_1_FROM_ANT_PEDIDO_TITLE',
);
$dictionary["ant_secretarias"]["fields"]["ant_pedido_etarias_1_name"] = array (
  'name' => 'ant_pedido_etarias_1_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_ANT_PEDIDO_ANT_SECRETARIAS_1_FROM_ANT_PEDIDO_TITLE',
  'save' => true,
  'id_name' => 'ant_pedidof689_pedido_ida',
  'link' => 'ant_pedido__secretarias_1',
  'table' => 'ant_pedido',
  'module' => 'ant_pedido',
  'rname' => 'name',
);
$dictionary["ant_secretarias"]["fields"]["ant_pedidof689_pedido_ida"] = array (
  'name' => 'ant_pedidof689_pedido_ida',
  'type' => 'link',
  'relationship' => 'ant_pedido_ant_secretarias_1',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'left',
  'vname' => 'LBL_ANT_PEDIDO_ANT_SECRETARIAS_1_FROM_ANT_PEDIDO_TITLE',
);
