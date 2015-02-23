<?php
// created: 2014-09-12 15:58:56
$dictionary["ant_lista_pedidos_ant_pedido"] = array (
  'true_relationship_type' => 'one-to-many',
  'relationships' => 
  array (
    'ant_lista_pedidos_ant_pedido' => 
    array (
      'lhs_module' => 'ant_pedido',
      'lhs_table' => 'ant_pedido',
      'lhs_key' => 'id',
      'rhs_module' => 'ant_lista_pedidos',
      'rhs_table' => 'ant_lista_pedidos',
      'rhs_key' => 'id',
      'relationship_type' => 'many-to-many',
      'join_table' => 'ant_lista_ps_ant_pedido_c',
      'join_key_lhs' => 'ant_lista_aef1_pedido_ida',
      'join_key_rhs' => 'ant_lista_cf5cpedidos_idb',
    ),
  ),
  'table' => 'ant_lista_ps_ant_pedido_c',
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
      'name' => 'ant_lista_aef1_pedido_ida',
      'type' => 'varchar',
      'len' => 36,
    ),
    4 => 
    array (
      'name' => 'ant_lista_cf5cpedidos_idb',
      'type' => 'varchar',
      'len' => 36,
    ),
  ),
  'indices' => 
  array (
    0 => 
    array (
      'name' => 'ant_lista_pdos_ant_pedidospk',
      'type' => 'primary',
      'fields' => 
      array (
        0 => 'id',
      ),
    ),
    1 => 
    array (
      'name' => 'ant_lista_pdos_ant_pedido_ida1',
      'type' => 'index',
      'fields' => 
      array (
        0 => 'ant_lista_aef1_pedido_ida',
      ),
    ),
    2 => 
    array (
      'name' => 'ant_lista_pdos_ant_pedido_alt',
      'type' => 'alternate_key',
      'fields' => 
      array (
        0 => 'ant_lista_cf5cpedidos_idb',
      ),
    ),
  ),
);
?>
