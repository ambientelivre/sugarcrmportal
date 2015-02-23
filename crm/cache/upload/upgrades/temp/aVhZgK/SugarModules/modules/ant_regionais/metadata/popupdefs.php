<?php
$popupMeta = array (
    'moduleMain' => 'ant_regionais',
    'varName' => 'ant_regionais',
    'orderBy' => 'ant_regionais.name',
    'whereClauses' => array (
  'name' => 'ant_regionais.name',
),
    'searchInputs' => array (
  0 => 'ant_regionais_number',
  1 => 'name',
  2 => 'priority',
  3 => 'status',
),
    'listviewdefs' => array (
  'ANT_REGIONACRETARIAS_NAME' => 
  array (
    'type' => 'relate',
    'link' => 'ant_regionant_secretarias',
    'label' => 'LBL_ANT_REGIONAIS_ANT_SECRETARIAS_FROM_ANT_SECRETARIAS_TITLE',
    'width' => '10%',
    'default' => true,
  ),
  'REG_RAZAO_SOCIAL' => 
  array (
    'type' => 'varchar',
    'label' => 'LBL_REG_RAZAO_SOCIAL ',
    'width' => '10%',
    'default' => true,
  ),
),
);
