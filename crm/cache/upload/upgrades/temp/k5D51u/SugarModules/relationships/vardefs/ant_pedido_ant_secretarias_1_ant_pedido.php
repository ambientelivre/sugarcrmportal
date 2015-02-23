<?php
// created: 2014-12-17 16:02:13
$dictionary["ant_pedido"]["fields"]["ant_pedido__secretarias_1"] = array (
  'name' => 'ant_pedido__secretarias_1',
  'type' => 'link',
  'relationship' => 'ant_pedido_ant_secretarias_1',
  'source' => 'non-db',
  'vname' => 'LBL_ANT_PEDIDO_ANT_SECRETARIAS_1_FROM_ANT_SECRETARIAS_TITLE',
);
$dictionary["ant_pedido"]["fields"]["ant_pedido_etarias_1_name"] = array (
  'name' => 'ant_pedido_etarias_1_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_ANT_PEDIDO_ANT_SECRETARIAS_1_FROM_ANT_SECRETARIAS_TITLE',
  'save' => true,
  'id_name' => 'ant_pedidoc70eetarias_idb',
  'link' => 'ant_pedido__secretarias_1',
  'table' => 'ant_secretarias',
  'module' => 'ant_secretarias',
  'rname' => 'name',
);
$dictionary["ant_pedido"]["fields"]["ant_pedidoc70eetarias_idb"] = array (
  'name' => 'ant_pedidoc70eetarias_idb',
  'type' => 'link',
  'relationship' => 'ant_pedido_ant_secretarias_1',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'left',
  'vname' => 'LBL_ANT_PEDIDO_ANT_SECRETARIAS_1_FROM_ANT_SECRETARIAS_TITLE',
);
