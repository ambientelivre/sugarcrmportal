<?php
// created: 2014-12-09 15:48:27
$dictionary["ant_inutilizado"]["fields"]["ant_inutilint_secretarias"] = array (
  'name' => 'ant_inutilint_secretarias',
  'type' => 'link',
  'relationship' => 'ant_inutilizado_ant_secretarias',
  'source' => 'non-db',
  'vname' => 'LBL_ANT_INUTILIZADO_ANT_SECRETARIAS_FROM_ANT_SECRETARIAS_TITLE',
);
$dictionary["ant_inutilizado"]["fields"]["ant_inutilicretarias_name"] = array (
  'name' => 'ant_inutilicretarias_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_ANT_INUTILIZADO_ANT_SECRETARIAS_FROM_ANT_SECRETARIAS_TITLE',
  'save' => true,
  'id_name' => 'ant_inutil2440etarias_idb',
  'link' => 'ant_inutilint_secretarias',
  'table' => 'ant_secretarias',
  'module' => 'ant_secretarias',
  'rname' => 'name',
);
$dictionary["ant_inutilizado"]["fields"]["ant_inutil2440etarias_idb"] = array (
  'name' => 'ant_inutil2440etarias_idb',
  'type' => 'link',
  'relationship' => 'ant_inutilizado_ant_secretarias',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'left',
  'vname' => 'LBL_ANT_INUTILIZADO_ANT_SECRETARIAS_FROM_ANT_SECRETARIAS_TITLE',
);
