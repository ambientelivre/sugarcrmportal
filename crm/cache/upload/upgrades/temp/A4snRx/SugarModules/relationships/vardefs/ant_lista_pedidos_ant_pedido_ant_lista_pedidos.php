<?php
// created: 2014-09-12 15:58:56
$dictionary["ant_lista_pedidos"]["fields"]["ant_lista_pdos_ant_pedido"] = array (
  'name' => 'ant_lista_pdos_ant_pedido',
  'type' => 'link',
  'relationship' => 'ant_lista_pedidos_ant_pedido',
  'source' => 'non-db',
  'vname' => 'LBL_ANT_LISTA_PEDIDOS_ANT_PEDIDO_FROM_ANT_PEDIDO_TITLE',
);
$dictionary["ant_lista_pedidos"]["fields"]["ant_lista_pnt_pedido_name"] = array (
  'name' => 'ant_lista_pnt_pedido_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_ANT_LISTA_PEDIDOS_ANT_PEDIDO_FROM_ANT_PEDIDO_TITLE',
  'save' => true,
  'id_name' => 'ant_lista_aef1_pedido_ida',
  'link' => 'ant_lista_pdos_ant_pedido',
  'table' => 'ant_pedido',
  'module' => 'ant_pedido',
  'rname' => 'name',
);
$dictionary["ant_lista_pedidos"]["fields"]["ant_lista_aef1_pedido_ida"] = array (
  'name' => 'ant_lista_aef1_pedido_ida',
  'type' => 'link',
  'relationship' => 'ant_lista_pedidos_ant_pedido',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'right',
  'vname' => 'LBL_ANT_LISTA_PEDIDOS_ANT_PEDIDO_FROM_ANT_LISTA_PEDIDOS_TITLE',
);
