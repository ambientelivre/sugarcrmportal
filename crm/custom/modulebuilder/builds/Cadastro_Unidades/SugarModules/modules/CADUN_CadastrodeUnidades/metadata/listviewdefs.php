<?php
$module_name = 'CADUN_CadastrodeUnidades';
$listViewDefs [$module_name] = 
array (
  'CODIGO_UNI' => 
  array (
    'type' => 'varchar',
    'label' => 'LBL_CODIGO_UNI',
    'width' => '10%',
    'default' => true,
  ),
  'NAME' => 
  array (
    'width' => '32%',
    'label' => 'LBL_NAME',
    'default' => true,
    'link' => true,
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
