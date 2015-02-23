<?php
// created: 2014-08-26 08:48:41
$dictionary["t3cpa_estoque_gereal"]["fields"]["t3cpa_estoq3cpa_regionais"] = array (
  'name' => 't3cpa_estoq3cpa_regionais',
  'type' => 'link',
  'relationship' => 't3cpa_estoque_gereal_t3cpa_regionais',
  'source' => 'non-db',
  'vname' => 'LBL_T3CPA_ESTOQUE_GEREAL_T3CPA_REGIONAIS_FROM_T3CPA_REGIONAIS_TITLE',
);
$dictionary["t3cpa_estoque_gereal"]["fields"]["t3cpa_estoqregionais_name"] = array (
  'name' => 't3cpa_estoqregionais_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_T3CPA_ESTOQUE_GEREAL_T3CPA_REGIONAIS_FROM_T3CPA_REGIONAIS_TITLE',
  'save' => true,
  'id_name' => 't3cpa_esto991agionais_idb',
  'link' => 't3cpa_estoq3cpa_regionais',
  'table' => 't3cpa_regionais',
  'module' => 't3cpa_regionais',
  'rname' => 'name',
);
$dictionary["t3cpa_estoque_gereal"]["fields"]["t3cpa_esto991agionais_idb"] = array (
  'name' => 't3cpa_esto991agionais_idb',
  'type' => 'link',
  'relationship' => 't3cpa_estoque_gereal_t3cpa_regionais',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'left',
  'vname' => 'LBL_T3CPA_ESTOQUE_GEREAL_T3CPA_REGIONAIS_FROM_T3CPA_REGIONAIS_TITLE',
);
