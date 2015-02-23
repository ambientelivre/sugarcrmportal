<?php
// created: 2014-11-27 09:01:49
$dictionary["ant_secretarias_ant_regionais"] = array (
  'true_relationship_type' => 'one-to-many',
  'relationships' => 
  array (
    'ant_secretarias_ant_regionais' => 
    array (
      'lhs_module' => 'ant_secretarias',
      'lhs_table' => 'ant_secretarias',
      'lhs_key' => 'id',
      'rhs_module' => 'ant_regionais',
      'rhs_table' => 'ant_regionais',
      'rhs_key' => 'id',
      'relationship_type' => 'many-to-many',
      'join_table' => 'ant_secretant_regionais_c',
      'join_key_lhs' => 'ant_secretf930etarias_ida',
      'join_key_rhs' => 'ant_secret6c65gionais_idb',
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
      'name' => 'ant_secretf930etarias_ida',
      'type' => 'varchar',
      'len' => 36,
    ),
    4 => 
    array (
      'name' => 'ant_secret6c65gionais_idb',
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
        0 => 'ant_secretf930etarias_ida',
      ),
    ),
    2 => 
    array (
      'name' => 'ant_secreta_ant_regionais_alt',
      'type' => 'alternate_key',
      'fields' => 
      array (
        0 => 'ant_secret6c65gionais_idb',
      ),
    ),
  ),
);
?>
