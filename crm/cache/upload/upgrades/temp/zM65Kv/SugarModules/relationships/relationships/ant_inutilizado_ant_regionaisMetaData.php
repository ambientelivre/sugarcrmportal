<?php
// created: 2014-11-27 09:01:51
$dictionary["ant_inutilizado_ant_regionais"] = array (
  'true_relationship_type' => 'one-to-one',
  'relationships' => 
  array (
    'ant_inutilizado_ant_regionais' => 
    array (
      'lhs_module' => 'ant_inutilizado',
      'lhs_table' => 'ant_inutilizado',
      'lhs_key' => 'id',
      'rhs_module' => 'ant_regionais',
      'rhs_table' => 'ant_regionais',
      'rhs_key' => 'id',
      'relationship_type' => 'many-to-many',
      'join_table' => 'ant_inutilint_regionais_c',
      'join_key_lhs' => 'ant_inutil66e6ilizado_ida',
      'join_key_rhs' => 'ant_inutil5c3egionais_idb',
    ),
  ),
  'table' => 'ant_inutilint_regionais_c',
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
      'name' => 'ant_inutil66e6ilizado_ida',
      'type' => 'varchar',
      'len' => 36,
    ),
    4 => 
    array (
      'name' => 'ant_inutil5c3egionais_idb',
      'type' => 'varchar',
      'len' => 36,
    ),
  ),
  'indices' => 
  array (
    0 => 
    array (
      'name' => 'ant_inutili_ant_regionaisspk',
      'type' => 'primary',
      'fields' => 
      array (
        0 => 'id',
      ),
    ),
    1 => 
    array (
      'name' => 'ant_inutili_ant_regionais_ida1',
      'type' => 'index',
      'fields' => 
      array (
        0 => 'ant_inutil66e6ilizado_ida',
      ),
    ),
    2 => 
    array (
      'name' => 'ant_inutili_ant_regionais_idb2',
      'type' => 'index',
      'fields' => 
      array (
        0 => 'ant_inutil5c3egionais_idb',
      ),
    ),
  ),
);
?>
