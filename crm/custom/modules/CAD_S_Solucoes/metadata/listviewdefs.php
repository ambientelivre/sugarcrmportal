<?php
$module_name = 'CAD_S_Solucoes';
$listViewDefs [$module_name] = 
array (
  'CODIGO' => 
  array (
    'type' => 'varchar',
    'label' => 'LBL_CODIGO',
    'width' => '10%',
    'default' => true,
  ),
  'REFERENCIA' => 
  array (
    'type' => 'varchar',
    'label' => 'LBL_REFERENCIA',
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
  'CAD_S_SOLUCF_FAMILIA_NAME' => 
  array (
    'type' => 'relate',
    'link' => 'cad_s_soluc_cad_f_familia',
    'label' => 'LBL_CAD_S_SOLUCOES_CAD_F_FAMILIA_FROM_CAD_F_FAMILIA_TITLE',
    'width' => '10%',
    'default' => true,
  ),
  'UNIDADE_COMPRA' => 
  array (
    'type' => 'varchar',
    'label' => 'LBL_UNIDADE_COMPRA',
    'width' => '10%',
    'default' => true,
  ),
  'UNIDADE_VENDA' => 
  array (
    'type' => 'varchar',
    'label' => 'LBL_UNIDADE_VENDA',
    'width' => '10%',
    'default' => true,
  ),
);
?>
