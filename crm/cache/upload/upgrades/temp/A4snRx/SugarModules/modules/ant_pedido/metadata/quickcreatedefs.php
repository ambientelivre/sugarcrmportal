<?php
$module_name = 'ant_pedido';
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
            'name' => 'ped_status',
            'label' => 'LBL_PED_STATUS',
          ),
          1 => 
          array (
            'name' => 'ped_valor_total',
            'label' => 'LBL_PED_VALOR_TOTAL',
          ),
        ),
      ),
      'lbl_editview_panel2' => 
      array (
        0 => 
        array (
          0 => 
          array (
            'name' => 'ped_reg_origem',
            'label' => 'LBL_PED_REG_ORIGEM ',
          ),
          1 => 
          array (
            'name' => 'ped_sec_origem',
            'label' => 'LBL_PED_SEC_ORIGEM',
          ),
        ),
      ),
      'lbl_editview_panel3' => 
      array (
        0 => 
        array (
          0 => 
          array (
            'name' => 'ped_reg_destino',
            'label' => 'LBL_PED_REG_DESTINO',
          ),
          1 => 
          array (
            'name' => 'ped_clie_destino',
            'label' => 'LBL_PED_CLIE_DESTINO',
          ),
        ),
      ),
      'lbl_editview_panel1' => 
      array (
        0 => 
        array (
          0 => 
          array (
            'name' => 'created_by_name',
            'label' => 'LBL_CREATED',
          ),
          1 => 
          array (
            'name' => 'date_entered',
            'comment' => 'Date record created',
            'label' => 'LBL_DATE_ENTERED',
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
