<?php
// created: 2014-12-17 16:02:10
$dictionary["ant_cliente"]["fields"]["ant_cliente_ant_regionais"] = array (
  'name' => 'ant_cliente_ant_regionais',
  'type' => 'link',
  'relationship' => 'ant_cliente_ant_regionais',
  'source' => 'non-db',
  'vname' => 'LBL_ANT_CLIENTE_ANT_REGIONAIS_FROM_ANT_REGIONAIS_TITLE',
);
$dictionary["ant_cliente"]["fields"]["ant_clienteregionais_name"] = array (
  'name' => 'ant_clienteregionais_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_ANT_CLIENTE_ANT_REGIONAIS_FROM_ANT_REGIONAIS_TITLE',
  'save' => true,
  'id_name' => 'ant_clientcab3gionais_idb',
  'link' => 'ant_cliente_ant_regionais',
  'table' => 'ant_regionais',
  'module' => 'ant_regionais',
  'rname' => 'name',
);
$dictionary["ant_cliente"]["fields"]["ant_clientcab3gionais_idb"] = array (
  'name' => 'ant_clientcab3gionais_idb',
  'type' => 'link',
  'relationship' => 'ant_cliente_ant_regionais',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'left',
  'vname' => 'LBL_ANT_CLIENTE_ANT_REGIONAIS_FROM_ANT_REGIONAIS_TITLE',
);
