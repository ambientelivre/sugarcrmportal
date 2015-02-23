<?php
$dashletData['ant_secretariasDashlet']['searchFields'] = array (
  'sec_razao_social' => 
  array (
    'default' => '',
  ),
  'sec_nome_fantasia' => 
  array (
    'default' => '',
  ),
  'sec_cidade' => 
  array (
    'default' => '',
  ),
  'sec_estado' => 
  array (
    'default' => '',
  ),
  'sec_cnpj' => 
  array (
    'default' => '',
  ),
);
$dashletData['ant_secretariasDashlet']['columns'] = array (
  'sec_razao_social' => 
  array (
    'type' => 'varchar',
    'label' => 'LBL_SEC_RAZAO_SOCIAL',
    'width' => '10%',
    'default' => true,
    'name' => 'sec_razao_social',
  ),
  'sec_nome_fantasia' => 
  array (
    'type' => 'varchar',
    'label' => 'LBL_SEC_NOME_FANTASIA',
    'width' => '10%',
    'default' => true,
    'name' => 'sec_nome_fantasia',
  ),
  'sec_cnpj' => 
  array (
    'type' => 'varchar',
    'label' => 'LBL_SEC_CNPJ',
    'width' => '10%',
    'default' => true,
    'name' => 'sec_cnpj',
  ),
  'sec_ie' => 
  array (
    'type' => 'varchar',
    'label' => 'LBL_SEC_IE',
    'width' => '10%',
    'default' => true,
    'name' => 'sec_ie',
  ),
  'sec_estado' => 
  array (
    'type' => 'enum',
    'default' => true,
    'studio' => 'visible',
    'label' => 'LBL_SEC_ESTADO',
    'sortable' => false,
    'width' => '10%',
  ),
  'sec_cidade' => 
  array (
    'type' => 'varchar',
    'label' => 'LBL_SEC_CIDADE',
    'width' => '10%',
    'default' => true,
  ),
  'sec_telefone' => 
  array (
    'type' => 'varchar',
    'label' => 'LBL_SEC_TELEFONE',
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
