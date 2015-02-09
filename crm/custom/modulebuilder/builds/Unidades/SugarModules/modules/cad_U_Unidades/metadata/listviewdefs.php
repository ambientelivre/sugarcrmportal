<?php
$module_name = 'cad_U_Unidades';
$listViewDefs [$module_name] = 
array (
  'CODIGO_UNIDADE' => 
  array (
    'type' => 'varchar',
    'label' => 'LBL_CODIGO_UNIDADE',
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
