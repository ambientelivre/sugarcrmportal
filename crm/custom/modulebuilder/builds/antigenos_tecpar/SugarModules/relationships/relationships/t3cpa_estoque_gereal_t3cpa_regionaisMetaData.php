<?php
// created: 2014-08-26 10:46:21
$dictionary["t3cpa_estoque_gereal_t3cpa_regionais"] = array (
  'true_relationship_type' => 'one-to-one',
  'relationships' => 
  array (
    't3cpa_estoque_gereal_t3cpa_regionais' => 
    array (
      'lhs_module' => 't3cpa_estoque_gereal',
      'lhs_table' => 't3cpa_estoque_gereal',
      'lhs_key' => 'id',
      'rhs_module' => 't3cpa_regionais',
      'rhs_table' => 't3cpa_regionais',
      'rhs_key' => 'id',
      'relationship_type' => 'many-to-many',
      'join_table' => 't3cpa_estoqpa_regionais_c',
      'join_key_lhs' => 't3cpa_esto89eb_gereal_ida',
      'join_key_rhs' => 't3cpa_esto991agionais_idb',
    ),
  ),
  'table' => 't3cpa_estoqpa_regionais_c',
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
      'name' => 't3cpa_esto89eb_gereal_ida',
      'type' => 'varchar',
      'len' => 36,
    ),
    4 => 
    array (
      'name' => 't3cpa_esto991agionais_idb',
      'type' => 'varchar',
      'len' => 36,
    ),
  ),
  'indices' => 
  array (
    0 => 
    array (
      'name' => 't3cpa_estoq3cpa_regionaisspk',
      'type' => 'primary',
      'fields' => 
      array (
        0 => 'id',
      ),
    ),
    1 => 
    array (
      'name' => 't3cpa_estoq3cpa_regionais_ida1',
      'type' => 'index',
      'fields' => 
      array (
        0 => 't3cpa_esto89eb_gereal_ida',
      ),
    ),
    2 => 
    array (
      'name' => 't3cpa_estoq3cpa_regionais_idb2',
      'type' => 'index',
      'fields' => 
      array (
        0 => 't3cpa_esto991agionais_idb',
      ),
    ),
  ),
);
?>
