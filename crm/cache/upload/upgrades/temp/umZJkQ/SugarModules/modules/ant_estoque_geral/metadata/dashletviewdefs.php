<?php
$dashletData['ant_estoque_geralDashlet']['searchFields'] = array (
  'ant_estoquet_produto_name' => 
  array (
    'default' => '',
  ),
  'eg_lote' => 
  array (
    'default' => '',
  ),
);
$dashletData['ant_estoque_geralDashlet']['columns'] = array (
  'ant_estoquet_produto_name' => 
  array (
    'type' => 'relate',
    'link' => 'ant_estoqueal_ant_produto',
    'label' => 'LBL_ANT_ESTOQUE_GERAL_ANT_PRODUTO_FROM_ANT_PRODUTO_TITLE',
    'width' => '10%',
    'default' => true,
    'name' => 'ant_estoquet_produto_name',
  ),
  'eg_lote' => 
  array (
    'type' => 'varchar',
    'label' => 'LBL_EG_LOTE',
    'width' => '10%',
    'default' => true,
    'name' => 'eg_lote',
  ),
  'eg_qtd' => 
  array (
    'type' => 'varchar',
    'label' => 'LBL_EG_QTD',
    'width' => '10%',
    'default' => true,
    'name' => 'eg_qtd',
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
  'ant_estoquecretarias_name' => 
  array (
    'type' => 'relate',
    'link' => 'ant_estoquent_secretarias',
    'label' => 'LBL_ANT_ESTOQUE_GERAL_ANT_SECRETARIAS_FROM_ANT_SECRETARIAS_TITLE',
    'width' => '10%',
    'default' => true,
    'name' => 'ant_estoquecretarias_name',
  ),
  'date_modified' => 
  array (
    'width' => '15%',
    'label' => 'LBL_DATE_MODIFIED',
    'name' => 'date_modified',
    'default' => false,
  ),
  'created_by' => 
  array (
    'width' => '8%',
    'label' => 'LBL_CREATED',
    'name' => 'created_by',
    'default' => false,
  ),
  'assigned_user_name' => 
  array (
    'width' => '8%',
    'label' => 'LBL_LIST_ASSIGNED_USER',
    'name' => 'assigned_user_name',
    'default' => false,
  ),
  'name' => 
  array (
    'width' => '40%',
    'label' => 'LBL_LIST_NAME',
    'link' => true,
    'default' => false,
    'name' => 'name',
  ),
  'date_entered' => 
  array (
    'width' => '15%',
    'label' => 'LBL_DATE_ENTERED',
    'default' => false,
    'name' => 'date_entered',
  ),
);
