<?php
$dashletData['ant_produtoDashlet']['searchFields'] = array (
  'pd_nome' => 
  array (
    'default' => '',
  ),
  'pd_descricao' => 
  array (
    'default' => '',
  ),
  'pd_doses' => 
  array (
    'default' => '',
  ),
  'pd_val_unit' => 
  array (
    'default' => '',
  ),
  'pd_obs' => 
  array (
    'default' => '',
  ),
);
$dashletData['ant_produtoDashlet']['columns'] = array (
  'pd_nome' => 
  array (
    'type' => 'varchar',
    'label' => 'LBL_PD_NOME',
    'width' => '10%',
    'default' => true,
    'name' => 'pd_nome',
  ),
  'pd_descricao' => 
  array (
    'type' => 'varchar',
    'label' => 'LBL_PD_DESCRICAO',
    'width' => '10%',
    'default' => true,
    'name' => 'pd_descricao',
  ),
  'pd_val_unit' => 
  array (
    'type' => 'decimal',
    'label' => 'LBL_PD_VAL_UNIT',
    'width' => '10%',
    'default' => true,
    'name' => 'pd_val_unit',
  ),
  'pd_obs' => 
  array (
    'type' => 'text',
    'studio' => 'visible',
    'label' => 'LBL_PD_OBS',
    'sortable' => false,
    'width' => '10%',
    'default' => true,
    'name' => 'pd_obs',
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
);
