<?php
// created: 2014-12-09 15:48:28
$dictionary["ant_produto"]["fields"]["ant_itens_pdo_ant_produto"] = array (
  'name' => 'ant_itens_pdo_ant_produto',
  'type' => 'link',
  'relationship' => 'ant_itens_pedido_ant_produto',
  'source' => 'non-db',
  'vname' => 'LBL_ANT_ITENS_PEDIDO_ANT_PRODUTO_FROM_ANT_ITENS_PEDIDO_TITLE',
);
$dictionary["ant_produto"]["fields"]["ant_itens_pt_produto_name"] = array (
  'name' => 'ant_itens_pt_produto_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_ANT_ITENS_PEDIDO_ANT_PRODUTO_FROM_ANT_ITENS_PEDIDO_TITLE',
  'save' => true,
  'id_name' => 'ant_itens_d842_pedido_ida',
  'link' => 'ant_itens_pdo_ant_produto',
  'table' => 'ant_itens_pedido',
  'module' => 'ant_itens_pedido',
  'rname' => 'name',
);
$dictionary["ant_produto"]["fields"]["ant_itens_d842_pedido_ida"] = array (
  'name' => 'ant_itens_d842_pedido_ida',
  'type' => 'link',
  'relationship' => 'ant_itens_pedido_ant_produto',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'left',
  'vname' => 'LBL_ANT_ITENS_PEDIDO_ANT_PRODUTO_FROM_ANT_ITENS_PEDIDO_TITLE',
);
