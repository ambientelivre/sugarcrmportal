<?php
$module_name = 'ant_producao';
$listViewDefs [$module_name] = 
array (
  'ANT_PRODUCAT_PRODUTO_NAME' => 
  array (
    'type' => 'relate',
    'link' => 'ant_producao_ant_produto',
    'label' => 'LBL_ANT_PRODUCAO_ANT_PRODUTO_FROM_ANT_PRODUTO_TITLE',
    'width' => '10%',
    'default' => true,
  ),
  'PROD_LOTE' => 
  array (
    'type' => 'varchar',
    'label' => 'LBL_PROD_LOTE',
    'width' => '10%',
    'default' => true,
  ),
  'PROD_OBS' => 
  array (
    'type' => 'varchar',
    'label' => 'LBL_PROD_OBS',
    'width' => '10%',
    'default' => true,
  ),
  'PROD_QTD' => 
  array (
    'type' => 'int',
    'label' => 'LBL_PROD_QTD',
    'width' => '10%',
    'default' => true,
  ),
  'PROD_DATA' => 
  array (
    'type' => 'date',
    'label' => 'LBL_PROD_DATA',
    'width' => '10%',
    'default' => true,
  ),
  'PROD_VALIDADE' => 
  array (
    'type' => 'date',
    'label' => 'LBL_PROD_VALIDADE ',
    'width' => '10%',
    'default' => true,
  ),
);
?>
