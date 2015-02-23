<?php
// created: 2014-12-17 16:02:10
$dictionary["ant_estoque_geral_ant_secretarias"] = array (
  'true_relationship_type' => 'one-to-one',
  'relationships' => 
  array (
    'ant_estoque_geral_ant_secretarias' => 
    array (
      'lhs_module' => 'ant_estoque_geral',
      'lhs_table' => 'ant_estoque_geral',
      'lhs_key' => 'id',
      'rhs_module' => 'ant_secretarias',
      'rhs_table' => 'ant_secretarias',
      'rhs_key' => 'id',
      'relationship_type' => 'many-to-many',
      'join_table' => 'ant_estoque_secretarias_c',
      'join_key_lhs' => 'ant_estoqu540ce_geral_ida',
      'join_key_rhs' => 'ant_estoqu5de3etarias_idb',
    ),
  ),
  'table' => 'ant_estoque_secretarias_c',
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
      'name' => 'ant_estoqu540ce_geral_ida',
      'type' => 'varchar',
      'len' => 36,
    ),
    4 => 
    array (
      'name' => 'ant_estoqu5de3etarias_idb',
      'type' => 'varchar',
      'len' => 36,
    ),
  ),
  'indices' => 
  array (
    0 => 
    array (
      'name' => 'ant_estoquent_secretariasspk',
      'type' => 'primary',
      'fields' => 
      array (
        0 => 'id',
      ),
    ),
    1 => 
    array (
      'name' => 'ant_estoquent_secretarias_ida1',
      'type' => 'index',
      'fields' => 
      array (
        0 => 'ant_estoqu540ce_geral_ida',
      ),
    ),
    2 => 
    array (
      'name' => 'ant_estoquent_secretarias_idb2',
      'type' => 'index',
      'fields' => 
      array (
        0 => 'ant_estoqu5de3etarias_idb',
      ),
    ),
  ),
);
?>
