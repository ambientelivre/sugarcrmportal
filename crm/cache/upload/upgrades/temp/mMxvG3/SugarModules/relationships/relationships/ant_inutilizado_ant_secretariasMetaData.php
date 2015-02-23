<?php
// created: 2014-12-09 15:48:27
$dictionary["ant_inutilizado_ant_secretarias"] = array (
  'true_relationship_type' => 'one-to-one',
  'relationships' => 
  array (
    'ant_inutilizado_ant_secretarias' => 
    array (
      'lhs_module' => 'ant_inutilizado',
      'lhs_table' => 'ant_inutilizado',
      'lhs_key' => 'id',
      'rhs_module' => 'ant_secretarias',
      'rhs_table' => 'ant_secretarias',
      'rhs_key' => 'id',
      'relationship_type' => 'many-to-many',
      'join_table' => 'ant_inutili_secretarias_c',
      'join_key_lhs' => 'ant_inutil6267ilizado_ida',
      'join_key_rhs' => 'ant_inutil2440etarias_idb',
    ),
  ),
  'table' => 'ant_inutili_secretarias_c',
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
      'name' => 'ant_inutil6267ilizado_ida',
      'type' => 'varchar',
      'len' => 36,
    ),
    4 => 
    array (
      'name' => 'ant_inutil2440etarias_idb',
      'type' => 'varchar',
      'len' => 36,
    ),
  ),
  'indices' => 
  array (
    0 => 
    array (
      'name' => 'ant_inutilint_secretariasspk',
      'type' => 'primary',
      'fields' => 
      array (
        0 => 'id',
      ),
    ),
    1 => 
    array (
      'name' => 'ant_inutilint_secretarias_ida1',
      'type' => 'index',
      'fields' => 
      array (
        0 => 'ant_inutil6267ilizado_ida',
      ),
    ),
    2 => 
    array (
      'name' => 'ant_inutilint_secretarias_idb2',
      'type' => 'index',
      'fields' => 
      array (
        0 => 'ant_inutil2440etarias_idb',
      ),
    ),
  ),
);
?>
