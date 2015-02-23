<?php
// created: 2014-09-05 13:26:39
$dictionary["ant_pedido"]["fields"]["ant_itens_idos_ant_pedido"] = array (
  'name' => 'ant_itens_idos_ant_pedido',
  'type' => 'link',
  'relationship' => 'ant_itens_inutilizados_ant_pedido',
  'source' => 'non-db',
  'vname' => 'LBL_ANT_ITENS_INUTILIZADOS_ANT_PEDIDO_FROM_ANT_ITENS_INUTILIZADOS_TITLE',
);
$dictionary["ant_pedido"]["fields"]["ant_itens_int_pedido_name"] = array (
  'name' => 'ant_itens_int_pedido_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_ANT_ITENS_INUTILIZADOS_ANT_PEDIDO_FROM_ANT_ITENS_INUTILIZADOS_TITLE',
  'save' => true,
  'id_name' => 'ant_itens_f675lizados_ida',
  'link' => 'ant_itens_idos_ant_pedido',
  'table' => 'ant_itens_inutilizados',
  'module' => 'ant_itens_inutilizados',
  'rname' => 'name',
);
$dictionary["ant_pedido"]["fields"]["ant_itens_f675lizados_ida"] = array (
  'name' => 'ant_itens_f675lizados_ida',
  'type' => 'link',
  'relationship' => 'ant_itens_inutilizados_ant_pedido',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'left',
  'vname' => 'LBL_ANT_ITENS_INUTILIZADOS_ANT_PEDIDO_FROM_ANT_ITENS_INUTILIZADOS_TITLE',
);
