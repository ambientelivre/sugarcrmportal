<?php
$module_name = 'ant_produto';
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
          1 => 
          array (
            'name' => 'pd_descricao',
            'label' => 'LBL_PD_DESCRICAO',
          ),
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
            'name' => 'pd_obs',
            'studio' => 'visible',
            'label' => 'LBL_PD_OBS',
          ),
          1 => '',
        ),
      ),
      'lbl_editview_panel1' => 
      array (
        0 => 
        array (
          0 => 
          array (
            'name' => 'date_entered',
            'comment' => 'Date record created',
            'label' => 'LBL_DATE_ENTERED',
          ),
          1 => 
          array (
            'name' => 'created_by_name',
            'label' => 'LBL_CREATED',
          ),
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'date_modified',
            'comment' => 'Date record last modified',
            'label' => 'LBL_DATE_MODIFIED',
          ),
          1 => 
          array (
            'name' => 'modified_by_name',
            'label' => 'LBL_MODIFIED_NAME',
          ),
        ),
      ),
    ),
  ),
);
?>
