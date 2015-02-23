<?php
// created: 2012-01-25 15:19:29
$dictionary["cad_s_solucoes_cad_u_cadastro_unidades"] = array (
  'true_relationship_type' => 'many-to-many',
  'relationships' => 
  array (
    'cad_s_solucoes_cad_u_cadastro_unidades' => 
    array (
      'lhs_module' => 'Cad_S_Solucoes',
      'lhs_table' => 'cad_s_solucoes',
      'lhs_key' => 'id',
      'rhs_module' => 'Cad_U_Cadastro_Unidades',
      'rhs_table' => 'cad_u_cadastro_unidades',
      'rhs_key' => 'id',
      'relationship_type' => 'many-to-many',
      'join_table' => 'cad_s_soluctro_unidades_c',
      'join_key_lhs' => 'cad_s_solu3a63olucoes_ida',
      'join_key_rhs' => 'cad_s_solud55enidades_idb',
    ),
  ),
  'table' => 'cad_s_soluctro_unidades_c',
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
      'name' => 'cad_s_solu3a63olucoes_ida',
      'type' => 'varchar',
      'len' => 36,
    ),
    4 => 
    array (
      'name' => 'cad_s_solud55enidades_idb',
      'type' => 'varchar',
      'len' => 36,
    ),
  ),
  'indices' => 
  array (
    0 => 
    array (
      'name' => 'cad_s_solucastro_unidadesspk',
      'type' => 'primary',
      'fields' => 
      array (
        0 => 'id',
      ),
    ),
    1 => 
    array (
      'name' => 'cad_s_solucastro_unidades_alt',
      'type' => 'alternate_key',
      'fields' => 
      array (
        0 => 'cad_s_solu3a63olucoes_ida',
        1 => 'cad_s_solud55enidades_idb',
      ),
    ),
  ),
);
?>
