<?php
$module_name = 'ant_estoque_geral';
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
          0 => 
          array (
            'name' => 'eg_lote',
            'label' => 'LBL_EG_LOTE',
          ),
          1 => 
          array (
            'name' => 'eg_qtd',
            'label' => 'LBL_EG_QTD',
          ),
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'ant_estoqueregionais_name',
          ),
          1 => 
          array (
            'name' => 'ant_estoquecretarias_name',
          ),
        ),
        2 => 
        array (
          0 => 
          array (
            'name' => 'ant_estoquet_produto_name',
          ),
        ),
        3 => 
        array (
          0 => '',
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
