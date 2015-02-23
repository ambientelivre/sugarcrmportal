<?php
$module_name = 'ant_produto';
$listViewDefs [$module_name] = 
array (
  'NAME' => 
  array (
    'width' => '32%',
    'label' => 'LBL_NAME',
    'default' => true,
    'link' => true,
  ),
  'PD_DESCRICAO' => 
  array (
    'type' => 'varchar',
    'label' => 'LBL_PD_DESCRICAO',
    'width' => '10%',
    'default' => true,
  ),
  'PD_OBS' => 
  array (
    'type' => 'text',
    'studio' => 'visible',
    'label' => 'LBL_PD_OBS',
    'sortable' => false,
    'width' => '10%',
    'default' => true,
  ),
  'PD_VAL_UNIT' => 
  array (
    'type' => 'decimal',
    'label' => 'LBL_PD_VAL_UNIT',
    'width' => '10%',
    'default' => true,
  ),
  'ASSIGNED_USER_NAME' => 
  array (
    'width' => '9%',
    'label' => 'LBL_ASSIGNED_TO_NAME',
    'module' => 'Employees',
    'id' => 'ASSIGNED_USER_ID',
    'default' => true,
  ),
);
?>
