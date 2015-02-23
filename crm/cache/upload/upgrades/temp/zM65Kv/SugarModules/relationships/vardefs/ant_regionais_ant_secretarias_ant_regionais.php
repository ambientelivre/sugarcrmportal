<?php
// created: 2014-11-26 16:02:49
$dictionary["ant_regionais"]["fields"]["ant_regionant_secretarias"] = array (
  'name' => 'ant_regionant_secretarias',
  'type' => 'link',
  'relationship' => 'ant_regionais_ant_secretarias',
  'source' => 'non-db',
  'vname' => 'LBL_ANT_REGIONAIS_ANT_SECRETARIAS_FROM_ANT_SECRETARIAS_TITLE',
);
$dictionary["ant_regionais"]["fields"]["ant_regionacretarias_name"] = array (
  'name' => 'ant_regionacretarias_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_ANT_REGIONAIS_ANT_SECRETARIAS_FROM_ANT_SECRETARIAS_TITLE',
  'save' => true,
  'id_name' => 'ant_region1213etarias_ida',
  'link' => 'ant_regionant_secretarias',
  'table' => 'ant_secretarias',
  'module' => 'ant_secretarias',
  'rname' => 'name',
);
$dictionary["ant_regionais"]["fields"]["ant_region1213etarias_ida"] = array (
  'name' => 'ant_region1213etarias_ida',
  'type' => 'link',
  'relationship' => 'ant_regionais_ant_secretarias',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'right',
  'vname' => 'LBL_ANT_REGIONAIS_ANT_SECRETARIAS_FROM_ANT_REGIONAIS_TITLE',
);
