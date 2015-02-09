<?php
$dashletData['t3cpa_estoque_gerealDashlet']['searchFields'] = array (
  'cod_prod' => 
  array (
    'default' => '',
  ),
  'eg_lote' => 
  array (
    'default' => '',
  ),
  't3cpa_estoqcretarias_name' => 
  array (
    'default' => '',
  ),
  't3cpa_estoqregionais_name' => 
  array (
    'default' => '',
  ),
);
$dashletData['t3cpa_estoque_gerealDashlet']['columns'] = array (
  'cod_prod' => 
  array (
    'type' => 'varchar',
    'label' => 'LBL_COD_PROD',
    'width' => '10%',
    'default' => true,
    'name' => 'cod_prod',
  ),
  'eg_lote' => 
  array (
    'type' => 'varchar',
    'label' => 'LBL_EG_LOTE',
    'width' => '10%',
    'default' => true,
    'name' => 'eg_lote',
  ),
  't3cpa_estoqregionais_name' => 
  array (
    'type' => 'relate',
    'link' => 't3cpa_estoq3cpa_regionais',
    'label' => 'LBL_T3CPA_ESTOQUE_GEREAL_T3CPA_REGIONAIS_FROM_T3CPA_REGIONAIS_TITLE',
    'width' => '10%',
    'default' => true,
  ),
  't3cpa_estoqcretarias_name' => 
  array (
    'type' => 'relate',
    'link' => 't3cpa_estoqpa_secretarias',
    'label' => 'LBL_T3CPA_ESTOQUE_GEREAL_T3CPA_SECRETARIAS_FROM_T3CPA_SECRETARIAS_TITLE',
    'width' => '10%',
    'default' => true,
  ),
  'eg_saldo' => 
  array (
    'type' => 'varchar',
    'label' => 'LBL_EG_SALDO',
    'width' => '10%',
    'default' => true,
    'name' => 'eg_saldo',
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
