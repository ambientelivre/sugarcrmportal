<?php
// created: 2012-01-25 15:19:29
$dictionary["cad_s_solucoes_cad_f_cadastro_familia"] = array (
  'true_relationship_type' => 'one-to-many',
  'relationships' => 
  array (
    'cad_s_solucoes_cad_f_cadastro_familia' => 
    array (
      'lhs_module' => 'cad_F_Cadastro_familia',
      'lhs_table' => 'cad_f_cadastro_familia',
      'lhs_key' => 'id',
      'rhs_module' => 'Cad_S_Solucoes',
      'rhs_table' => 'cad_s_solucoes',
      'rhs_key' => 'id',
      'relationship_type' => 'many-to-many',
      'join_table' => 'cad_s_solucstro_familia_c',
      'join_key_lhs' => 'cad_s_solu4eb3familia_ida',
      'join_key_rhs' => 'cad_s_solu864eolucoes_idb',
    ),
  ),
  'table' => 'cad_s_solucstro_familia_c',
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
      'name' => 'cad_s_solu4eb3familia_ida',
      'type' => 'varchar',
      'len' => 36,
    ),
    4 => 
    array (
      'name' => 'cad_s_solu864eolucoes_idb',
      'type' => 'varchar',
      'len' => 36,
    ),
  ),
  'indices' => 
  array (
    0 => 
    array (
      'name' => 'cad_s_solucdastro_familiaspk',
      'type' => 'primary',
      'fields' => 
      array (
        0 => 'id',
      ),
    ),
    1 => 
    array (
      'name' => 'cad_s_solucdastro_familia_ida1',
      'type' => 'index',
      'fields' => 
      array (
        0 => 'cad_s_solu4eb3familia_ida',
      ),
    ),
    2 => 
    array (
      'name' => 'cad_s_solucdastro_familia_alt',
      'type' => 'alternate_key',
      'fields' => 
      array (
        0 => 'cad_s_solu864eolucoes_idb',
      ),
    ),
  ),
);
?>
