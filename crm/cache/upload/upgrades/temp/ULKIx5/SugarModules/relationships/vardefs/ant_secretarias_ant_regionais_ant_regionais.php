<?php
// created: 2014-11-27 11:41:20
$dictionary["ant_regionais"]["fields"]["ant_secreta_ant_regionais"] = array (
  'name' => 'ant_secreta_ant_regionais',
  'type' => 'link',
  'relationship' => 'ant_secretarias_ant_regionais',
  'source' => 'non-db',
  'vname' => 'LBL_ANT_SECRETARIAS_ANT_REGIONAIS_FROM_ANT_SECRETARIAS_TITLE',
);
$dictionary["ant_regionais"]["fields"]["ant_secretaregionais_name"] = array (
  'name' => 'ant_secretaregionais_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_ANT_SECRETARIAS_ANT_REGIONAIS_FROM_ANT_SECRETARIAS_TITLE',
  'save' => true,
  'id_name' => 'ant_secretf930etarias_ida',
  'link' => 'ant_secreta_ant_regionais',
  'table' => 'ant_secretarias',
  'module' => 'ant_secretarias',
  'rname' => 'name',
);
$dictionary["ant_regionais"]["fields"]["ant_secretf930etarias_ida"] = array (
  'name' => 'ant_secretf930etarias_ida',
  'type' => 'link',
  'relationship' => 'ant_secretarias_ant_regionais',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'right',
  'vname' => 'LBL_ANT_SECRETARIAS_ANT_REGIONAIS_FROM_ANT_REGIONAIS_TITLE',
);
