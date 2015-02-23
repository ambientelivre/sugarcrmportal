<?php
// created: 2014-12-23 09:50:36
$dictionary["ant_itens_inutilizados_ant_inutilizado"] = array (
  'true_relationship_type' => 'one-to-many',
  'relationships' => 
  array (
    'ant_itens_inutilizados_ant_inutilizado' => 
    array (
      'lhs_module' => 'ant_inutilizado',
      'lhs_table' => 'ant_inutilizado',
      'lhs_key' => 'id',
      'rhs_module' => 'ant_itens_inutilizados',
      'rhs_table' => 'ant_itens_inutilizados',
      'rhs_key' => 'id',
      'relationship_type' => 'many-to-many',
      'join_table' => 'ant_itens_i_inutilizado_c',
      'join_key_lhs' => 'ant_itens_9f2ailizado_ida',
      'join_key_rhs' => 'ant_itens_8c2clizados_idb',
    ),
  ),
  'table' => 'ant_itens_i_inutilizado_c',
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
      'name' => 'ant_itens_9f2ailizado_ida',
      'type' => 'varchar',
      'len' => 36,
    ),
    4 => 
    array (
      'name' => 'ant_itens_8c2clizados_idb',
      'type' => 'varchar',
      'len' => 36,
    ),
  ),
  'indices' => 
  array (
    0 => 
    array (
      'name' => 'ant_itens_int_inutilizadospk',
      'type' => 'primary',
      'fields' => 
      array (
        0 => 'id',
      ),
    ),
    1 => 
    array (
      'name' => 'ant_itens_int_inutilizado_ida1',
      'type' => 'index',
      'fields' => 
      array (
        0 => 'ant_itens_9f2ailizado_ida',
      ),
    ),
    2 => 
    array (
      'name' => 'ant_itens_int_inutilizado_alt',
      'type' => 'alternate_key',
      'fields' => 
      array (
        0 => 'ant_itens_8c2clizados_idb',
      ),
    ),
  ),
);
?>
