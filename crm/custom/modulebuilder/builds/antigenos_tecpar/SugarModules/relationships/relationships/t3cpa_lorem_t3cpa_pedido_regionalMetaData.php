<?php
// created: 2014-08-22 13:45:49
$dictionary["t3cpa_lorem_t3cpa_pedido_regional"] = array (
  'true_relationship_type' => 'one-to-one',
  'relationships' => 
  array (
    't3cpa_lorem_t3cpa_pedido_regional' => 
    array (
      'lhs_module' => 't3cpa_lorem',
      'lhs_table' => 't3cpa_lorem',
      'lhs_key' => 'id',
      'rhs_module' => 't3cpa_pedido_regional',
      'rhs_table' => 't3cpa_pedido_regional',
      'rhs_key' => 'id',
      'relationship_type' => 'many-to-many',
      'join_table' => 't3cpa_loremido_regional_c',
      'join_key_lhs' => 't3cpa_lore8f94a_lorem_ida',
      'join_key_rhs' => 't3cpa_lore94cfegional_idb',
    ),
  ),
  'table' => 't3cpa_loremido_regional_c',
  'fields' => 
  array (
    0 => 
    array (
      'name' => 'id',
      'type' => 'varchar',
      'len' => 36,
    ),
    1 => 
    array (
      'name' => 'date_modified',
      'type' => 'datetime',
    ),
    2 => 
    array (
      'name' => 'deleted',
      'type' => 'bool',
      'len' => '1',
      'default' => '0',
      'required' => true,
    ),
    3 => 
    array (
      'name' => 't3cpa_lore8f94a_lorem_ida',
      'type' => 'varchar',
      'len' => 36,
    ),
    4 => 
    array (
      'name' => 't3cpa_lore94cfegional_idb',
      'type' => 'varchar',
      'len' => 36,
    ),
  ),
  'indices' => 
  array (
    0 => 
    array (
      'name' => 't3cpa_loremedido_regionalspk',
      'type' => 'primary',
      'fields' => 
      array (
        0 => 'id',
      ),
    ),
    1 => 
    array (
      'name' => 't3cpa_loremedido_regional_ida1',
      'type' => 'index',
      'fields' => 
      array (
        0 => 't3cpa_lore8f94a_lorem_ida',
      ),
    ),
    2 => 
    array (
      'name' => 't3cpa_loremedido_regional_idb2',
      'type' => 'index',
      'fields' => 
      array (
        0 => 't3cpa_lore94cfegional_idb',
      ),
    ),
  ),
);
?>
