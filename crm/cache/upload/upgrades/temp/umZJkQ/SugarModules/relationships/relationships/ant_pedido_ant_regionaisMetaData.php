<?php
// created: 2014-12-17 16:02:13
$dictionary["ant_pedido_ant_regionais"] = array (
  'true_relationship_type' => 'one-to-many',
  'relationships' => 
  array (
    'ant_pedido_ant_regionais' => 
    array (
      'lhs_module' => 'ant_pedido',
      'lhs_table' => 'ant_pedido',
      'lhs_key' => 'id',
      'rhs_module' => 'ant_regionais',
      'rhs_table' => 'ant_regionais',
      'rhs_key' => 'id',
      'relationship_type' => 'many-to-many',
      'join_table' => 'ant_pedido_nt_regionais_c',
      'join_key_lhs' => 'ant_pedido17ef_pedido_ida',
      'join_key_rhs' => 'ant_pedidoa81cgionais_idb',
    ),
  ),
  'table' => 'ant_pedido_nt_regionais_c',
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
      'name' => 'ant_pedido17ef_pedido_ida',
      'type' => 'varchar',
      'len' => 36,
    ),
    4 => 
    array (
      'name' => 'ant_pedidoa81cgionais_idb',
      'type' => 'varchar',
      'len' => 36,
    ),
  ),
  'indices' => 
  array (
    0 => 
    array (
      'name' => 'ant_pedido_ant_regionaisspk',
      'type' => 'primary',
      'fields' => 
      array (
        0 => 'id',
      ),
    ),
    1 => 
    array (
      'name' => 'ant_pedido_ant_regionais_ida1',
      'type' => 'index',
      'fields' => 
      array (
        0 => 'ant_pedido17ef_pedido_ida',
      ),
    ),
    2 => 
    array (
      'name' => 'ant_pedido_ant_regionais_alt',
      'type' => 'alternate_key',
      'fields' => 
      array (
        0 => 'ant_pedidoa81cgionais_idb',
      ),
    ),
  ),
);
?>
