<?php
$module_name = 'CAD_S_Solucoes';
$listViewDefs [$module_name] = 
array (
  'NAME' => 
  array (
    'width' => '32%',
    'label' => 'LBL_NAME',
    'default' => true,
    'link' => true,
  ),
  'CAD_S_SOLUC_UNIDADES_NAME' => 
  array (
    'type' => 'relate',
    'link' => 'cad_s_soluccad_u_unidades',
    'label' => 'LBL_CAD_S_SOLUCOES_CAD_U_UNIDADES_FROM_CAD_U_UNIDADES_TITLE',
    'width' => '10%',
    'default' => true,
  ),
  'CAD_S_SOLUCF_FAMILIA_NAME' => 
  array (
    'type' => 'relate',
    'link' => 'cad_s_soluc_cad_f_familia',
    'label' => 'LBL_CAD_S_SOLUCOES_CAD_F_FAMILIA_FROM_CAD_F_FAMILIA_TITLE',
    'width' => '10%',
    'default' => true,
  ),
);
?>
