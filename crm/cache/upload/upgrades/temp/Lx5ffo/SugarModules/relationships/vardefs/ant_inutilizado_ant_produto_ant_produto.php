<?php
// created: 2014-11-27 09:33:52
$dictionary["ant_produto"]["fields"]["ant_inutilido_ant_produto"] = array (
  'name' => 'ant_inutilido_ant_produto',
  'type' => 'link',
  'relationship' => 'ant_inutilizado_ant_produto',
  'source' => 'non-db',
  'vname' => 'LBL_ANT_INUTILIZADO_ANT_PRODUTO_FROM_ANT_INUTILIZADO_TITLE',
);
$dictionary["ant_produto"]["fields"]["ant_inutilit_produto_name"] = array (
  'name' => 'ant_inutilit_produto_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_ANT_INUTILIZADO_ANT_PRODUTO_FROM_ANT_INUTILIZADO_TITLE',
  'save' => true,
  'id_name' => 'ant_inutil2e50ilizado_ida',
  'link' => 'ant_inutilido_ant_produto',
  'table' => 'ant_inutilizado',
  'module' => 'ant_inutilizado',
  'rname' => 'name',
);
$dictionary["ant_produto"]["fields"]["ant_inutil2e50ilizado_ida"] = array (
  'name' => 'ant_inutil2e50ilizado_ida',
  'type' => 'link',
  'relationship' => 'ant_inutilizado_ant_produto',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'left',
  'vname' => 'LBL_ANT_INUTILIZADO_ANT_PRODUTO_FROM_ANT_INUTILIZADO_TITLE',
);
