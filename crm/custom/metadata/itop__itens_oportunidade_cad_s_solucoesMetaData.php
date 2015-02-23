<?php
// created: 2012-03-02 10:45:33
$dictionary["itop__itens_oportunidade_cad_s_solucoes"] = array (
  'true_relationship_type' => 'one-to-many',
  'relationships' => 
  array (
    'itop__itens_oportunidade_cad_s_solucoes' => 
    array (
      'lhs_module' => 'CAD_S_Solucoes',
      'lhs_table' => 'cad_s_solucoes',
      'lhs_key' => 'id',
      'rhs_module' => 'ItOP__Itens_oportunidade',
      'rhs_table' => 'itop__itens_oportunidade',
      'rhs_key' => 'id',
      'relationship_type' => 'many-to-many',
      'join_table' => 'itop__itensd_s_solucoes_c',
      'join_key_lhs' => 'itop__iten1d39olucoes_ida',
      'join_key_rhs' => 'itop__iten20a5unidade_idb',
    ),
  ),
  'table' => 'itop__itensd_s_solucoes_c',
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
      'name' => 'itop__iten1d39olucoes_ida',
      'type' => 'varchar',
      'len' => 36,
    ),
    4 => 
    array (
      'name' => 'itop__iten20a5unidade_idb',
      'type' => 'varchar',
      'len' => 36,
    ),
  ),
  'indices' => 
  array (
    0 => 
    array (
      'name' => 'itop__itenscad_s_solucoesspk',
      'type' => 'primary',
      'fields' => 
      array (
        0 => 'id',
      ),
    ),
    1 => 
    array (
      'name' => 'itop__itenscad_s_solucoes_ida1',
      'type' => 'index',
      'fields' => 
      array (
        0 => 'itop__iten1d39olucoes_ida',
      ),
    ),
    2 => 
    array (
      'name' => 'itop__itenscad_s_solucoes_alt',
      'type' => 'alternate_key',
      'fields' => 
      array (
        0 => 'itop__iten20a5unidade_idb',
      ),
    ),
  ),
);
?>
