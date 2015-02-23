<?php
// created: 2014-09-12 15:46:07
$dictionary["ant_itens_pedido"]["fields"]["ant_pedido_t_itens_pedido"] = array (
  'name' => 'ant_pedido_t_itens_pedido',
  'type' => 'link',
  'relationship' => 'ant_pedido_ant_itens_pedido',
  'source' => 'non-db',
  'vname' => 'LBL_ANT_PEDIDO_ANT_ITENS_PEDIDO_FROM_ANT_PEDIDO_TITLE',
);
$dictionary["ant_itens_pedido"]["fields"]["ant_pedido_ns_pedido_name"] = array (
  'name' => 'ant_pedido_ns_pedido_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_ANT_PEDIDO_ANT_ITENS_PEDIDO_FROM_ANT_PEDIDO_TITLE',
  'save' => true,
  'id_name' => 'ant_pedido47c6_pedido_ida',
  'link' => 'ant_pedido_t_itens_pedido',
  'table' => 'ant_pedido',
  'module' => 'ant_pedido',
  'rname' => 'name',
);
$dictionary["ant_itens_pedido"]["fields"]["ant_pedido47c6_pedido_ida"] = array (
  'name' => 'ant_pedido47c6_pedido_ida',
  'type' => 'link',
  'relationship' => 'ant_pedido_ant_itens_pedido',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'right',
  'vname' => 'LBL_ANT_PEDIDO_ANT_ITENS_PEDIDO_FROM_ANT_ITENS_PEDIDO_TITLE',
);
