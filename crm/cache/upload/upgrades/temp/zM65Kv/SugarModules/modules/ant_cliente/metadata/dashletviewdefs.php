<?php
$dashletData['ant_clienteDashlet']['searchFields'] = array (
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
$dashletData['ant_clienteDashlet']['columns'] = array (
  'cli_nm_fantasia' => 
  array (
    'type' => 'varchar',
    'label' => 'LBL_CLI_NM_FANTASIA',
    'width' => '10%',
    'default' => true,
  ),
  'cli_cnpj_cpf' => 
  array (
    'type' => 'varchar',
    'label' => 'LBL_CLI_CNPJ_CPF',
    'width' => '10%',
    'default' => true,
  ),
  'cli_cidade' => 
  array (
    'type' => 'varchar',
    'label' => 'LBL_CLI_CIDADE',
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
