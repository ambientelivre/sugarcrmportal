<?php
// created: 2014-12-09 15:48:25
$dictionary["ant_cliente_ant_secretarias"] = array (
  'true_relationship_type' => 'one-to-one',
  'relationships' => 
  array (
    'ant_cliente_ant_secretarias' => 
    array (
      'lhs_module' => 'ant_cliente',
      'lhs_table' => 'ant_cliente',
      'lhs_key' => 'id',
      'rhs_module' => 'ant_secretarias',
      'rhs_table' => 'ant_secretarias',
      'rhs_key' => 'id',
      'relationship_type' => 'many-to-many',
      'join_table' => 'ant_cliente_secretarias_c',
      'join_key_lhs' => 'ant_client895acliente_ida',
      'join_key_rhs' => 'ant_client3388etarias_idb',
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
      'name' => 'ant_client895acliente_ida',
      'type' => 'varchar',
      'len' => 36,
    ),
    4 => 
    array (
      'name' => 'ant_client3388etarias_idb',
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
        0 => 'ant_client895acliente_ida',
      ),
    ),
    2 => 
    array (
      'name' => 'ant_clientent_secretarias_idb2',
      'type' => 'index',
      'fields' => 
      array (
        0 => 'ant_client3388etarias_idb',
      ),
    ),
  ),
);
?>
