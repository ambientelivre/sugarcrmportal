<?php
// created: 2012-03-30 11:13:26
$dictionary["cad_u_unidades_cases"] = array (
  'true_relationship_type' => 'one-to-many',
  'relationships' => 
  array (
    'cad_u_unidades_cases' => 
    array (
      'lhs_module' => 'cad_U_Unidades',
      'lhs_table' => 'cad_u_unidades',
      'lhs_key' => 'id',
      'rhs_module' => 'Cases',
      'rhs_table' => 'cases',
      'rhs_key' => 'id',
      'relationship_type' => 'many-to-many',
      'join_table' => 'cad_u_unidades_cases_c',
      'join_key_lhs' => 'cad_u_unidbaaanidades_ida',
      'join_key_rhs' => 'cad_u_unid5b0cescases_idb',
    ),
  ),
  'table' => 'cad_u_unidades_cases_c',
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
      'name' => 'cad_u_unidbaaanidades_ida',
      'type' => 'varchar',
      'len' => 36,
    ),
    4 => 
    array (
      'name' => 'cad_u_unid5b0cescases_idb',
      'type' => 'varchar',
      'len' => 36,
    ),
  ),
  'indices' => 
  array (
    0 => 
    array (
      'name' => 'cad_u_unidades_casesspk',
      'type' => 'primary',
      'fields' => 
      array (
        0 => 'id',
      ),
    ),
    1 => 
    array (
      'name' => 'cad_u_unidades_cases_ida1',
      'type' => 'index',
      'fields' => 
      array (
        0 => 'cad_u_unidbaaanidades_ida',
      ),
    ),
    2 => 
    array (
      'name' => 'cad_u_unidades_cases_alt',
      'type' => 'alternate_key',
      'fields' => 
      array (
        0 => 'cad_u_unid5b0cescases_idb',
      ),
    ),
  ),
);
?>
