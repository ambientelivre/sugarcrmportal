<?php
$module_name = 'ant_regionais';
$listViewDefs [$module_name] = 
array (
  'REG_RAZAO_SOCIAL' => 
  array (
    'type' => 'varchar',
    'label' => 'LBL_REG_RAZAO_SOCIAL ',
    'width' => '10%',
    'default' => true,
  ),
  'REG_NM_FANTASIA' => 
  array (
    'type' => 'varchar',
    'label' => 'LBL_REG_NM_FANTASIA',
    'width' => '10%',
    'default' => true,
  ),
  'REG_CNPJ' => 
  array (
    'type' => 'varchar',
    'label' => 'LBL_REG_CNPJ',
    'width' => '10%',
    'default' => true,
  ),
  'REG_TELEFONE' => 
  array (
    'type' => 'varchar',
    'label' => 'LBL_REG_TELEFONE',
    'width' => '10%',
    'default' => true,
  ),
  'REG_ESTADO' => 
  array (
    'type' => 'enum',
    'default' => true,
    'studio' => 'visible',
    'label' => 'LBL_REG_ESTADO ',
    'sortable' => false,
    'width' => '10%',
  ),
  'REG_CIDADE' => 
  array (
    'type' => 'varchar',
    'label' => 'LBL_REG_CIDADE',
    'width' => '10%',
    'default' => true,
  ),
);
?>
