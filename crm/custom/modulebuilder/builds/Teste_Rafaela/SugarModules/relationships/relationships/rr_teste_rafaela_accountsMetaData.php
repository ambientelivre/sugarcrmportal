<?php
// created: 2014-08-11 10:27:23
$dictionary["rr_teste_rafaela_accounts"] = array (
  'true_relationship_type' => 'one-to-many',
  'relationships' => 
  array (
    'rr_teste_rafaela_accounts' => 
    array (
      'lhs_module' => 'Accounts',
      'lhs_table' => 'accounts',
      'lhs_key' => 'id',
      'rhs_module' => 'RR_Teste_Rafaela',
      'rhs_table' => 'rr_teste_rafaela',
      'rhs_key' => 'id',
      'relationship_type' => 'many-to-many',
      'join_table' => 'rr_teste_raela_accounts_c',
      'join_key_lhs' => 'rr_teste_r1c45ccounts_ida',
      'join_key_rhs' => 'rr_teste_rd6c8rafaela_idb',
    ),
  ),
  'table' => 'rr_teste_raela_accounts_c',
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
      'name' => 'rr_teste_r1c45ccounts_ida',
      'type' => 'varchar',
      'len' => 36,
    ),
    4 => 
    array (
      'name' => 'rr_teste_rd6c8rafaela_idb',
      'type' => 'varchar',
      'len' => 36,
    ),
  ),
  'indices' => 
  array (
    0 => 
    array (
      'name' => 'rr_teste_rafaela_accountsspk',
      'type' => 'primary',
      'fields' => 
      array (
        0 => 'id',
      ),
    ),
    1 => 
    array (
      'name' => 'rr_teste_rafaela_accounts_ida1',
      'type' => 'index',
      'fields' => 
      array (
        0 => 'rr_teste_r1c45ccounts_ida',
      ),
    ),
    2 => 
    array (
      'name' => 'rr_teste_rafaela_accounts_alt',
      'type' => 'alternate_key',
      'fields' => 
      array (
        0 => 'rr_teste_rd6c8rafaela_idb',
      ),
    ),
  ),
);
?>
