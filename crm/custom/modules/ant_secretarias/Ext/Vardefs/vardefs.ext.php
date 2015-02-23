<?php 
 //WARNING: The contents of this file are auto-generated


// created: 2014-12-23 09:50:33
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


// created: 2014-12-23 09:50:32
$dictionary["ant_secretarias"]["fields"]["ant_secretarias_contacts"] = array (
  'name' => 'ant_secretarias_contacts',
  'type' => 'link',
  'relationship' => 'ant_secretarias_contacts',
  'source' => 'non-db',
  'vname' => 'LBL_ANT_SECRETARIAS_CONTACTS_FROM_CONTACTS_TITLE',
);


// created: 2014-12-23 09:50:36
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


// created: 2014-12-23 09:50:36
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


// created: 2014-12-23 09:50:32
$dictionary["ant_secretarias"]["fields"]["ant_secreta_ant_regionais"] = array (
  'name' => 'ant_secreta_ant_regionais',
  'type' => 'link',
  'relationship' => 'ant_secretarias_ant_regionais',
  'source' => 'non-db',
  'vname' => 'LBL_ANT_SECRETARIAS_ANT_REGIONAIS_FROM_ANT_REGIONAIS_TITLE',
);
$dictionary["ant_secretarias"]["fields"]["ant_secretaregionais_name"] = array (
  'name' => 'ant_secretaregionais_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_ANT_SECRETARIAS_ANT_REGIONAIS_FROM_ANT_REGIONAIS_TITLE',
  'save' => true,
  'id_name' => 'ant_secretdacfgionais_ida',
  'link' => 'ant_secreta_ant_regionais',
  'table' => 'ant_regionais',
  'module' => 'ant_regionais',
  'rname' => 'name',
);
$dictionary["ant_secretarias"]["fields"]["ant_secretdacfgionais_ida"] = array (
  'name' => 'ant_secretdacfgionais_ida',
  'type' => 'link',
  'relationship' => 'ant_secretarias_ant_regionais',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'right',
  'vname' => 'LBL_ANT_SECRETARIAS_ANT_REGIONAIS_FROM_ANT_SECRETARIAS_TITLE',
);


// created: 2014-12-23 09:50:34
$dictionary["ant_secretarias"]["fields"]["ant_estoquent_secretarias"] = array (
  'name' => 'ant_estoquent_secretarias',
  'type' => 'link',
  'relationship' => 'ant_estoque_geral_ant_secretarias',
  'source' => 'non-db',
  'vname' => 'LBL_ANT_ESTOQUE_GERAL_ANT_SECRETARIAS_FROM_ANT_ESTOQUE_GERAL_TITLE',
);
$dictionary["ant_secretarias"]["fields"]["ant_estoquecretarias_name"] = array (
  'name' => 'ant_estoquecretarias_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_ANT_ESTOQUE_GERAL_ANT_SECRETARIAS_FROM_ANT_ESTOQUE_GERAL_TITLE',
  'save' => true,
  'id_name' => 'ant_estoqu540ce_geral_ida',
  'link' => 'ant_estoquent_secretarias',
  'table' => 'ant_estoque_geral',
  'module' => 'ant_estoque_geral',
  'rname' => 'name',
);
$dictionary["ant_secretarias"]["fields"]["ant_estoqu540ce_geral_ida"] = array (
  'name' => 'ant_estoqu540ce_geral_ida',
  'type' => 'link',
  'relationship' => 'ant_estoque_geral_ant_secretarias',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'left',
  'vname' => 'LBL_ANT_ESTOQUE_GERAL_ANT_SECRETARIAS_FROM_ANT_ESTOQUE_GERAL_TITLE',
);


// created: 2014-12-23 09:50:35
$dictionary["ant_secretarias"]["fields"]["ant_inutilint_secretarias"] = array (
  'name' => 'ant_inutilint_secretarias',
  'type' => 'link',
  'relationship' => 'ant_inutilizado_ant_secretarias',
  'source' => 'non-db',
  'vname' => 'LBL_ANT_INUTILIZADO_ANT_SECRETARIAS_FROM_ANT_INUTILIZADO_TITLE',
);
$dictionary["ant_secretarias"]["fields"]["ant_inutilicretarias_name"] = array (
  'name' => 'ant_inutilicretarias_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_ANT_INUTILIZADO_ANT_SECRETARIAS_FROM_ANT_INUTILIZADO_TITLE',
  'save' => true,
  'id_name' => 'ant_inutil6267ilizado_ida',
  'link' => 'ant_inutilint_secretarias',
  'table' => 'ant_inutilizado',
  'module' => 'ant_inutilizado',
  'rname' => 'name',
);
$dictionary["ant_secretarias"]["fields"]["ant_inutil6267ilizado_ida"] = array (
  'name' => 'ant_inutil6267ilizado_ida',
  'type' => 'link',
  'relationship' => 'ant_inutilizado_ant_secretarias',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'left',
  'vname' => 'LBL_ANT_INUTILIZADO_ANT_SECRETARIAS_FROM_ANT_INUTILIZADO_TITLE',
);

?>