<?php 
 //WARNING: The contents of this file are auto-generated


// created: 2014-12-23 09:50:33
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


// created: 2014-12-23 09:50:33
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

?>