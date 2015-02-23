<?php
// created: 2012-04-03 08:57:09
$dictionary["cases_cases"] = array (
  'true_relationship_type' => 'one-to-many',
  'from_studio' => true,
  'relationships' => 
  array (
    'cases_cases' => 
    array (
      'lhs_module' => 'Cases',
      'lhs_table' => 'cases',
      'lhs_key' => 'id',
      'rhs_module' => 'Cases',
      'rhs_table' => 'cases',
      'rhs_key' => 'id',
      'relationship_type' => 'many-to-many',
      'join_table' => 'cases_cases_c',
      'join_key_lhs' => 'cases_casefe06escases_ida',
      'join_key_rhs' => 'cases_case6760escases_idb',
    ),
  ),
  'table' => 'cases_cases_c',
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
      'name' => 'cases_casefe06escases_ida',
      'type' => 'varchar',
      'len' => 36,
    ),
    4 => 
    array (
      'name' => 'cases_case6760escases_idb',
      'type' => 'varchar',
      'len' => 36,
    ),
  ),
  'indices' => 
  array (
    0 => 
    array (
      'name' => 'cases_casesspk',
      'type' => 'primary',
      'fields' => 
      array (
        0 => 'id',
      ),
    ),
    1 => 
    array (
      'name' => 'cases_cases_ida1',
      'type' => 'index',
      'fields' => 
      array (
        0 => 'cases_casefe06escases_ida',
      ),
    ),
    2 => 
    array (
      'name' => 'cases_cases_alt',
      'type' => 'alternate_key',
      'fields' => 
      array (
        0 => 'cases_case6760escases_idb',
      ),
    ),
  ),
);
?>
