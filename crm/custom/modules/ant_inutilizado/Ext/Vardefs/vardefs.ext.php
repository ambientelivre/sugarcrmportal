<?php 
 //WARNING: The contents of this file are auto-generated


// created: 2014-12-23 09:50:35
$dictionary["ant_inutilizado"]["fields"]["ant_inutilis_inutilizados"] = array (
  'name' => 'ant_inutilis_inutilizados',
  'type' => 'link',
  'relationship' => 'ant_inutilizado_ant_itens_inutilizados',
  'source' => 'non-db',
  'vname' => 'LBL_ANT_INUTILIZADO_ANT_ITENS_INUTILIZADOS_FROM_ANT_ITENS_INUTILIZADOS_TITLE',
);


// created: 2014-12-23 09:50:34
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


// created: 2014-12-23 09:50:35
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


// created: 2014-12-23 09:50:36
$dictionary["ant_inutilizado"]["fields"]["ant_itens_int_inutilizado"] = array (
  'name' => 'ant_itens_int_inutilizado',
  'type' => 'link',
  'relationship' => 'ant_itens_inutilizados_ant_inutilizado',
  'source' => 'non-db',
  'side' => 'right',
  'vname' => 'LBL_ANT_ITENS_INUTILIZADOS_ANT_INUTILIZADO_FROM_ANT_ITENS_INUTILIZADOS_TITLE',
);

?>