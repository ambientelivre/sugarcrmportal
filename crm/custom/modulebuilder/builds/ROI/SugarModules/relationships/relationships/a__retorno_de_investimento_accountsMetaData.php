<?php
// created: 2012-04-03 09:42:18
$dictionary["a__retorno_de_investimento_accounts"] = array (
  'true_relationship_type' => 'one-to-many',
  'relationships' => 
  array (
    'a__retorno_de_investimento_accounts' => 
    array (
      'lhs_module' => 'A__Retorno_de_investimento',
      'lhs_table' => 'a__retorno_de_investimento',
      'lhs_key' => 'id',
      'rhs_module' => 'Accounts',
      'rhs_table' => 'accounts',
      'rhs_key' => 'id',
      'relationship_type' => 'many-to-many',
      'join_table' => 'a__retorno_nto_accounts_c',
      'join_key_lhs' => 'a__retorno7b64timento_ida',
      'join_key_rhs' => 'a__retorno5b38ccounts_idb',
    ),
  ),
  'table' => 'a__retorno_nto_accounts_c',
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
      'name' => 'a__retorno7b64timento_ida',
      'type' => 'varchar',
      'len' => 36,
    ),
    4 => 
    array (
      'name' => 'a__retorno5b38ccounts_idb',
      'type' => 'varchar',
      'len' => 36,
    ),
  ),
  'indices' => 
  array (
    0 => 
    array (
      'name' => 'a__retorno_mento_accountsspk',
      'type' => 'primary',
      'fields' => 
      array (
        0 => 'id',
      ),
    ),
    1 => 
    array (
      'name' => 'a__retorno_mento_accounts_ida1',
      'type' => 'index',
      'fields' => 
      array (
        0 => 'a__retorno7b64timento_ida',
      ),
    ),
    2 => 
    array (
      'name' => 'a__retorno_mento_accounts_alt',
      'type' => 'alternate_key',
      'fields' => 
      array (
        0 => 'a__retorno5b38ccounts_idb',
      ),
    ),
  ),
);
?>
