<?php
// created: 2014-09-01 17:23:54
$dictionary["ant_produto_ant_estoque_geral"] = array (
  'true_relationship_type' => 'one-to-many',
  'relationships' => 
  array (
    'ant_produto_ant_estoque_geral' => 
    array (
      'lhs_module' => 'ant_estoque_geral',
      'lhs_table' => 'ant_estoque_geral',
      'lhs_key' => 'id',
      'rhs_module' => 'ant_produto',
      'rhs_table' => 'ant_produto',
      'rhs_key' => 'id',
      'relationship_type' => 'many-to-many',
      'join_table' => 'ant_produtostoque_geral_c',
      'join_key_lhs' => 'ant_produteb18e_geral_ida',
      'join_key_rhs' => 'ant_produt55c7produto_idb',
    ),
  ),
  'table' => 'ant_produtostoque_geral_c',
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
      'name' => 'ant_produteb18e_geral_ida',
      'type' => 'varchar',
      'len' => 36,
    ),
    4 => 
    array (
      'name' => 'ant_produt55c7produto_idb',
      'type' => 'varchar',
      'len' => 36,
    ),
  ),
  'indices' => 
  array (
    0 => 
    array (
      'name' => 'ant_produto_estoque_geralspk',
      'type' => 'primary',
      'fields' => 
      array (
        0 => 'id',
      ),
    ),
    1 => 
    array (
      'name' => 'ant_produto_estoque_geral_ida1',
      'type' => 'index',
      'fields' => 
      array (
        0 => 'ant_produteb18e_geral_ida',
      ),
    ),
    2 => 
    array (
      'name' => 'ant_produto_estoque_geral_alt',
      'type' => 'alternate_key',
      'fields' => 
      array (
        0 => 'ant_produt55c7produto_idb',
      ),
    ),
  ),
);
?>
