<?php
// created: 2014-08-22 13:45:49
$dictionary["t3cpa_pedido_regional"]["fields"]["t3cpa_loremedido_regional"] = array (
  'name' => 't3cpa_loremedido_regional',
  'type' => 'link',
  'relationship' => 't3cpa_lorem_t3cpa_pedido_regional',
  'source' => 'non-db',
  'vname' => 'LBL_T3CPA_LOREM_T3CPA_PEDIDO_REGIONAL_FROM_T3CPA_LOREM_TITLE',
);
$dictionary["t3cpa_pedido_regional"]["fields"]["t3cpa_lorem_regional_name"] = array (
  'name' => 't3cpa_lorem_regional_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_T3CPA_LOREM_T3CPA_PEDIDO_REGIONAL_FROM_T3CPA_LOREM_TITLE',
  'save' => true,
  'id_name' => 't3cpa_lore8f94a_lorem_ida',
  'link' => 't3cpa_loremedido_regional',
  'table' => 't3cpa_lorem',
  'module' => 't3cpa_lorem',
  'rname' => 'name',
);
$dictionary["t3cpa_pedido_regional"]["fields"]["t3cpa_lore8f94a_lorem_ida"] = array (
  'name' => 't3cpa_lore8f94a_lorem_ida',
  'type' => 'link',
  'relationship' => 't3cpa_lorem_t3cpa_pedido_regional',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'left',
  'vname' => 'LBL_T3CPA_LOREM_T3CPA_PEDIDO_REGIONAL_FROM_T3CPA_LOREM_TITLE',
);
