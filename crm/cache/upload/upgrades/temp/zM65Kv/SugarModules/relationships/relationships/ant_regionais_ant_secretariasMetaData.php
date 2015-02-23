<?php
// created: 2014-11-26 16:02:49
$dictionary["ant_regionais_ant_secretarias"] = array (
  'true_relationship_type' => 'one-to-many',
  'relationships' => 
  array (
    'ant_regionais_ant_secretarias' => 
    array (
      'lhs_module' => 'ant_secretarias',
      'lhs_table' => 'ant_secretarias',
      'lhs_key' => 'id',
      'rhs_module' => 'ant_regionais',
      'rhs_table' => 'ant_regionais',
      'rhs_key' => 'id',
      'relationship_type' => 'many-to-many',
      'join_table' => 'ant_regiona_secretarias_c',
      'join_key_lhs' => 'ant_region1213etarias_ida',
      'join_key_rhs' => 'ant_regioneb7fgionais_idb',
    ),
  ),
  'table' => 'ant_regiona_secretarias_c',
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
      'name' => 'ant_region1213etarias_ida',
      'type' => 'varchar',
      'len' => 36,
    ),
    4 => 
    array (
      'name' => 'ant_regioneb7fgionais_idb',
      'type' => 'varchar',
      'len' => 36,
    ),
  ),
  'indices' => 
  array (
    0 => 
    array (
      'name' => 'ant_regionant_secretariasspk',
      'type' => 'primary',
      'fields' => 
      array (
        0 => 'id',
      ),
    ),
    1 => 
    array (
      'name' => 'ant_regionant_secretarias_ida1',
      'type' => 'index',
      'fields' => 
      array (
        0 => 'ant_region1213etarias_ida',
      ),
    ),
    2 => 
    array (
      'name' => 'ant_regionant_secretarias_alt',
      'type' => 'alternate_key',
      'fields' => 
      array (
        0 => 'ant_regioneb7fgionais_idb',
      ),
    ),
  ),
);
?>
