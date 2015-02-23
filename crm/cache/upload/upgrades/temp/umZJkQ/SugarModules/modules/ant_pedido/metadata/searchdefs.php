<?php
$module_name = 'ant_pedido';
$searchdefs [$module_name] = 
array (
  'layout' => 
  array (
    'basic_search' => 
    array (
      'ped_codigo_boleto' => 
      array (
        'type' => 'varchar',
        'label' => 'LBL_PED_CODIGO_BOLETO',
        'width' => '10%',
        'default' => true,
        'name' => 'ped_codigo_boleto',
      ),
      'date_entered' => 
      array (
        'type' => 'datetime',
        'label' => 'LBL_DATE_ENTERED',
        'width' => '10%',
        'default' => true,
        'name' => 'date_entered',
      ),
      'ped_status' => 
      array (
        'type' => 'enum',
        'default' => true,
        'studio' => 'visible',
        'label' => 'LBL_PED_STATUS ',
        'sortable' => false,
        'width' => '10%',
        'name' => 'ped_status',
      ),
    ),
    'advanced_search' => 
    array (
      'ped_codigo_boleto' => 
      array (
        'type' => 'varchar',
        'label' => 'LBL_PED_CODIGO_BOLETO',
        'width' => '10%',
        'default' => true,
        'name' => 'ped_codigo_boleto',
      ),
      'ped_status' => 
      array (
        'type' => 'enum',
        'default' => true,
        'studio' => 'visible',
        'label' => 'LBL_PED_STATUS ',
        'sortable' => false,
        'width' => '10%',
        'name' => 'ped_status',
      ),
      'date_entered' => 
      array (
        'type' => 'datetime',
        'label' => 'LBL_DATE_ENTERED',
        'width' => '10%',
        'default' => true,
        'name' => 'date_entered',
      ),
      'ped_sec_destino' => 
      array (
        'type' => 'varchar',
        'label' => 'LBL_PED_SEC_DESTINO',
        'width' => '10%',
        'default' => true,
        'name' => 'ped_sec_destino',
      ),
      'ped_reg_destino' => 
      array (
        'type' => 'varchar',
        'label' => 'LBL_PED_REG_DESTINO',
        'width' => '10%',
        'default' => true,
        'name' => 'ped_reg_destino',
      ),
      'ped_clie_destino' => 
      array (
        'type' => 'varchar',
        'label' => 'LBL_PED_CLIE_DESTINO',
        'width' => '10%',
        'default' => true,
        'name' => 'ped_clie_destino',
      ),
      'ped_sec_origem' => 
      array (
        'type' => 'varchar',
        'label' => 'LBL_PED_SEC_ORIGEM',
        'width' => '10%',
        'default' => true,
        'name' => 'ped_sec_origem',
      ),
      'ped_reg_origem' => 
      array (
        'type' => 'varchar',
        'label' => 'LBL_PED_REG_ORIGEM ',
        'width' => '10%',
        'default' => true,
        'name' => 'ped_reg_origem',
      ),
      'ped_valor_total' => 
      array (
        'type' => 'varchar',
        'label' => 'LBL_PED_VALOR_TOTAL',
        'width' => '10%',
        'default' => true,
        'name' => 'ped_valor_total',
      ),
    ),
  ),
  'templateMeta' => 
  array (
    'maxColumns' => '3',
    'maxColumnsBasic' => '4',
    'widths' => 
    array (
      'label' => '10',
      'field' => '30',
    ),
  ),
);
?>
