<?php
// created: 2014-11-27 11:26:41
$dictionary["ant_regionais"]["fields"]["ant_cliente_ant_regionais"] = array (
  'name' => 'ant_cliente_ant_regionais',
  'type' => 'link',
  'relationship' => 'ant_cliente_ant_regionais',
  'source' => 'non-db',
  'vname' => 'LBL_ANT_CLIENTE_ANT_REGIONAIS_FROM_ANT_CLIENTE_TITLE',
);
$dictionary["ant_regionais"]["fields"]["ant_clienteregionais_name"] = array (
  'name' => 'ant_clienteregionais_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_ANT_CLIENTE_ANT_REGIONAIS_FROM_ANT_CLIENTE_TITLE',
  'save' => true,
  'id_name' => 'ant_client71d2cliente_ida',
  'link' => 'ant_cliente_ant_regionais',
  'table' => 'ant_cliente',
  'module' => 'ant_cliente',
  'rname' => 'name',
);
$dictionary["ant_regionais"]["fields"]["ant_client71d2cliente_ida"] = array (
  'name' => 'ant_client71d2cliente_ida',
  'type' => 'link',
  'relationship' => 'ant_cliente_ant_regionais',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'left',
  'vname' => 'LBL_ANT_CLIENTE_ANT_REGIONAIS_FROM_ANT_CLIENTE_TITLE',
);
