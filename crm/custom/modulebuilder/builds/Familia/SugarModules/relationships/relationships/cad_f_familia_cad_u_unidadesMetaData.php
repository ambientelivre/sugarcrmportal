<?php
// created: 2012-02-07 10:02:53
$dictionary["cad_f_familia_cad_u_unidades"] = array (
  'true_relationship_type' => 'one-to-many',
  'relationships' => 
  array (
    'cad_f_familia_cad_u_unidades' => 
    array (
      'lhs_module' => 'cad_U_Unidades',
      'lhs_table' => 'cad_u_unidades',
      'lhs_key' => 'id',
      'rhs_module' => 'Cad_F_Familia',
      'rhs_table' => 'cad_f_familia',
      'rhs_key' => 'id',
      'relationship_type' => 'many-to-many',
      'join_table' => 'cad_f_famild_u_unidades_c',
      'join_key_lhs' => 'cad_f_fami40f4nidades_ida',
      'join_key_rhs' => 'cad_f_fami232ffamilia_idb',
    ),
  ),
  'table' => 'cad_f_famild_u_unidades_c',
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
      'name' => 'cad_f_fami40f4nidades_ida',
      'type' => 'varchar',
      'len' => 36,
    ),
    4 => 
    array (
      'name' => 'cad_f_fami232ffamilia_idb',
      'type' => 'varchar',
      'len' => 36,
    ),
  ),
  'indices' => 
  array (
    0 => 
    array (
      'name' => 'cad_f_familcad_u_unidadesspk',
      'type' => 'primary',
      'fields' => 
      array (
        0 => 'id',
      ),
    ),
    1 => 
    array (
      'name' => 'cad_f_familcad_u_unidades_ida1',
      'type' => 'index',
      'fields' => 
      array (
        0 => 'cad_f_fami40f4nidades_ida',
      ),
    ),
    2 => 
    array (
      'name' => 'cad_f_familcad_u_unidades_alt',
      'type' => 'alternate_key',
      'fields' => 
      array (
        0 => 'cad_f_fami232ffamilia_idb',
      ),
    ),
  ),
);
?>
