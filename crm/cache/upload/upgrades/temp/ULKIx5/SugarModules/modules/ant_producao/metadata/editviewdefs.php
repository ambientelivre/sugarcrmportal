<?php
$module_name = 'ant_producao';
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
            'name' => 'ant_producat_produto_name',
          ),
          1 => 
          array (
            'name' => 'prod_lote',
            'label' => 'LBL_PROD_LOTE',
          ),
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'prod_qtd',
            'label' => 'LBL_PROD_QTD',
          ),
          1 => 
          array (
            'name' => 'prod_data',
            'label' => 'LBL_PROD_DATA',
          ),
        ),
        2 => 
        array (
          0 => 
          array (
            'name' => 'prod_validade',
            'label' => 'LBL_PROD_VALIDADE ',
          ),
          1 => 
          array (
            'name' => 'prod_obs',
            'label' => 'LBL_PROD_OBS',
          ),
        ),
      ),
    ),
  ),
);
?>
