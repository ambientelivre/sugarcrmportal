<?php
// created: 2014-11-27 09:33:50
$dictionary["ant_producao_ant_produto"] = array (
  'true_relationship_type' => 'one-to-one',
  'relationships' => 
  array (
    'ant_producao_ant_produto' => 
    array (
      'lhs_module' => 'ant_producao',
      'lhs_table' => 'ant_producao',
      'lhs_key' => 'id',
      'rhs_module' => 'ant_produto',
      'rhs_table' => 'ant_produto',
      'rhs_key' => 'id',
      'relationship_type' => 'many-to-many',
      'join_table' => 'ant_produca_ant_produto_c',
      'join_key_lhs' => 'ant_producf7ecroducao_ida',
      'join_key_rhs' => 'ant_produc7cb0produto_idb',
    ),
  ),
  'table' => 'ant_produca_ant_produto_c',
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
      'name' => 'ant_producf7ecroducao_ida',
      'type' => 'varchar',
      'len' => 36,
    ),
    4 => 
    array (
      'name' => 'ant_produc7cb0produto_idb',
      'type' => 'varchar',
      'len' => 36,
    ),
  ),
  'indices' => 
  array (
    0 => 
    array (
      'name' => 'ant_producao_ant_produtospk',
      'type' => 'primary',
      'fields' => 
      array (
        0 => 'id',
      ),
    ),
    1 => 
    array (
      'name' => 'ant_producao_ant_produto_ida1',
      'type' => 'index',
      'fields' => 
      array (
        0 => 'ant_producf7ecroducao_ida',
      ),
    ),
    2 => 
    array (
      'name' => 'ant_producao_ant_produto_idb2',
      'type' => 'index',
      'fields' => 
      array (
        0 => 'ant_produc7cb0produto_idb',
      ),
    ),
  ),
);
?>
