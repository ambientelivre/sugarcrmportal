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
            'name' => 'ant_inutilit_produto_name',
          ),
          1 => 
          array (
            'name' => 'in_qt',
            'label' => 'LBL_IN_QT',
          ),
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'in_lote',
            'label' => 'LBL_IN_LOTE',
          ),
        ),
        2 => 
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
      ),
    ),
  ),
);
?>
