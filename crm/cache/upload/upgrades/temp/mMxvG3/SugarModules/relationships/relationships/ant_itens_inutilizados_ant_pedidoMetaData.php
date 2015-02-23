<?php
// created: 2014-09-05 13:26:39
$dictionary["ant_itens_inutilizados_ant_pedido"] = array (
  'true_relationship_type' => 'one-to-one',
  'relationships' => 
  array (
    'ant_itens_inutilizados_ant_pedido' => 
    array (
      'lhs_module' => 'ant_itens_inutilizados',
      'lhs_table' => 'ant_itens_inutilizados',
      'lhs_key' => 'id',
      'rhs_module' => 'ant_pedido',
      'rhs_table' => 'ant_pedido',
      'rhs_key' => 'id',
      'relationship_type' => 'many-to-many',
      'join_table' => 'ant_itens_is_ant_pedido_c',
      'join_key_lhs' => 'ant_itens_f675lizados_ida',
      'join_key_rhs' => 'ant_itens_b3b1_pedido_idb',
    ),
  ),
  'table' => 'ant_itens_is_ant_pedido_c',
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
      'name' => 'ant_itens_f675lizados_ida',
      'type' => 'varchar',
      'len' => 36,
    ),
    4 => 
    array (
      'name' => 'ant_itens_b3b1_pedido_idb',
      'type' => 'varchar',
      'len' => 36,
    ),
  ),
  'indices' => 
  array (
    0 => 
    array (
      'name' => 'ant_itens_idos_ant_pedidospk',
      'type' => 'primary',
      'fields' => 
      array (
        0 => 'id',
      ),
    ),
    1 => 
    array (
      'name' => 'ant_itens_idos_ant_pedido_ida1',
      'type' => 'index',
      'fields' => 
      array (
        0 => 'ant_itens_f675lizados_ida',
      ),
    ),
    2 => 
    array (
      'name' => 'ant_itens_idos_ant_pedido_idb2',
      'type' => 'index',
      'fields' => 
      array (
        0 => 'ant_itens_b3b1_pedido_idb',
      ),
    ),
  ),
);
?>
