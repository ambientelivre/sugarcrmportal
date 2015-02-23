<?php
// created: 2014-11-27 09:33:52
$dictionary["ant_inutilizado"]["fields"]["ant_inutili_ant_regionais"] = array (
  'name' => 'ant_inutili_ant_regionais',
  'type' => 'link',
  'relationship' => 'ant_inutilizado_ant_regionais',
  'source' => 'non-db',
  'vname' => 'LBL_ANT_INUTILIZADO_ANT_REGIONAIS_FROM_ANT_REGIONAIS_TITLE',
);
$dictionary["ant_inutilizado"]["fields"]["ant_inutiliregionais_name"] = array (
  'name' => 'ant_inutiliregionais_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_ANT_INUTILIZADO_ANT_REGIONAIS_FROM_ANT_REGIONAIS_TITLE',
  'save' => true,
  'id_name' => 'ant_inutil5c3egionais_idb',
  'link' => 'ant_inutili_ant_regionais',
  'table' => 'ant_regionais',
  'module' => 'ant_regionais',
  'rname' => 'name',
);
$dictionary["ant_inutilizado"]["fields"]["ant_inutil5c3egionais_idb"] = array (
  'name' => 'ant_inutil5c3egionais_idb',
  'type' => 'link',
  'relationship' => 'ant_inutilizado_ant_regionais',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'left',
  'vname' => 'LBL_ANT_INUTILIZADO_ANT_REGIONAIS_FROM_ANT_REGIONAIS_TITLE',
);
