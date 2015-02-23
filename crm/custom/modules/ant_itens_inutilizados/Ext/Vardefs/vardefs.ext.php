<?php 
 //WARNING: The contents of this file are auto-generated


// created: 2014-12-23 09:50:36
$dictionary["ant_itens_inutilizados"]["fields"]["ant_itens_int_inutilizado"] = array (
  'name' => 'ant_itens_int_inutilizado',
  'type' => 'link',
  'relationship' => 'ant_itens_inutilizados_ant_inutilizado',
  'source' => 'non-db',
  'vname' => 'LBL_ANT_ITENS_INUTILIZADOS_ANT_INUTILIZADO_FROM_ANT_INUTILIZADO_TITLE',
);
$dictionary["ant_itens_inutilizados"]["fields"]["ant_itens_iutilizado_name"] = array (
  'name' => 'ant_itens_iutilizado_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_ANT_ITENS_INUTILIZADOS_ANT_INUTILIZADO_FROM_ANT_INUTILIZADO_TITLE',
  'save' => true,
  'id_name' => 'ant_itens_9f2ailizado_ida',
  'link' => 'ant_itens_int_inutilizado',
  'table' => 'ant_inutilizado',
  'module' => 'ant_inutilizado',
  'rname' => 'name',
);
$dictionary["ant_itens_inutilizados"]["fields"]["ant_itens_9f2ailizado_ida"] = array (
  'name' => 'ant_itens_9f2ailizado_ida',
  'type' => 'link',
  'relationship' => 'ant_itens_inutilizados_ant_inutilizado',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'right',
  'vname' => 'LBL_ANT_ITENS_INUTILIZADOS_ANT_INUTILIZADO_FROM_ANT_ITENS_INUTILIZADOS_TITLE',
);


// created: 2014-12-23 09:50:35
$dictionary["ant_itens_inutilizados"]["fields"]["ant_inutilis_inutilizados"] = array (
  'name' => 'ant_inutilis_inutilizados',
  'type' => 'link',
  'relationship' => 'ant_inutilizado_ant_itens_inutilizados',
  'source' => 'non-db',
  'vname' => 'LBL_ANT_INUTILIZADO_ANT_ITENS_INUTILIZADOS_FROM_ANT_INUTILIZADO_TITLE',
);

?>