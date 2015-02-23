<?php
// created: 2014-08-26 10:46:21
$dictionary["t3cpa_estoque_gereal_t3cpa_secretarias"] = array (
  'true_relationship_type' => 'one-to-one',
  'relationships' => 
  array (
    't3cpa_estoque_gereal_t3cpa_secretarias' => 
    array (
      'lhs_module' => 't3cpa_estoque_gereal',
      'lhs_table' => 't3cpa_estoque_gereal',
      'lhs_key' => 'id',
      'rhs_module' => 't3cpa_secretarias',
      'rhs_table' => 't3cpa_secretarias',
      'rhs_key' => 'id',
      'relationship_type' => 'many-to-many',
      'join_table' => 't3cpa_estoq_secretarias_c',
      'join_key_lhs' => 't3cpa_estoc9d4_gereal_ida',
      'join_key_rhs' => 't3cpa_esto5beaetarias_idb',
    ),
  ),
  'table' => 't3cpa_estoq_secretarias_c',
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
      'name' => 't3cpa_estoc9d4_gereal_ida',
      'type' => 'varchar',
      'len' => 36,
    ),
    4 => 
    array (
      'name' => 't3cpa_esto5beaetarias_idb',
      'type' => 'varchar',
      'len' => 36,
    ),
  ),
  'indices' => 
  array (
    0 => 
    array (
      'name' => 't3cpa_estoqpa_secretariasspk',
      'type' => 'primary',
      'fields' => 
      array (
        0 => 'id',
      ),
    ),
    1 => 
    array (
      'name' => 't3cpa_estoqpa_secretarias_ida1',
      'type' => 'index',
      'fields' => 
      array (
        0 => 't3cpa_estoc9d4_gereal_ida',
      ),
    ),
    2 => 
    array (
      'name' => 't3cpa_estoqpa_secretarias_idb2',
      'type' => 'index',
      'fields' => 
      array (
        0 => 't3cpa_esto5beaetarias_idb',
      ),
    ),
  ),
);
?>
