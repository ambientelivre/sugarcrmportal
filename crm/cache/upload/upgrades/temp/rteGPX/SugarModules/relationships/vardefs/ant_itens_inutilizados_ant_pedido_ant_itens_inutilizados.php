<?php
// created: 2014-09-05 13:26:39
$dictionary["ant_itens_inutilizados"]["fields"]["ant_itens_idos_ant_pedido"] = array (
  'name' => 'ant_itens_idos_ant_pedido',
  'type' => 'link',
  'relationship' => 'ant_itens_inutilizados_ant_pedido',
  'source' => 'non-db',
  'vname' => 'LBL_ANT_ITENS_INUTILIZADOS_ANT_PEDIDO_FROM_ANT_PEDIDO_TITLE',
);
$dictionary["ant_itens_inutilizados"]["fields"]["ant_itens_int_pedido_name"] = array (
  'name' => 'ant_itens_int_pedido_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_ANT_ITENS_INUTILIZADOS_ANT_PEDIDO_FROM_ANT_PEDIDO_TITLE',
  'save' => true,
  'id_name' => 'ant_itens_b3b1_pedido_idb',
  'link' => 'ant_itens_idos_ant_pedido',
  'table' => 'ant_pedido',
  'module' => 'ant_pedido',
  'rname' => 'name',
);
$dictionary["ant_itens_inutilizados"]["fields"]["ant_itens_b3b1_pedido_idb"] = array (
  'name' => 'ant_itens_b3b1_pedido_idb',
  'type' => 'link',
  'relationship' => 'ant_itens_inutilizados_ant_pedido',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'left',
  'vname' => 'LBL_ANT_ITENS_INUTILIZADOS_ANT_PEDIDO_FROM_ANT_PEDIDO_TITLE',
);
