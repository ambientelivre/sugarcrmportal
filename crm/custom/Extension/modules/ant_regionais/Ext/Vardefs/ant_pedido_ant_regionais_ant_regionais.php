<?php
// created: 2014-12-23 09:50:36
$dictionary["ant_regionais"]["fields"]["ant_pedido_ant_regionais"] = array (
  'name' => 'ant_pedido_ant_regionais',
  'type' => 'link',
  'relationship' => 'ant_pedido_ant_regionais',
  'source' => 'non-db',
  'vname' => 'LBL_ANT_PEDIDO_ANT_REGIONAIS_FROM_ANT_PEDIDO_TITLE',
);
$dictionary["ant_regionais"]["fields"]["ant_pedido_regionais_name"] = array (
  'name' => 'ant_pedido_regionais_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_ANT_PEDIDO_ANT_REGIONAIS_FROM_ANT_PEDIDO_TITLE',
  'save' => true,
  'id_name' => 'ant_pedido17ef_pedido_ida',
  'link' => 'ant_pedido_ant_regionais',
  'table' => 'ant_pedido',
  'module' => 'ant_pedido',
  'rname' => 'name',
);
$dictionary["ant_regionais"]["fields"]["ant_pedido17ef_pedido_ida"] = array (
  'name' => 'ant_pedido17ef_pedido_ida',
  'type' => 'link',
  'relationship' => 'ant_pedido_ant_regionais',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'right',
  'vname' => 'LBL_ANT_PEDIDO_ANT_REGIONAIS_FROM_ANT_REGIONAIS_TITLE',
);
