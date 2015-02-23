<?php
$module_name = 'ant_inutilizado';
$listViewDefs [$module_name] = 
array (
  'ANT_INUTILIREGIONAIS_NAME' => 
  array (
    'type' => 'relate',
    'link' => 'ant_inutili_ant_regionais',
    'label' => 'LBL_ANT_INUTILIZADO_ANT_REGIONAIS_FROM_ANT_REGIONAIS_TITLE',
    'width' => '10%',
    'default' => true,
  ),
  'ANT_INUTILICRETARIAS_NAME' => 
  array (
    'type' => 'relate',
    'link' => 'ant_inutilint_secretarias',
    'label' => 'LBL_ANT_INUTILIZADO_ANT_SECRETARIAS_FROM_ANT_SECRETARIAS_TITLE',
    'width' => '10%',
    'default' => true,
  ),
  'IN_DESTINO' => 
  array (
    'type' => 'text',
    'studio' => 'visible',
    'label' => 'LBL_IN_DESTINO',
    'sortable' => false,
    'width' => '10%',
    'default' => true,
  ),
  'IN_DT_NF' => 
  array (
    'type' => 'datetimecombo',
    'label' => 'LBL_IN_DT_NF',
    'width' => '10%',
    'default' => true,
  ),
);
?>
