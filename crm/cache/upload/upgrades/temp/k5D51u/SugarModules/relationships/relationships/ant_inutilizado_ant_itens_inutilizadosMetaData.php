<?php
// created: 2014-12-17 16:02:11
$dictionary["ant_inutilizado_ant_itens_inutilizados"] = array (
  'true_relationship_type' => 'many-to-many',
  'relationships' => 
  array (
    'ant_inutilizado_ant_itens_inutilizados' => 
    array (
      'lhs_module' => 'ant_inutilizado',
      'lhs_table' => 'ant_inutilizado',
      'lhs_key' => 'id',
      'rhs_module' => 'ant_itens_inutilizados',
      'rhs_table' => 'ant_itens_inutilizados',
      'rhs_key' => 'id',
      'relationship_type' => 'many-to-many',
      'join_table' => 'ant_inutiliinutilizados_c',
      'join_key_lhs' => 'ant_inutil7287ilizado_ida',
      'join_key_rhs' => 'ant_inutil6a24lizados_idb',
    ),
  ),
  'table' => 'ant_inutiliinutilizados_c',
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
      'name' => 'ant_inutil7287ilizado_ida',
      'type' => 'varchar',
      'len' => 36,
    ),
    4 => 
    array (
      'name' => 'ant_inutil6a24lizados_idb',
      'type' => 'varchar',
      'len' => 36,
    ),
  ),
  'indices' => 
  array (
    0 => 
    array (
      'name' => 'ant_inutilis_inutilizadosspk',
      'type' => 'primary',
      'fields' => 
      array (
        0 => 'id',
      ),
    ),
    1 => 
    array (
      'name' => 'ant_inutilis_inutilizados_alt',
      'type' => 'alternate_key',
      'fields' => 
      array (
        0 => 'ant_inutil7287ilizado_ida',
        1 => 'ant_inutil6a24lizados_idb',
      ),
    ),
  ),
);
?>
