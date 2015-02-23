<?php
// created: 2014-11-27 11:26:42
$dictionary["ant_estoque_geral_ant_regionais"] = array (
  'true_relationship_type' => 'one-to-one',
  'relationships' => 
  array (
    'ant_estoque_geral_ant_regionais' => 
    array (
      'lhs_module' => 'ant_estoque_geral',
      'lhs_table' => 'ant_estoque_geral',
      'lhs_key' => 'id',
      'rhs_module' => 'ant_regionais',
      'rhs_table' => 'ant_regionais',
      'rhs_key' => 'id',
      'relationship_type' => 'many-to-many',
      'join_table' => 'ant_estoquent_regionais_c',
      'join_key_lhs' => 'ant_estoqu7abae_geral_ida',
      'join_key_rhs' => 'ant_estoquf27agionais_idb',
    ),
  ),
  'table' => 'ant_estoquent_regionais_c',
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
      'name' => 'ant_estoqu7abae_geral_ida',
      'type' => 'varchar',
      'len' => 36,
    ),
    4 => 
    array (
      'name' => 'ant_estoquf27agionais_idb',
      'type' => 'varchar',
      'len' => 36,
    ),
  ),
  'indices' => 
  array (
    0 => 
    array (
      'name' => 'ant_estoque_ant_regionaisspk',
      'type' => 'primary',
      'fields' => 
      array (
        0 => 'id',
      ),
    ),
    1 => 
    array (
      'name' => 'ant_estoque_ant_regionais_ida1',
      'type' => 'index',
      'fields' => 
      array (
        0 => 'ant_estoqu7abae_geral_ida',
      ),
    ),
    2 => 
    array (
      'name' => 'ant_estoque_ant_regionais_idb2',
      'type' => 'index',
      'fields' => 
      array (
        0 => 'ant_estoquf27agionais_idb',
      ),
    ),
  ),
);
?>
