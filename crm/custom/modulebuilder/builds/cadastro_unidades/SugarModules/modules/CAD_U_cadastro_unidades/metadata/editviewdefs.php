<?php
$module_name = 'CAD_U_cadastro_unidades';
$viewdefs [$module_name] = 
array (
  'EditView' => 
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
          0 => 
          array (
            'name' => 'codigo',
            'label' => 'LBL_CODIGO',
          ),
          1 => 'name',
        ),
        1 => 
        array (
          0 => 'assigned_user_name',
        ),
        2 => 
        array (
          0 => 'description',
        ),
      ),
    ),
  ),
);
?>
