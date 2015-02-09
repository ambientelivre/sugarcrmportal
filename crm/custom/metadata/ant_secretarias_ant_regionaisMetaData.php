<?php
// created: 2014-12-23 09:50:32
$dictionary["ant_secretarias_ant_regionais"] = array (
  'true_relationship_type' => 'one-to-many',
  'relationships' => 
  array (
    'ant_secretarias_ant_regionais' => 
    array (
      'lhs_module' => 'ant_regionais',
      'lhs_table' => 'ant_regionais',
      'lhs_key' => 'id',
      'rhs_module' => 'ant_secretarias',
      'rhs_table' => 'ant_secretarias',
      'rhs_key' => 'id',
      'relationship_type' => 'many-to-many',
      'join_table' => 'ant_secretant_regionais_c',
      'join_key_lhs' => 'ant_secretdacfgionais_ida',
      'join_key_rhs' => 'ant_secret4a47etarias_idb',
    ),
  ),
  'table' => 'ant_secretant_regionais_c',
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
      'name' => 'ant_secretdacfgionais_ida',
      'type' => 'varchar',
      'len' => 36,
    ),
    4 => 
    array (
      'name' => 'ant_secret4a47etarias_idb',
      'type' => 'varchar',
      'len' => 36,
    ),
  ),
  'indices' => 
  array (
    0 => 
    array (
      'name' => 'ant_secreta_ant_regionaisspk',
      'type' => 'primary',
      'fields' => 
      array (
        0 => 'id',
      ),
    ),
    1 => 
    array (
      'name' => 'ant_secreta_ant_regionais_ida1',
      'type' => 'index',
      'fields' => 
      array (
        0 => 'ant_secretdacfgionais_ida',
      ),
    ),
    2 => 
    array (
      'name' => 'ant_secreta_ant_regionais_alt',
      'type' => 'alternate_key',
      'fields' => 
      array (
        0 => 'ant_secret4a47etarias_idb',
      ),
    ),
  ),
);
?>
