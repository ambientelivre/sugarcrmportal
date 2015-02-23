<?php
// created: 2014-08-22 13:45:49
$dictionary["t3cpa_lorem"]["fields"]["t3cpa_loremedido_regional"] = array (
  'name' => 't3cpa_loremedido_regional',
  'type' => 'link',
  'relationship' => 't3cpa_lorem_t3cpa_pedido_regional',
  'source' => 'non-db',
  'vname' => 'LBL_T3CPA_LOREM_T3CPA_PEDIDO_REGIONAL_FROM_T3CPA_PEDIDO_REGIONAL_TITLE',
);
$dictionary["t3cpa_lorem"]["fields"]["t3cpa_lorem_regional_name"] = array (
  'name' => 't3cpa_lorem_regional_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_T3CPA_LOREM_T3CPA_PEDIDO_REGIONAL_FROM_T3CPA_PEDIDO_REGIONAL_TITLE',
  'save' => true,
  'id_name' => 't3cpa_lore94cfegional_idb',
  'link' => 't3cpa_loremedido_regional',
  'table' => 't3cpa_pedido_regional',
  'module' => 't3cpa_pedido_regional',
  'rname' => 'name',
);
$dictionary["t3cpa_lorem"]["fields"]["t3cpa_lore94cfegional_idb"] = array (
  'name' => 't3cpa_lore94cfegional_idb',
  'type' => 'link',
  'relationship' => 't3cpa_lorem_t3cpa_pedido_regional',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'left',
  'vname' => 'LBL_T3CPA_LOREM_T3CPA_PEDIDO_REGIONAL_FROM_T3CPA_PEDIDO_REGIONAL_TITLE',
);
