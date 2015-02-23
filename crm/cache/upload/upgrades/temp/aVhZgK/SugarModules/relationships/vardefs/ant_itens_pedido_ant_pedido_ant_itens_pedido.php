<?php
// created: 2014-09-12 15:48:21
$dictionary["ant_itens_pedido"]["fields"]["ant_itens_pido_ant_pedido"] = array (
  'name' => 'ant_itens_pido_ant_pedido',
  'type' => 'link',
  'relationship' => 'ant_itens_pedido_ant_pedido',
  'source' => 'non-db',
  'vname' => 'LBL_ANT_ITENS_PEDIDO_ANT_PEDIDO_FROM_ANT_PEDIDO_TITLE',
);
$dictionary["ant_itens_pedido"]["fields"]["ant_itens_pnt_pedido_name"] = array (
  'name' => 'ant_itens_pnt_pedido_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_ANT_ITENS_PEDIDO_ANT_PEDIDO_FROM_ANT_PEDIDO_TITLE',
  'save' => true,
  'id_name' => 'ant_itens_c3a0_pedido_ida',
  'link' => 'ant_itens_pido_ant_pedido',
  'table' => 'ant_pedido',
  'module' => 'ant_pedido',
  'rname' => 'name',
);
$dictionary["ant_itens_pedido"]["fields"]["ant_itens_c3a0_pedido_ida"] = array (
  'name' => 'ant_itens_c3a0_pedido_ida',
  'type' => 'link',
  'relationship' => 'ant_itens_pedido_ant_pedido',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'right',
  'vname' => 'LBL_ANT_ITENS_PEDIDO_ANT_PEDIDO_FROM_ANT_ITENS_PEDIDO_TITLE',
);
