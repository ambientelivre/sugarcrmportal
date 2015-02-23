<?php
// created: 2014-12-17 16:02:13
$dictionary["ant_pedido_ant_secretarias"] = array (
  'true_relationship_type' => 'one-to-one',
  'relationships' => 
  array (
    'ant_pedido_ant_secretarias' => 
    array (
      'lhs_module' => 'ant_pedido',
      'lhs_table' => 'ant_pedido',
      'lhs_key' => 'id',
      'rhs_module' => 'ant_secretarias',
      'rhs_table' => 'ant_secretarias',
      'rhs_key' => 'id',
      'relationship_type' => 'many-to-many',
      'join_table' => 'ant_pedido__secretarias_c',
      'join_key_lhs' => 'ant_pedido7367_pedido_ida',
      'join_key_rhs' => 'ant_pedido14e4etarias_idb',
    ),
  ),
  'table' => 'ant_pedido__secretarias_c',
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
      'name' => 'ant_pedido7367_pedido_ida',
      'type' => 'varchar',
      'len' => 36,
    ),
    4 => 
    array (
      'name' => 'ant_pedido14e4etarias_idb',
      'type' => 'varchar',
      'len' => 36,
    ),
  ),
  'indices' => 
  array (
    0 => 
    array (
      'name' => 'ant_pedido_nt_secretariasspk',
      'type' => 'primary',
      'fields' => 
      array (
        0 => 'id',
      ),
    ),
    1 => 
    array (
      'name' => 'ant_pedido_nt_secretarias_ida1',
      'type' => 'index',
      'fields' => 
      array (
        0 => 'ant_pedido7367_pedido_ida',
      ),
    ),
    2 => 
    array (
      'name' => 'ant_pedido_nt_secretarias_idb2',
      'type' => 'index',
      'fields' => 
      array (
        0 => 'ant_pedido14e4etarias_idb',
      ),
    ),
  ),
);
?>
