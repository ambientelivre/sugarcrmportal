<?php
$module_name = 'CAD_S_Solucoes';
$viewdefs [$module_name] = 
array (
  'QuickCreate' => 
  array (
    'templateMeta' => 
    array (
      'maxColumns' => '2',
      'widths' => 
      array (
        0 => 
        array (
          'label' => '10',
          'field' => '30',
        ),
        1 => 
        array (
          'label' => '10',
          'field' => '30',
        ),
      ),
      'useTabs' => false,
    ),
    'panels' => 
    array (
      'default' => 
      array (
        0 => 
        array (
          0 => 'name',
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'cad_s_solucf_familia_name',
            'label' => 'LBL_CAD_S_SOLUCOES_CAD_F_FAMILIA_FROM_CAD_F_FAMILIA_TITLE',
          ),
          1 => '',
        ),
        2 => 
        array (
          0 => 
          array (
            'name' => 'cad_s_soluc_unidades_name',
            'label' => 'LBL_CAD_S_SOLUCOES_CAD_U_UNIDADES_FROM_CAD_U_UNIDADES_TITLE',
          ),
          1 => '',
        ),
      ),
    ),
  ),
);
?>
