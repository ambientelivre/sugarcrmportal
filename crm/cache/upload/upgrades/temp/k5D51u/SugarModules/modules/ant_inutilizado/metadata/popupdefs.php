<?php
$popupMeta = array (
    'moduleMain' => 'ant_inutilizado',
    'varName' => 'ant_inutilizado',
    'orderBy' => 'ant_inutilizado.name',
    'whereClauses' => array (
  'ant_inutilicretarias_name' => 'ant_inutilizado.ant_inutilicretarias_name',
  'ant_inutiliregionais_name' => 'ant_inutilizado.ant_inutiliregionais_name',
  'in_data' => 'ant_inutilizado.in_data',
  'in_destino' => 'ant_inutilizado.in_destino',
  'in_dt_nf' => 'ant_inutilizado.in_dt_nf',
  'in_obs' => 'ant_inutilizado.in_obs',
  'in_link' => 'ant_inutilizado.in_link',
),
    'searchInputs' => array (
  4 => 'ant_inutilicretarias_name',
  5 => 'ant_inutiliregionais_name',
  6 => 'in_data',
  7 => 'in_destino',
  8 => 'in_dt_nf',
  9 => 'in_obs',
  10 => 'in_link',
),
    'searchdefs' => array (
  'ant_inutilicretarias_name' => 
  array (
    'type' => 'relate',
    'link' => 'ant_inutilint_secretarias',
    'label' => 'LBL_ANT_INUTILIZADO_ANT_SECRETARIAS_FROM_ANT_SECRETARIAS_TITLE',
    'width' => '10%',
    'name' => 'ant_inutilicretarias_name',
  ),
  'ant_inutiliregionais_name' => 
  array (
    'type' => 'relate',
    'link' => 'ant_inutili_ant_regionais',
    'label' => 'LBL_ANT_INUTILIZADO_ANT_REGIONAIS_FROM_ANT_REGIONAIS_TITLE',
    'width' => '10%',
    'name' => 'ant_inutiliregionais_name',
  ),
  'in_data' => 
  array (
    'type' => 'varchar',
    'label' => 'LBL_IN_DATA',
    'width' => '10%',
    'name' => 'in_data',
  ),
  'in_destino' => 
  array (
    'type' => 'text',
    'studio' => 'visible',
    'label' => 'LBL_IN_DESTINO',
    'sortable' => false,
    'width' => '10%',
    'name' => 'in_destino',
  ),
  'in_dt_nf' => 
  array (
    'type' => 'datetimecombo',
    'label' => 'LBL_IN_DT_NF',
    'width' => '10%',
    'name' => 'in_dt_nf',
  ),
  'in_obs' => 
  array (
    'type' => 'text',
    'studio' => 'visible',
    'label' => 'LBL_IN_OBS',
    'sortable' => false,
    'width' => '10%',
    'name' => 'in_obs',
  ),
  'in_link' => 
  array (
    'type' => 'url',
    'label' => 'LBL_IN_LINK',
    'width' => '10%',
    'name' => 'in_link',
  ),
),
    'listviewdefs' => array (
  'ANT_INUTILIREGIONAIS_NAME' => 
  array (
    'type' => 'relate',
    'link' => 'ant_inutili_ant_regionais',
    'label' => 'LBL_ANT_INUTILIZADO_ANT_REGIONAIS_FROM_ANT_REGIONAIS_TITLE',
    'width' => '10%',
    'default' => true,
    'name' => 'ant_inutiliregionais_name',
  ),
  'ANT_INUTILICRETARIAS_NAME' => 
  array (
    'type' => 'relate',
    'link' => 'ant_inutilint_secretarias',
    'label' => 'LBL_ANT_INUTILIZADO_ANT_SECRETARIAS_FROM_ANT_SECRETARIAS_TITLE',
    'width' => '10%',
    'default' => true,
    'name' => 'ant_inutilicretarias_name',
  ),
  'IN_DESTINO' => 
  array (
    'type' => 'text',
    'studio' => 'visible',
    'label' => 'LBL_IN_DESTINO',
    'sortable' => false,
    'width' => '10%',
    'default' => true,
    'name' => 'in_destino',
  ),
  'IN_OBS' => 
  array (
    'type' => 'text',
    'studio' => 'visible',
    'label' => 'LBL_IN_OBS',
    'sortable' => false,
    'width' => '10%',
    'default' => true,
    'name' => 'in_obs',
  ),
  'IN_DT_NF' => 
  array (
    'type' => 'datetimecombo',
    'label' => 'LBL_IN_DT_NF',
    'width' => '10%',
    'default' => true,
    'name' => 'in_dt_nf',
  ),
  'IN_LINK' => 
  array (
    'type' => 'url',
    'label' => 'LBL_IN_LINK',
    'width' => '10%',
    'default' => true,
    'name' => 'in_link',
  ),
  'IN_DATA' => 
  array (
    'type' => 'varchar',
    'label' => 'LBL_IN_DATA',
    'width' => '10%',
    'default' => true,
    'name' => 'in_data',
  ),
),
);
