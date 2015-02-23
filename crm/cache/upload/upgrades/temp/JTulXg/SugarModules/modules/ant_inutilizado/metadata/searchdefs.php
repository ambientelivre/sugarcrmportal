<?php
$module_name = 'ant_inutilizado';
$searchdefs [$module_name] = 
array (
  'layout' => 
  array (
    'basic_search' => 
    array (
      'ant_inutilicretarias_name' => 
      array (
        'type' => 'relate',
        'link' => 'ant_inutilint_secretarias',
        'label' => 'LBL_ANT_INUTILIZADO_ANT_SECRETARIAS_FROM_ANT_SECRETARIAS_TITLE',
        'width' => '10%',
        'default' => true,
        'name' => 'ant_inutilicretarias_name',
      ),
      'ant_inutiliregionais_name' => 
      array (
        'type' => 'relate',
        'link' => 'ant_inutili_ant_regionais',
        'label' => 'LBL_ANT_INUTILIZADO_ANT_REGIONAIS_FROM_ANT_REGIONAIS_TITLE',
        'width' => '10%',
        'default' => true,
        'name' => 'ant_inutiliregionais_name',
      ),
      'in_data' => 
      array (
        'type' => 'varchar',
        'label' => 'LBL_IN_DATA',
        'width' => '10%',
        'default' => true,
        'name' => 'in_data',
      ),
      'in_obs' => 
      array (
        'type' => 'text',
        'studio' => 'visible',
        'label' => 'LBL_IN_OBS',
        'sortable' => false,
        'width' => '10%',
        'default' => true,
        'name' => 'in_obs',
      ),
      'in_destino' => 
      array (
        'type' => 'text',
        'studio' => 'visible',
        'label' => 'LBL_IN_DESTINO',
        'sortable' => false,
        'width' => '10%',
        'default' => true,
        'name' => 'in_destino',
      ),
      'in_link' => 
      array (
        'type' => 'url',
        'label' => 'LBL_IN_LINK',
        'width' => '10%',
        'default' => true,
        'name' => 'in_link',
      ),
      'in_dt_nf' => 
      array (
        'type' => 'datetimecombo',
        'label' => 'LBL_IN_DT_NF',
        'width' => '10%',
        'default' => true,
        'name' => 'in_dt_nf',
      ),
    ),
    'advanced_search' => 
    array (
      'ant_inutilicretarias_name' => 
      array (
        'type' => 'relate',
        'link' => 'ant_inutilint_secretarias',
        'label' => 'LBL_ANT_INUTILIZADO_ANT_SECRETARIAS_FROM_ANT_SECRETARIAS_TITLE',
        'width' => '10%',
        'default' => true,
        'name' => 'ant_inutilicretarias_name',
      ),
      'ant_inutiliregionais_name' => 
      array (
        'type' => 'relate',
        'link' => 'ant_inutili_ant_regionais',
        'label' => 'LBL_ANT_INUTILIZADO_ANT_REGIONAIS_FROM_ANT_REGIONAIS_TITLE',
        'width' => '10%',
        'default' => true,
        'name' => 'ant_inutiliregionais_name',
      ),
      'in_obs' => 
      array (
        'type' => 'text',
        'studio' => 'visible',
        'label' => 'LBL_IN_OBS',
        'sortable' => false,
        'width' => '10%',
        'default' => true,
        'name' => 'in_obs',
      ),
      'in_link' => 
      array (
        'type' => 'url',
        'label' => 'LBL_IN_LINK',
        'width' => '10%',
        'default' => true,
        'name' => 'in_link',
      ),
      'in_destino' => 
      array (
        'type' => 'text',
        'studio' => 'visible',
        'label' => 'LBL_IN_DESTINO',
        'sortable' => false,
        'width' => '10%',
        'default' => true,
        'name' => 'in_destino',
      ),
      'in_dt_nf' => 
      array (
        'type' => 'datetimecombo',
        'label' => 'LBL_IN_DT_NF',
        'width' => '10%',
        'default' => true,
        'name' => 'in_dt_nf',
      ),
      'in_data' => 
      array (
        'type' => 'varchar',
        'label' => 'LBL_IN_DATA',
        'width' => '10%',
        'default' => true,
        'name' => 'in_data',
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
