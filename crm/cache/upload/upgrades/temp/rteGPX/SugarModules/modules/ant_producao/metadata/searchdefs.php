<?php
$module_name = 'ant_producao';
$searchdefs [$module_name] = 
array (
  'layout' => 
  array (
    'basic_search' => 
    array (
      'ant_producat_produto_name' => 
      array (
        'type' => 'relate',
        'link' => 'ant_producao_ant_produto',
        'label' => 'LBL_ANT_PRODUCAO_ANT_PRODUTO_FROM_ANT_PRODUTO_TITLE',
        'width' => '10%',
        'default' => true,
        'name' => 'ant_producat_produto_name',
      ),
      'prod_lote' => 
      array (
        'type' => 'varchar',
        'label' => 'LBL_PROD_LOTE',
        'width' => '10%',
        'default' => true,
        'name' => 'prod_lote',
      ),
    ),
    'advanced_search' => 
    array (
      'ant_producat_produto_name' => 
      array (
        'type' => 'relate',
        'link' => 'ant_producao_ant_produto',
        'label' => 'LBL_ANT_PRODUCAO_ANT_PRODUTO_FROM_ANT_PRODUTO_TITLE',
        'width' => '10%',
        'default' => true,
        'name' => 'ant_producat_produto_name',
      ),
      'prod_lote' => 
      array (
        'type' => 'varchar',
        'label' => 'LBL_PROD_LOTE',
        'width' => '10%',
        'default' => true,
        'name' => 'prod_lote',
      ),
      'prod_data' => 
      array (
        'type' => 'date',
        'label' => 'LBL_PROD_DATA',
        'width' => '10%',
        'default' => true,
        'name' => 'prod_data',
      ),
      'prod_validade' => 
      array (
        'type' => 'date',
        'label' => 'LBL_PROD_VALIDADE ',
        'width' => '10%',
        'default' => true,
        'name' => 'prod_validade',
      ),
      'prod_qtd' => 
      array (
        'type' => 'int',
        'label' => 'LBL_PROD_QTD',
        'width' => '10%',
        'default' => true,
        'name' => 'prod_qtd',
      ),
      'prod_obs' => 
      array (
        'type' => 'varchar',
        'label' => 'LBL_PROD_OBS',
        'width' => '10%',
        'default' => true,
        'name' => 'prod_obs',
      ),
    ),
  ),
  'templateMeta' => 
  array (
    'maxColumns' => '3',
    'maxColumnsBasic' => '4',
    'widths' => 
    array (
      'label' => '10',
      'field' => '30',
    ),
  ),
);
?>
