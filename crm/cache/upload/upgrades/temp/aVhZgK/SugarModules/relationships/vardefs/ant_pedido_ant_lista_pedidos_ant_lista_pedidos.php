<?php
// created: 2014-11-27 11:26:44
$dictionary["ant_lista_pedidos"]["fields"]["ant_pedido__lista_pedidos"] = array (
  'name' => 'ant_pedido__lista_pedidos',
  'type' => 'link',
  'relationship' => 'ant_pedido_ant_lista_pedidos',
  'source' => 'non-db',
  'vname' => 'LBL_ANT_PEDIDO_ANT_LISTA_PEDIDOS_FROM_ANT_PEDIDO_TITLE',
);
$dictionary["ant_lista_pedidos"]["fields"]["ant_pedido_a_pedidos_name"] = array (
  'name' => 'ant_pedido_a_pedidos_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_ANT_PEDIDO_ANT_LISTA_PEDIDOS_FROM_ANT_PEDIDO_TITLE',
  'save' => true,
  'id_name' => 'ant_pedido5fed_pedido_ida',
  'link' => 'ant_pedido__lista_pedidos',
  'table' => 'ant_pedido',
  'module' => 'ant_pedido',
  'rname' => 'name',
);
$dictionary["ant_lista_pedidos"]["fields"]["ant_pedido5fed_pedido_ida"] = array (
  'name' => 'ant_pedido5fed_pedido_ida',
  'type' => 'link',
  'relationship' => 'ant_pedido_ant_lista_pedidos',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'right',
  'vname' => 'LBL_ANT_PEDIDO_ANT_LISTA_PEDIDOS_FROM_ANT_LISTA_PEDIDOS_TITLE',
);
