<?php
// created: 2014-11-27 11:41:22
$dictionary["ant_inutilizado"]["fields"]["ant_inutilido_ant_produto"] = array (
  'name' => 'ant_inutilido_ant_produto',
  'type' => 'link',
  'relationship' => 'ant_inutilizado_ant_produto',
  'source' => 'non-db',
  'vname' => 'LBL_ANT_INUTILIZADO_ANT_PRODUTO_FROM_ANT_PRODUTO_TITLE',
);
$dictionary["ant_inutilizado"]["fields"]["ant_inutilit_produto_name"] = array (
  'name' => 'ant_inutilit_produto_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_ANT_INUTILIZADO_ANT_PRODUTO_FROM_ANT_PRODUTO_TITLE',
  'save' => true,
  'id_name' => 'ant_inutile3f3produto_idb',
  'link' => 'ant_inutilido_ant_produto',
  'table' => 'ant_produto',
  'module' => 'ant_produto',
  'rname' => 'name',
);
$dictionary["ant_inutilizado"]["fields"]["ant_inutile3f3produto_idb"] = array (
  'name' => 'ant_inutile3f3produto_idb',
  'type' => 'link',
  'relationship' => 'ant_inutilizado_ant_produto',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'left',
  'vname' => 'LBL_ANT_INUTILIZADO_ANT_PRODUTO_FROM_ANT_PRODUTO_TITLE',
);
