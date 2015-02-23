<?php
// created: 2014-12-23 09:50:36
$dictionary["ant_pedido"]["fields"]["ant_pedido_nt_secretarias"] = array (
  'name' => 'ant_pedido_nt_secretarias',
  'type' => 'link',
  'relationship' => 'ant_pedido_ant_secretarias',
  'source' => 'non-db',
  'vname' => 'LBL_ANT_PEDIDO_ANT_SECRETARIAS_FROM_ANT_SECRETARIAS_TITLE',
);
$dictionary["ant_pedido"]["fields"]["ant_pedido_cretarias_name"] = array (
  'name' => 'ant_pedido_cretarias_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_ANT_PEDIDO_ANT_SECRETARIAS_FROM_ANT_SECRETARIAS_TITLE',
  'save' => true,
  'id_name' => 'ant_pedido14e4etarias_idb',
  'link' => 'ant_pedido_nt_secretarias',
  'table' => 'ant_secretarias',
  'module' => 'ant_secretarias',
  'rname' => 'name',
);
$dictionary["ant_pedido"]["fields"]["ant_pedido14e4etarias_idb"] = array (
  'name' => 'ant_pedido14e4etarias_idb',
  'type' => 'link',
  'relationship' => 'ant_pedido_ant_secretarias',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'left',
  'vname' => 'LBL_ANT_PEDIDO_ANT_SECRETARIAS_FROM_ANT_SECRETARIAS_TITLE',
);
