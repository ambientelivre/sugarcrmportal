<?php
$module_name = 'ant_cliente';
$listViewDefs [$module_name] = 
array (
  'CLI_RAZAO_SOCIAL' => 
  array (
    'type' => 'varchar',
    'label' => 'LBL_CLI_RAZAO_SOCIAL',
    'width' => '10%',
    'default' => true,
  ),
  'CLI_NM_FANTASIA' => 
  array (
    'type' => 'varchar',
    'label' => 'LBL_CLI_NM_FANTASIA',
    'width' => '10%',
    'default' => true,
  ),
  'CLI_CNPJ_CPF' => 
  array (
    'type' => 'varchar',
    'label' => 'LBL_CLI_CNPJ_CPF',
    'width' => '10%',
    'default' => true,
  ),
  'CLI_ESTADO' => 
  array (
    'type' => 'enum',
    'default' => true,
    'studio' => 'visible',
    'label' => 'LBL_CLI_ESTADO',
    'sortable' => false,
    'width' => '10%',
  ),
  'CLI_CIDADE' => 
  array (
    'type' => 'varchar',
    'label' => 'LBL_CLI_CIDADE',
    'width' => '10%',
    'default' => true,
  ),
  'CLI_TELEFONE' => 
  array (
    'type' => 'varchar',
    'label' => 'LBL_CLI_TELEFONE',
    'width' => '10%',
    'default' => true,
  ),
);
?>
