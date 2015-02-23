<?php
// created: 2014-11-27 09:33:52
$dictionary["ant_secretarias"]["fields"]["ant_inutilint_secretarias"] = array (
  'name' => 'ant_inutilint_secretarias',
  'type' => 'link',
  'relationship' => 'ant_inutilizado_ant_secretarias',
  'source' => 'non-db',
  'vname' => 'LBL_ANT_INUTILIZADO_ANT_SECRETARIAS_FROM_ANT_INUTILIZADO_TITLE',
);
$dictionary["ant_secretarias"]["fields"]["ant_inutilicretarias_name"] = array (
  'name' => 'ant_inutilicretarias_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_ANT_INUTILIZADO_ANT_SECRETARIAS_FROM_ANT_INUTILIZADO_TITLE',
  'save' => true,
  'id_name' => 'ant_inutil6267ilizado_ida',
  'link' => 'ant_inutilint_secretarias',
  'table' => 'ant_inutilizado',
  'module' => 'ant_inutilizado',
  'rname' => 'name',
);
$dictionary["ant_secretarias"]["fields"]["ant_inutil6267ilizado_ida"] = array (
  'name' => 'ant_inutil6267ilizado_ida',
  'type' => 'link',
  'relationship' => 'ant_inutilizado_ant_secretarias',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'left',
  'vname' => 'LBL_ANT_INUTILIZADO_ANT_SECRETARIAS_FROM_ANT_INUTILIZADO_TITLE',
);
