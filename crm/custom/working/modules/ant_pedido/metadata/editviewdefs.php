<?php
$module_name = 'ant_pedido';
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
            'name' => 'ped_codigo_boleto',
            'label' => 'LBL_PED_CODIGO_BOLETO',
          ),
          1 => 
          array (
            'name' => 'ped_nm_razao',
            'label' => 'LBL_PED_NM_RAZAO',
          ),
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'ped_desc_produto',
            'label' => 'LBL_PED_DESC_PRODUTO',
          ),
          1 => 
          array (
            'name' => 'ped_quantidade',
            'label' => 'LBL_PED_QUANTIDADE',
          ),
        ),
        2 => 
        array (
          0 => 
          array (
            'name' => 'id_produto',
            'label' => 'LBL_ID_PRODUTO',
          ),
          1 => 
          array (
            'name' => 'ped_lote',
            'label' => 'LBL_PED_LOTE',
          ),
        ),
        3 => 
        array (
          0 => 
          array (
            'name' => 'ped_valor_unitario',
            'label' => 'LBL_PED_VALOR_UNITARIO',
          ),
          1 => 
          array (
            'name' => 'ped_valor_total',
            'label' => 'LBL_PED_VALOR_TOTAL',
          ),
        ),
        4 => 
        array (
          0 => 
          array (
            'name' => 'ped_status',
            'label' => 'LBL_PED_STATUS',
          ),
          1 => '',
        ),
      ),
      'lbl_editview_panel1' => 
      array (
        0 => 
        array (
          0 => '',
          1 => '',
        ),
      ),
    ),
  ),
);
?>
