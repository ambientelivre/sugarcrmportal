<?php
$module_name = 'ant_produto';
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
      'syncDetailEditViews' => true,
    ),
    'panels' => 
    array (
      'default' => 
      array (
        0 => 
        array (
          0 => 'name',
          1 => 'assigned_user_name',
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'pd_doses',
            'label' => 'LBL_PD_DOSES',
          ),
          1 => 
          array (
            'name' => 'pd_val_unit',
            'label' => 'LBL_PD_VAL_UNIT',
          ),
        ),
        2 => 
        array (
          0 => 
          array (
            'name' => 'pd_descricao',
            'label' => 'LBL_PD_DESCRICAO',
          ),
        ),
        3 => 
        array (
          0 => 
          array (
            'name' => 'pd_obs',
            'studio' => 'visible',
            'label' => 'LBL_PD_OBS',
          ),
          1 => '',
        ),
        4 => 
        array (
          0 => 
          array (
            'name' => 'ant_estoquet_produto_name',
            'label' => 'LBL_ANT_ESTOQUE_GERAL_ANT_PRODUTO_FROM_ANT_ESTOQUE_GERAL_TITLE',
          ),
        ),
      ),
    ),
  ),
);
?>
