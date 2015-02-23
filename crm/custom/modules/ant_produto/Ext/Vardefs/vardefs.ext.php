<?php 
 //WARNING: The contents of this file are auto-generated


// created: 2014-12-23 09:50:35
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


// created: 2014-12-23 09:50:35
$dictionary["ant_produto"]["fields"]["ant_log_estue_ant_produto"] = array (
  'name' => 'ant_log_estue_ant_produto',
  'type' => 'link',
  'relationship' => 'ant_log_estoque_ant_produto',
  'source' => 'non-db',
  'vname' => 'LBL_ANT_LOG_ESTOQUE_ANT_PRODUTO_FROM_ANT_LOG_ESTOQUE_TITLE',
);
$dictionary["ant_produto"]["fields"]["ant_log_estt_produto_name"] = array (
  'name' => 'ant_log_estt_produto_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_ANT_LOG_ESTOQUE_ANT_PRODUTO_FROM_ANT_LOG_ESTOQUE_TITLE',
  'save' => true,
  'id_name' => 'ant_log_es1933estoque_ida',
  'link' => 'ant_log_estue_ant_produto',
  'table' => 'ant_log_estoque',
  'module' => 'ant_log_estoque',
  'rname' => 'name',
);
$dictionary["ant_produto"]["fields"]["ant_log_es1933estoque_ida"] = array (
  'name' => 'ant_log_es1933estoque_ida',
  'type' => 'link',
  'relationship' => 'ant_log_estoque_ant_produto',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'left',
  'vname' => 'LBL_ANT_LOG_ESTOQUE_ANT_PRODUTO_FROM_ANT_LOG_ESTOQUE_TITLE',
);


// created: 2014-12-23 09:50:33
$dictionary["ant_produto"]["fields"]["ant_producao_ant_produto"] = array (
  'name' => 'ant_producao_ant_produto',
  'type' => 'link',
  'relationship' => 'ant_producao_ant_produto',
  'source' => 'non-db',
  'vname' => 'LBL_ANT_PRODUCAO_ANT_PRODUTO_FROM_ANT_PRODUCAO_TITLE',
);
$dictionary["ant_produto"]["fields"]["ant_producat_produto_name"] = array (
  'name' => 'ant_producat_produto_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_ANT_PRODUCAO_ANT_PRODUTO_FROM_ANT_PRODUCAO_TITLE',
  'save' => true,
  'id_name' => 'ant_producf7ecroducao_ida',
  'link' => 'ant_producao_ant_produto',
  'table' => 'ant_producao',
  'module' => 'ant_producao',
  'rname' => 'name',
);
$dictionary["ant_produto"]["fields"]["ant_producf7ecroducao_ida"] = array (
  'name' => 'ant_producf7ecroducao_ida',
  'type' => 'link',
  'relationship' => 'ant_producao_ant_produto',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'left',
  'vname' => 'LBL_ANT_PRODUCAO_ANT_PRODUTO_FROM_ANT_PRODUCAO_TITLE',
);


// created: 2014-12-23 09:50:34
$dictionary["ant_produto"]["fields"]["ant_estoqueal_ant_produto"] = array (
  'name' => 'ant_estoqueal_ant_produto',
  'type' => 'link',
  'relationship' => 'ant_estoque_geral_ant_produto',
  'source' => 'non-db',
  'vname' => 'LBL_ANT_ESTOQUE_GERAL_ANT_PRODUTO_FROM_ANT_ESTOQUE_GERAL_TITLE',
);
$dictionary["ant_produto"]["fields"]["ant_estoquet_produto_name"] = array (
  'name' => 'ant_estoquet_produto_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_ANT_ESTOQUE_GERAL_ANT_PRODUTO_FROM_ANT_ESTOQUE_GERAL_TITLE',
  'save' => true,
  'id_name' => 'ant_estoqu8380e_geral_ida',
  'link' => 'ant_estoqueal_ant_produto',
  'table' => 'ant_estoque_geral',
  'module' => 'ant_estoque_geral',
  'rname' => 'name',
);
$dictionary["ant_produto"]["fields"]["ant_estoqu8380e_geral_ida"] = array (
  'name' => 'ant_estoqu8380e_geral_ida',
  'type' => 'link',
  'relationship' => 'ant_estoque_geral_ant_produto',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'left',
  'vname' => 'LBL_ANT_ESTOQUE_GERAL_ANT_PRODUTO_FROM_ANT_ESTOQUE_GERAL_TITLE',
);

?>