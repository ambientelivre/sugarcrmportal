<?php
// created: 2014-12-17 16:02:09
$dictionary["ant_secretarias"]["fields"]["ant_secreta_ant_regionais"] = array (
  'name' => 'ant_secreta_ant_regionais',
  'type' => 'link',
  'relationship' => 'ant_secretarias_ant_regionais',
  'source' => 'non-db',
  'vname' => 'LBL_ANT_SECRETARIAS_ANT_REGIONAIS_FROM_ANT_REGIONAIS_TITLE',
);
$dictionary["ant_secretarias"]["fields"]["ant_secretaregionais_name"] = array (
  'name' => 'ant_secretaregionais_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_ANT_SECRETARIAS_ANT_REGIONAIS_FROM_ANT_REGIONAIS_TITLE',
  'save' => true,
  'id_name' => 'ant_secretdacfgionais_ida',
  'link' => 'ant_secreta_ant_regionais',
  'table' => 'ant_regionais',
  'module' => 'ant_regionais',
  'rname' => 'name',
);
$dictionary["ant_secretarias"]["fields"]["ant_secretdacfgionais_ida"] = array (
  'name' => 'ant_secretdacfgionais_ida',
  'type' => 'link',
  'relationship' => 'ant_secretarias_ant_regionais',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'right',
  'vname' => 'LBL_ANT_SECRETARIAS_ANT_REGIONAIS_FROM_ANT_SECRETARIAS_TITLE',
);
