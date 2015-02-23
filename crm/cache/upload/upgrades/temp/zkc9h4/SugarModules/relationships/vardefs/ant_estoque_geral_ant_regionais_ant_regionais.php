<?php
// created: 2014-12-09 15:48:26
$dictionary["ant_regionais"]["fields"]["ant_estoque_ant_regionais"] = array (
  'name' => 'ant_estoque_ant_regionais',
  'type' => 'link',
  'relationship' => 'ant_estoque_geral_ant_regionais',
  'source' => 'non-db',
  'vname' => 'LBL_ANT_ESTOQUE_GERAL_ANT_REGIONAIS_FROM_ANT_ESTOQUE_GERAL_TITLE',
);
$dictionary["ant_regionais"]["fields"]["ant_estoqueregionais_name"] = array (
  'name' => 'ant_estoqueregionais_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_ANT_ESTOQUE_GERAL_ANT_REGIONAIS_FROM_ANT_ESTOQUE_GERAL_TITLE',
  'save' => true,
  'id_name' => 'ant_estoqu7abae_geral_ida',
  'link' => 'ant_estoque_ant_regionais',
  'table' => 'ant_estoque_geral',
  'module' => 'ant_estoque_geral',
  'rname' => 'name',
);
$dictionary["ant_regionais"]["fields"]["ant_estoqu7abae_geral_ida"] = array (
  'name' => 'ant_estoqu7abae_geral_ida',
  'type' => 'link',
  'relationship' => 'ant_estoque_geral_ant_regionais',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'left',
  'vname' => 'LBL_ANT_ESTOQUE_GERAL_ANT_REGIONAIS_FROM_ANT_ESTOQUE_GERAL_TITLE',
);
