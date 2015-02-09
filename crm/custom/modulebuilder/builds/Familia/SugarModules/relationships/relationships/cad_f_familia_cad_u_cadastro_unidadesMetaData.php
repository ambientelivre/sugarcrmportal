<?php
// created: 2012-01-26 12:37:11
$dictionary["cad_f_familia_cad_u_cadastro_unidades"] = array (
  'true_relationship_type' => 'one-to-many',
  'relationships' => 
  array (
    'cad_f_familia_cad_u_cadastro_unidades' => 
    array (
      'lhs_module' => 'Cad_U_Cadastro_Unidades',
      'lhs_table' => 'cad_u_cadastro_unidades',
      'lhs_key' => 'id',
      'rhs_module' => 'Cad_F_Familia',
      'rhs_table' => 'cad_f_familia',
      'rhs_key' => 'id',
      'relationship_type' => 'many-to-many',
      'join_table' => 'cad_f_familtro_unidades_c',
      'join_key_lhs' => 'cad_f_fami197dnidades_ida',
      'join_key_rhs' => 'cad_f_fami8267familia_idb',
    ),
  ),
  'table' => 'cad_f_familtro_unidades_c',
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
      'name' => 'cad_f_fami197dnidades_ida',
      'type' => 'varchar',
      'len' => 36,
    ),
    4 => 
    array (
      'name' => 'cad_f_fami8267familia_idb',
      'type' => 'varchar',
      'len' => 36,
    ),
  ),
  'indices' => 
  array (
    0 => 
    array (
      'name' => 'cad_f_familastro_unidadesspk',
      'type' => 'primary',
      'fields' => 
      array (
        0 => 'id',
      ),
    ),
    1 => 
    array (
      'name' => 'cad_f_familastro_unidades_ida1',
      'type' => 'index',
      'fields' => 
      array (
        0 => 'cad_f_fami197dnidades_ida',
      ),
    ),
    2 => 
    array (
      'name' => 'cad_f_familastro_unidades_alt',
      'type' => 'alternate_key',
      'fields' => 
      array (
        0 => 'cad_f_fami8267familia_idb',
      ),
    ),
  ),
);
?>
