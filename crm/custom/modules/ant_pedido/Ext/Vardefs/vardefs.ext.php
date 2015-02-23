<?php 
 //WARNING: The contents of this file are auto-generated


// created: 2014-12-23 09:50:36
$dictionary["ant_pedido"]["fields"]["ant_pedido_ant_regionais"] = array (
  'name' => 'ant_pedido_ant_regionais',
  'type' => 'link',
  'relationship' => 'ant_pedido_ant_regionais',
  'source' => 'non-db',
  'side' => 'right',
  'vname' => 'LBL_ANT_PEDIDO_ANT_REGIONAIS_FROM_ANT_REGIONAIS_TITLE',
);


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


// created: 2014-12-23 09:50:36
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


// created: 2014-12-23 09:50:36
$dictionary["ant_pedido"]["fields"]["ant_pedido_nt_regionais_1"] = array (
  'name' => 'ant_pedido_nt_regionais_1',
  'type' => 'link',
  'relationship' => 'ant_pedido_ant_regionais_1',
  'source' => 'non-db',
  'side' => 'right',
  'vname' => 'LBL_ANT_PEDIDO_ANT_REGIONAIS_1_FROM_ANT_REGIONAIS_TITLE',
);


// created: 2014-12-23 09:50:36
$dictionary["ant_pedido"]["fields"]["ant_pedido__lista_pedidos"] = array (
  'name' => 'ant_pedido__lista_pedidos',
  'type' => 'link',
  'relationship' => 'ant_pedido_ant_lista_pedidos',
  'source' => 'non-db',
  'vname' => 'LBL_ANT_PEDIDO_ANT_LISTA_PEDIDOS_FROM_ANT_LISTA_PEDIDOS_TITLE',
);

?>