<?php
$module_name = 'ant_inutilizado';
$viewdefs [$module_name] = 
array (
  'DetailView' => 
  array (
    'templateMeta' => 
    array (
      'form' => 
      array (
        'buttons' => 
        array (
          0 => 'EDIT',
          1 => 'DUPLICATE',
          2 => 'DELETE',
        ),
      ),
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
            'name' => 'ant_inutiliregionais_name',
          ),
          1 => 
          array (
            'name' => 'ant_inutilicretarias_name',
          ),
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'in_data',
            'label' => 'LBL_IN_DATA',
          ),
          1 => 
          array (
            'name' => 'in_dt_nf',
            'label' => 'LBL_IN_DT_NF',
          ),
        ),
        2 => 
        array (
          0 => 
          array (
            'name' => 'in_link',
            'label' => 'LBL_IN_LINK',
          ),
          1 => '',
        ),
        3 => 
        array (
          0 => 
          array (
            'name' => 'in_obs',
            'studio' => 'visible',
            'label' => 'LBL_IN_OBS',
          ),
        ),
        4 => 
        array (
          0 => 
          array (
            'name' => 'in_destino',
            'studio' => 'visible',
            'label' => 'LBL_IN_DESTINO',
          ),
          1 => '',
        ),
      ),
    ),
  ),
);
?>
