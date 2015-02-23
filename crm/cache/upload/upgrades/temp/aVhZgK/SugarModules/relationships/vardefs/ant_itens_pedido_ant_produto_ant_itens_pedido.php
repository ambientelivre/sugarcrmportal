<?php
// created: 2014-11-27 11:26:43
$dictionary["ant_itens_pedido"]["fields"]["ant_itens_pdo_ant_produto"] = array (
  'name' => 'ant_itens_pdo_ant_produto',
  'type' => 'link',
  'relationship' => 'ant_itens_pedido_ant_produto',
  'source' => 'non-db',
  'vname' => 'LBL_ANT_ITENS_PEDIDO_ANT_PRODUTO_FROM_ANT_PRODUTO_TITLE',
);
$dictionary["ant_itens_pedido"]["fields"]["ant_itens_pt_produto_name"] = array (
  'name' => 'ant_itens_pt_produto_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_ANT_ITENS_PEDIDO_ANT_PRODUTO_FROM_ANT_PRODUTO_TITLE',
  'save' => true,
  'id_name' => 'ant_itens_5e9bproduto_idb',
  'link' => 'ant_itens_pdo_ant_produto',
  'table' => 'ant_produto',
  'module' => 'ant_produto',
  'rname' => 'name',
);
$dictionary["ant_itens_pedido"]["fields"]["ant_itens_5e9bproduto_idb"] = array (
  'name' => 'ant_itens_5e9bproduto_idb',
  'type' => 'link',
  'relationship' => 'ant_itens_pedido_ant_produto',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'left',
  'vname' => 'LBL_ANT_ITENS_PEDIDO_ANT_PRODUTO_FROM_ANT_PRODUTO_TITLE',
);
