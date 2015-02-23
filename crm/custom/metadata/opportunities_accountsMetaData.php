<?php
// created: 2012-10-09 13:54:18
$dictionary["opportunities_accounts"] = array (
  'true_relationship_type' => 'one-to-many',
  'from_studio' => true,
  'relationships' => 
  array (
    'opportunities_accounts' => 
    array (
      'lhs_module' => 'Opportunities',
      'lhs_table' => 'opportunities',
      'lhs_key' => 'id',
      'rhs_module' => 'Accounts',
      'rhs_table' => 'accounts',
      'rhs_key' => 'id',
      'relationship_type' => 'many-to-many',
      'join_table' => 'opportunities_accounts_c',
      'join_key_lhs' => 'opportunit9c8cunities_ida',
      'join_key_rhs' => 'opportunit89cfccounts_idb',
    ),
  ),
  'table' => 'opportunities_accounts_c',
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
      'name' => 'opportunit9c8cunities_ida',
      'type' => 'varchar',
      'len' => 36,
    ),
    4 => 
    array (
      'name' => 'opportunit89cfccounts_idb',
      'type' => 'varchar',
      'len' => 36,
    ),
  ),
  'indices' => 
  array (
    0 => 
    array (
      'name' => 'opportunities_accountsspk',
      'type' => 'primary',
      'fields' => 
      array (
        0 => 'id',
      ),
    ),
    1 => 
    array (
      'name' => 'opportunities_accounts_ida1',
      'type' => 'index',
      'fields' => 
      array (
        0 => 'opportunit9c8cunities_ida',
      ),
    ),
    2 => 
    array (
      'name' => 'opportunities_accounts_alt',
      'type' => 'alternate_key',
      'fields' => 
      array (
        0 => 'opportunit89cfccounts_idb',
      ),
    ),
  ),
);
?>
