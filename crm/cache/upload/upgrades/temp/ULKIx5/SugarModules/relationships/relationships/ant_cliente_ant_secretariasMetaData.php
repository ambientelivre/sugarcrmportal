<?php
// created: 2014-11-27 11:41:21
$dictionary["ant_cliente_ant_secretarias"] = array (
  'true_relationship_type' => 'one-to-many',
  'relationships' => 
  array (
    'ant_cliente_ant_secretarias' => 
    array (
      'lhs_module' => 'ant_secretarias',
      'lhs_table' => 'ant_secretarias',
      'lhs_key' => 'id',
      'rhs_module' => 'ant_cliente',
      'rhs_table' => 'ant_cliente',
      'rhs_key' => 'id',
      'relationship_type' => 'many-to-many',
      'join_table' => 'ant_cliente_secretarias_c',
      'join_key_lhs' => 'ant_client1698etarias_ida',
      'join_key_rhs' => 'ant_cliented0bcliente_idb',
    ),
  ),
  'table' => 'ant_cliente_secretarias_c',
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
      'name' => 'ant_client1698etarias_ida',
      'type' => 'varchar',
      'len' => 36,
    ),
    4 => 
    array (
      'name' => 'ant_cliented0bcliente_idb',
      'type' => 'varchar',
      'len' => 36,
    ),
  ),
  'indices' => 
  array (
    0 => 
    array (
      'name' => 'ant_clientent_secretariasspk',
      'type' => 'primary',
      'fields' => 
      array (
        0 => 'id',
      ),
    ),
    1 => 
    array (
      'name' => 'ant_clientent_secretarias_ida1',
      'type' => 'index',
      'fields' => 
      array (
        0 => 'ant_client1698etarias_ida',
      ),
    ),
    2 => 
    array (
      'name' => 'ant_clientent_secretarias_alt',
      'type' => 'alternate_key',
      'fields' => 
      array (
        0 => 'ant_cliented0bcliente_idb',
      ),
    ),
  ),
);
?>
