<?php
$dashletData['ant_inutilizadoDashlet']['searchFields'] = array (
  'date_entered' => 
  array (
    'default' => '',
  ),
  'date_modified' => 
  array (
    'default' => '',
  ),
  'assigned_user_id' => 
  array (
    'type' => 'assigned_user_name',
    'default' => 'Admin Administrator',
  ),
);
$dashletData['ant_inutilizadoDashlet']['columns'] = array (
  'ant_inutilicretarias_name' => 
  array (
    'type' => 'relate',
    'link' => 'ant_inutilint_secretarias',
    'label' => 'LBL_ANT_INUTILIZADO_ANT_SECRETARIAS_FROM_ANT_SECRETARIAS_TITLE',
    'width' => '10%',
    'default' => true,
  ),
  'ant_inutiliregionais_name' => 
  array (
    'type' => 'relate',
    'link' => 'ant_inutili_ant_regionais',
    'label' => 'LBL_ANT_INUTILIZADO_ANT_REGIONAIS_FROM_ANT_REGIONAIS_TITLE',
    'width' => '10%',
    'default' => true,
  ),
  'in_dt_nf' => 
  array (
    'type' => 'datetimecombo',
    'label' => 'LBL_IN_DT_NF',
    'width' => '10%',
    'default' => true,
  ),
  'in_data' => 
  array (
    'type' => 'varchar',
    'label' => 'LBL_IN_DATA',
    'width' => '10%',
    'default' => true,
  ),
  'in_destino' => 
  array (
    'type' => 'text',
    'studio' => 'visible',
    'label' => 'LBL_IN_DESTINO',
    'sortable' => false,
    'width' => '10%',
    'default' => true,
  ),
  'in_obs' => 
  array (
    'type' => 'text',
    'studio' => 'visible',
    'label' => 'LBL_IN_OBS',
    'sortable' => false,
    'width' => '10%',
    'default' => true,
  ),
  'in_link' => 
  array (
    'type' => 'url',
    'label' => 'LBL_IN_LINK',
    'width' => '10%',
    'default' => true,
  ),
  'date_modified' => 
  array (
    'width' => '15%',
    'label' => 'LBL_DATE_MODIFIED',
    'name' => 'date_modified',
    'default' => false,
  ),
  'date_entered' => 
  array (
    'width' => '15%',
    'label' => 'LBL_DATE_ENTERED',
    'default' => false,
    'name' => 'date_entered',
  ),
  'name' => 
  array (
    'width' => '40%',
    'label' => 'LBL_LIST_NAME',
    'link' => true,
    'default' => false,
    'name' => 'name',
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
);
