<?php
$module_name = 'ant_estoque_geral';
$listViewDefs [$module_name] = 
array (
  'ANT_ESTOQUET_PRODUTO_NAME' => 
  array (
    'type' => 'relate',
    'link' => 'ant_estoqueal_ant_produto',
    'label' => 'LBL_ANT_ESTOQUE_GERAL_ANT_PRODUTO_FROM_ANT_PRODUTO_TITLE',
    'width' => '10%',
    'default' => true,
  ),
  'EG_LOTE' => 
  array (
    'type' => 'varchar',
    'label' => 'LBL_EG_LOTE',
    'width' => '10%',
    'default' => true,
  ),
  'ANT_ESTOQUEREGIONAIS_NAME' => 
  array (
    'type' => 'relate',
    'link' => 'ant_estoque_ant_regionais',
    'label' => 'LBL_ANT_ESTOQUE_GERAL_ANT_REGIONAIS_FROM_ANT_REGIONAIS_TITLE',
    'width' => '10%',
    'default' => true,
  ),
  'ANT_ESTOQUECRETARIAS_NAME' => 
  array (
    'type' => 'relate',
    'link' => 'ant_estoquent_secretarias',
    'label' => 'LBL_ANT_ESTOQUE_GERAL_ANT_SECRETARIAS_FROM_ANT_SECRETARIAS_TITLE',
    'width' => '10%',
    'default' => true,
  ),
  'EG_QTD' => 
  array (
    'type' => 'varchar',
    'label' => 'LBL_EG_QTD',
    'width' => '10%',
    'default' => true,
  ),
);
?>
