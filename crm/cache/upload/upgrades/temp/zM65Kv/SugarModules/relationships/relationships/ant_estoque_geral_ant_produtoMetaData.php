<?php
// created: 2014-11-27 09:01:50
$dictionary["ant_estoque_geral_ant_produto"] = array (
  'true_relationship_type' => 'one-to-one',
  'relationships' => 
  array (
    'ant_estoque_geral_ant_produto' => 
    array (
      'lhs_module' => 'ant_estoque_geral',
      'lhs_table' => 'ant_estoque_geral',
      'lhs_key' => 'id',
      'rhs_module' => 'ant_produto',
      'rhs_table' => 'ant_produto',
      'rhs_key' => 'id',
      'relationship_type' => 'many-to-many',
      'join_table' => 'ant_estoque_ant_produto_c',
      'join_key_lhs' => 'ant_estoqu8380e_geral_ida',
      'join_key_rhs' => 'ant_estoqu70a5produto_idb',
    ),
  ),
  'table' => 'ant_estoque_ant_produto_c',
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
      'name' => 'ant_estoqu8380e_geral_ida',
      'type' => 'varchar',
      'len' => 36,
    ),
    4 => 
    array (
      'name' => 'ant_estoqu70a5produto_idb',
      'type' => 'varchar',
      'len' => 36,
    ),
  ),
  'indices' => 
  array (
    0 => 
    array (
      'name' => 'ant_estoqueal_ant_produtospk',
      'type' => 'primary',
      'fields' => 
      array (
        0 => 'id',
      ),
    ),
    1 => 
    array (
      'name' => 'ant_estoqueal_ant_produto_ida1',
      'type' => 'index',
      'fields' => 
      array (
        0 => 'ant_estoqu8380e_geral_ida',
      ),
    ),
    2 => 
    array (
      'name' => 'ant_estoqueal_ant_produto_idb2',
      'type' => 'index',
      'fields' => 
      array (
        0 => 'ant_estoqu70a5produto_idb',
      ),
    ),
  ),
);
?>
