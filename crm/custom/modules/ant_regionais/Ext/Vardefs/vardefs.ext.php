<?php 
 //WARNING: The contents of this file are auto-generated


// created: 2014-12-23 09:50:33
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


// created: 2014-12-23 09:50:36
$dictionary["ant_regionais"]["fields"]["ant_pedido_nt_regionais_1"] = array (
  'name' => 'ant_pedido_nt_regionais_1',
  'type' => 'link',
  'relationship' => 'ant_pedido_ant_regionais_1',
  'source' => 'non-db',
  'vname' => 'LBL_ANT_PEDIDO_ANT_REGIONAIS_1_FROM_ANT_PEDIDO_TITLE',
);
$dictionary["ant_regionais"]["fields"]["ant_pedido_gionais_1_name"] = array (
  'name' => 'ant_pedido_gionais_1_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_ANT_PEDIDO_ANT_REGIONAIS_1_FROM_ANT_PEDIDO_TITLE',
  'save' => true,
  'id_name' => 'ant_pedido4dba_pedido_ida',
  'link' => 'ant_pedido_nt_regionais_1',
  'table' => 'ant_pedido',
  'module' => 'ant_pedido',
  'rname' => 'name',
);
$dictionary["ant_regionais"]["fields"]["ant_pedido4dba_pedido_ida"] = array (
  'name' => 'ant_pedido4dba_pedido_ida',
  'type' => 'link',
  'relationship' => 'ant_pedido_ant_regionais_1',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'right',
  'vname' => 'LBL_ANT_PEDIDO_ANT_REGIONAIS_1_FROM_ANT_REGIONAIS_TITLE',
);


// created: 2014-12-23 09:50:32
$dictionary["ant_regionais"]["fields"]["ant_secreta_ant_regionais"] = array (
  'name' => 'ant_secreta_ant_regionais',
  'type' => 'link',
  'relationship' => 'ant_secretarias_ant_regionais',
  'source' => 'non-db',
  'side' => 'right',
  'vname' => 'LBL_ANT_SECRETARIAS_ANT_REGIONAIS_FROM_ANT_SECRETARIAS_TITLE',
);


// created: 2014-12-23 09:50:34
$dictionary["ant_regionais"]["fields"]["ant_estoque_ant_regionais"] = array (
  'name' => 'ant_estoque_ant_regionais',
  'type' => 'link',
  'relationship' => 'ant_estoque_geral_ant_regionais',
  'source' => 'non-db',
  'vname' => 'LBL_ANT_ESTOQUE_GERAL_ANT_REGIONAIS_FROM_ANT_ESTOQUE_GERAL_TITLE',
);
$dictionary["ant_regionais"]["fields"]["ant_estoqueregionais_name"] = array (
  'name' => 'ant_estoqueregionais_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_ANT_ESTOQUE_GERAL_ANT_REGIONAIS_FROM_ANT_ESTOQUE_GERAL_TITLE',
  'save' => true,
  'id_name' => 'ant_estoqu7abae_geral_ida',
  'link' => 'ant_estoque_ant_regionais',
  'table' => 'ant_estoque_geral',
  'module' => 'ant_estoque_geral',
  'rname' => 'name',
);
$dictionary["ant_regionais"]["fields"]["ant_estoqu7abae_geral_ida"] = array (
  'name' => 'ant_estoqu7abae_geral_ida',
  'type' => 'link',
  'relationship' => 'ant_estoque_geral_ant_regionais',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'left',
  'vname' => 'LBL_ANT_ESTOQUE_GERAL_ANT_REGIONAIS_FROM_ANT_ESTOQUE_GERAL_TITLE',
);


// created: 2014-12-23 09:50:35
$dictionary["ant_regionais"]["fields"]["ant_regionais_contacts"] = array (
  'name' => 'ant_regionais_contacts',
  'type' => 'link',
  'relationship' => 'ant_regionais_contacts',
  'source' => 'non-db',
  'vname' => 'LBL_ANT_REGIONAIS_CONTACTS_FROM_CONTACTS_TITLE',
);


// created: 2014-12-23 09:50:34
$dictionary["ant_regionais"]["fields"]["ant_inutili_ant_regionais"] = array (
  'name' => 'ant_inutili_ant_regionais',
  'type' => 'link',
  'relationship' => 'ant_inutilizado_ant_regionais',
  'source' => 'non-db',
  'vname' => 'LBL_ANT_INUTILIZADO_ANT_REGIONAIS_FROM_ANT_INUTILIZADO_TITLE',
);
$dictionary["ant_regionais"]["fields"]["ant_inutiliregionais_name"] = array (
  'name' => 'ant_inutiliregionais_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_ANT_INUTILIZADO_ANT_REGIONAIS_FROM_ANT_INUTILIZADO_TITLE',
  'save' => true,
  'id_name' => 'ant_inutil66e6ilizado_ida',
  'link' => 'ant_inutili_ant_regionais',
  'table' => 'ant_inutilizado',
  'module' => 'ant_inutilizado',
  'rname' => 'name',
);
$dictionary["ant_regionais"]["fields"]["ant_inutil66e6ilizado_ida"] = array (
  'name' => 'ant_inutil66e6ilizado_ida',
  'type' => 'link',
  'relationship' => 'ant_inutilizado_ant_regionais',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'left',
  'vname' => 'LBL_ANT_INUTILIZADO_ANT_REGIONAIS_FROM_ANT_INUTILIZADO_TITLE',
);

?>