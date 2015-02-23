<?php
// created: 2012-01-25 15:15:32
$dictionary["cad_f_cadastro_familia_cadun_cadastrodeunidades"] = array (
  'true_relationship_type' => 'one-to-many',
  'relationships' => 
  array (
    'cad_f_cadastro_familia_cadun_cadastrodeunidades' => 
    array (
      'lhs_module' => 'CADUN_CadastrodeUnidades',
      'lhs_table' => 'cadun_cadastrodeunidades',
      'lhs_key' => 'id',
      'rhs_module' => 'cad_F_Cadastro_familia',
      'rhs_table' => 'cad_f_cadastro_familia',
      'rhs_key' => 'id',
      'relationship_type' => 'many-to-many',
      'join_table' => 'cad_f_cadasrodeunidades_c',
      'join_key_lhs' => 'cad_f_cada1031nidades_ida',
      'join_key_rhs' => 'cad_f_cadaf205familia_idb',
    ),
  ),
  'table' => 'cad_f_cadasrodeunidades_c',
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
      'name' => 'cad_f_cada1031nidades_ida',
      'type' => 'varchar',
      'len' => 36,
    ),
    4 => 
    array (
      'name' => 'cad_f_cadaf205familia_idb',
      'type' => 'varchar',
      'len' => 36,
    ),
  ),
  'indices' => 
  array (
    0 => 
    array (
      'name' => 'cad_f_cadasstrodeunidadesspk',
      'type' => 'primary',
      'fields' => 
      array (
        0 => 'id',
      ),
    ),
    1 => 
    array (
      'name' => 'cad_f_cadasstrodeunidades_ida1',
      'type' => 'index',
      'fields' => 
      array (
        0 => 'cad_f_cada1031nidades_ida',
      ),
    ),
    2 => 
    array (
      'name' => 'cad_f_cadasstrodeunidades_alt',
      'type' => 'alternate_key',
      'fields' => 
      array (
        0 => 'cad_f_cadaf205familia_idb',
      ),
    ),
  ),
);
?>
