<?php
$module_name = 'ItOP__Itens_oportunidade';
$listViewDefs [$module_name] = 
array (
  'NAME' => 
  array (
    'width' => '32%',
    'label' => 'LBL_NAME',
    'default' => true,
    'link' => true,
  ),
  'ITOP__ITENS_SOLUCOES_NAME' => 
  array (
    'type' => 'relate',
    'link' => 'itop__itenscad_s_solucoes',
    'label' => 'LBL_ITOP__ITENS_OPORTUNIDADE_CAD_S_SOLUCOES_FROM_CAD_S_SOLUCOES_TITLE',
    'width' => '10%',
    'default' => true,
  ),
  'VALOR_C' => 
  array (
    'type' => 'varchar',
    'default' => true,
    'label' => 'LBL_VALOR',
    'width' => '10%',
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
