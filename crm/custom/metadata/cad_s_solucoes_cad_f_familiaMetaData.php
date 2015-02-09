<?php
// created: 2012-02-16 11:16:46
$dictionary["cad_s_solucoes_cad_f_familia"] = array (
  'true_relationship_type' => 'one-to-many',
  'relationships' => 
  array (
    'cad_s_solucoes_cad_f_familia' => 
    array (
      'lhs_module' => 'Cad_F_Familia',
      'lhs_table' => 'cad_f_familia',
      'lhs_key' => 'id',
      'rhs_module' => 'CAD_S_Solucoes',
      'rhs_table' => 'cad_s_solucoes',
      'rhs_key' => 'id',
      'relationship_type' => 'many-to-many',
      'join_table' => 'cad_s_solucad_f_familia_c',
      'join_key_lhs' => 'cad_s_solu89d2familia_ida',
      'join_key_rhs' => 'cad_s_solu29deolucoes_idb',
    ),
  ),
  'table' => 'cad_s_solucad_f_familia_c',
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
      'name' => 'cad_s_solu89d2familia_ida',
      'type' => 'varchar',
      'len' => 36,
    ),
    4 => 
    array (
      'name' => 'cad_s_solu29deolucoes_idb',
      'type' => 'varchar',
      'len' => 36,
    ),
  ),
  'indices' => 
  array (
    0 => 
    array (
      'name' => 'cad_s_soluc_cad_f_familiaspk',
      'type' => 'primary',
      'fields' => 
      array (
        0 => 'id',
      ),
    ),
    1 => 
    array (
      'name' => 'cad_s_soluc_cad_f_familia_ida1',
      'type' => 'index',
      'fields' => 
      array (
        0 => 'cad_s_solu89d2familia_ida',
      ),
    ),
    2 => 
    array (
      'name' => 'cad_s_soluc_cad_f_familia_alt',
      'type' => 'alternate_key',
      'fields' => 
      array (
        0 => 'cad_s_solu29deolucoes_idb',
      ),
    ),
  ),
);
?>
