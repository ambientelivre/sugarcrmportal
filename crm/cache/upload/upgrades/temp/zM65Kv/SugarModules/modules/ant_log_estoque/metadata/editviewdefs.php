<?php
$module_name = 'ant_log_estoque';
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
            'name' => 'log_data',
            'label' => 'LBL_LOG_DATA',
          ),
          1 => 
          array (
            'name' => 'log_lote',
            'label' => 'LBL_LOG_LOTE',
          ),
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'log_prod',
            'label' => 'LBL_LOG_PROD',
          ),
          1 => 
          array (
            'name' => 'log_qtd',
            'label' => 'LBL_LOG_QTD',
          ),
        ),
        2 => 
        array (
          0 => 
          array (
            'name' => 'log_sec_origem',
            'label' => 'LBL_LOG_SEC_ORIGEM',
          ),
          1 => 
          array (
            'name' => 'log_sec_destino',
            'label' => 'LBL_LOG_SEC_DESTINO',
          ),
        ),
        3 => 
        array (
          0 => 
          array (
            'name' => 'log_reg_origem',
            'label' => 'LBL_LOG_REG_ORIGEM',
          ),
          1 => 
          array (
            'name' => 'log_reg_destino',
            'label' => 'LBL_LOG_REG_DESTINO',
          ),
        ),
        4 => 
        array (
          0 => 
          array (
            'name' => 'log_clie_dest',
            'label' => 'LBL_LOG_CLIE_DEST',
          ),
          1 => 
          array (
            'name' => 'log_tecpar',
            'label' => 'LBL_LOG_TECPAR',
          ),
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
