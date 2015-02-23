<?php
$module_name = 'ant_estoque_geral';
$searchdefs [$module_name] = 
array (
  'layout' => 
  array (
    'basic_search' => 
    array (
      'eg_lote' => 
      array (
        'type' => 'varchar',
        'label' => 'LBL_EG_LOTE',
        'width' => '10%',
        'default' => true,
        'name' => 'eg_lote',
      ),
    ),
    'advanced_search' => 
    array (
      'ant_estoquet_produto_name' => 
      array (
        'type' => 'relate',
        'link' => 'ant_estoqueal_ant_produto',
        'label' => 'LBL_ANT_ESTOQUE_GERAL_ANT_PRODUTO_FROM_ANT_PRODUTO_TITLE',
        'width' => '10%',
        'default' => true,
        'name' => 'ant_estoquet_produto_name',
      ),
      'ant_estoquecretarias_name' => 
      array (
        'type' => 'relate',
        'link' => 'ant_estoquent_secretarias',
        'label' => 'LBL_ANT_ESTOQUE_GERAL_ANT_SECRETARIAS_FROM_ANT_SECRETARIAS_TITLE',
        'width' => '10%',
        'default' => true,
        'name' => 'ant_estoquecretarias_name',
      ),
      'ant_estoqueregionais_name' => 
      array (
        'type' => 'relate',
        'link' => 'ant_estoque_ant_regionais',
        'label' => 'LBL_ANT_ESTOQUE_GERAL_ANT_REGIONAIS_FROM_ANT_REGIONAIS_TITLE',
        'width' => '10%',
        'default' => true,
        'name' => 'ant_estoqueregionais_name',
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
