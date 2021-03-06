<?php
$dashletData['ant_regionaisDashlet']['searchFields'] = array (
  'reg_razao_social' => 
  array (
    'default' => '',
  ),
  'reg_cnpj' => 
  array (
    'default' => '',
  ),
  'reg_estado' => 
  array (
    'default' => '',
  ),
  'reg_cidade' => 
  array (
    'default' => '',
  ),
);
$dashletData['ant_regionaisDashlet']['columns'] = array (
  'reg_razao_social' => 
  array (
    'type' => 'varchar',
    'label' => 'LBL_REG_RAZAO_SOCIAL ',
    'width' => '10%',
    'default' => true,
    'name' => 'reg_razao_social',
  ),
  'reg_cnpj' => 
  array (
    'type' => 'varchar',
    'label' => 'LBL_REG_CNPJ',
    'width' => '10%',
    'default' => true,
    'name' => 'reg_cnpj',
  ),
  'reg_estado' => 
  array (
    'type' => 'enum',
    'default' => true,
    'studio' => 'visible',
    'label' => 'LBL_REG_ESTADO ',
    'sortable' => false,
    'width' => '10%',
    'name' => 'reg_estado',
  ),
  'reg_cidade' => 
  array (
    'type' => 'varchar',
    'label' => 'LBL_REG_CIDADE',
    'width' => '10%',
    'default' => true,
    'name' => 'reg_cidade',
  ),
  'date_modified' => 
  array (
    'width' => '15%',
    'label' => 'LBL_DATE_MODIFIED',
    'name' => 'date_modified',
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
