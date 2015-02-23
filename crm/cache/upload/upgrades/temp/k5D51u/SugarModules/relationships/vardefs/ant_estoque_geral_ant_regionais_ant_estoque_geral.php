<?php
// created: 2014-12-17 16:02:11
$dictionary["ant_estoque_geral"]["fields"]["ant_estoque_ant_regionais"] = array (
  'name' => 'ant_estoque_ant_regionais',
  'type' => 'link',
  'relationship' => 'ant_estoque_geral_ant_regionais',
  'source' => 'non-db',
  'vname' => 'LBL_ANT_ESTOQUE_GERAL_ANT_REGIONAIS_FROM_ANT_REGIONAIS_TITLE',
);
$dictionary["ant_estoque_geral"]["fields"]["ant_estoqueregionais_name"] = array (
  'name' => 'ant_estoqueregionais_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_ANT_ESTOQUE_GERAL_ANT_REGIONAIS_FROM_ANT_REGIONAIS_TITLE',
  'save' => true,
  'id_name' => 'ant_estoquf27agionais_idb',
  'link' => 'ant_estoque_ant_regionais',
  'table' => 'ant_regionais',
  'module' => 'ant_regionais',
  'rname' => 'name',
);
$dictionary["ant_estoque_geral"]["fields"]["ant_estoquf27agionais_idb"] = array (
  'name' => 'ant_estoquf27agionais_idb',
  'type' => 'link',
  'relationship' => 'ant_estoque_geral_ant_regionais',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'left',
  'vname' => 'LBL_ANT_ESTOQUE_GERAL_ANT_REGIONAIS_FROM_ANT_REGIONAIS_TITLE',
);
