<?php
// created: 2012-02-03 15:45:39
$dictionary["cad_s_solucoes_cad_u_unidades"] = array (
  'true_relationship_type' => 'one-to-one',
  'relationships' => 
  array (
    'cad_s_solucoes_cad_u_unidades' => 
    array (
      'lhs_module' => 'CAD_S_Solucoes',
      'lhs_table' => 'cad_s_solucoes',
      'lhs_key' => 'id',
      'rhs_module' => 'cad_U_Unidades',
      'rhs_table' => 'cad_u_unidades',
      'rhs_key' => 'id',
      'relationship_type' => 'many-to-many',
      'join_table' => 'cad_s_solucd_u_unidades_c',
      'join_key_lhs' => 'cad_s_solu7103olucoes_ida',
      'join_key_rhs' => 'cad_s_solu642bnidades_idb',
    ),
  ),
  'table' => 'cad_s_solucd_u_unidades_c',
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
      'name' => 'cad_s_solu7103olucoes_ida',
      'type' => 'varchar',
      'len' => 36,
    ),
    4 => 
    array (
      'name' => 'cad_s_solu642bnidades_idb',
      'type' => 'varchar',
      'len' => 36,
    ),
  ),
  'indices' => 
  array (
    0 => 
    array (
      'name' => 'cad_s_soluccad_u_unidadesspk',
      'type' => 'primary',
      'fields' => 
      array (
        0 => 'id',
      ),
    ),
    1 => 
    array (
      'name' => 'cad_s_soluccad_u_unidades_ida1',
      'type' => 'index',
      'fields' => 
      array (
        0 => 'cad_s_solu7103olucoes_ida',
      ),
    ),
    2 => 
    array (
      'name' => 'cad_s_soluccad_u_unidades_idb2',
      'type' => 'index',
      'fields' => 
      array (
        0 => 'cad_s_solu642bnidades_idb',
      ),
    ),
  ),
);
?>
