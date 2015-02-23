<?php
// created: 2014-11-27 11:26:44
$dictionary["ant_pedido_ant_lista_pedidos"] = array (
  'true_relationship_type' => 'one-to-many',
  'relationships' => 
  array (
    'ant_pedido_ant_lista_pedidos' => 
    array (
      'lhs_module' => 'ant_pedido',
      'lhs_table' => 'ant_pedido',
      'lhs_key' => 'id',
      'rhs_module' => 'ant_lista_pedidos',
      'rhs_table' => 'ant_lista_pedidos',
      'rhs_key' => 'id',
      'relationship_type' => 'many-to-many',
      'join_table' => 'ant_pedido_ista_pedidos_c',
      'join_key_lhs' => 'ant_pedido5fed_pedido_ida',
      'join_key_rhs' => 'ant_pedido9ee2pedidos_idb',
    ),
  ),
  'table' => 'ant_pedido_ista_pedidos_c',
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
      'name' => 'ant_pedido5fed_pedido_ida',
      'type' => 'varchar',
      'len' => 36,
    ),
    4 => 
    array (
      'name' => 'ant_pedido9ee2pedidos_idb',
      'type' => 'varchar',
      'len' => 36,
    ),
  ),
  'indices' => 
  array (
    0 => 
    array (
      'name' => 'ant_pedido__lista_pedidosspk',
      'type' => 'primary',
      'fields' => 
      array (
        0 => 'id',
      ),
    ),
    1 => 
    array (
      'name' => 'ant_pedido__lista_pedidos_ida1',
      'type' => 'index',
      'fields' => 
      array (
        0 => 'ant_pedido5fed_pedido_ida',
      ),
    ),
    2 => 
    array (
      'name' => 'ant_pedido__lista_pedidos_alt',
      'type' => 'alternate_key',
      'fields' => 
      array (
        0 => 'ant_pedido9ee2pedidos_idb',
      ),
    ),
  ),
);
?>
