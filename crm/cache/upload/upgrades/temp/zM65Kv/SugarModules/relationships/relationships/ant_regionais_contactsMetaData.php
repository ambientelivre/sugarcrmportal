<?php
// created: 2014-11-27 09:01:52
$dictionary["ant_regionais_contacts"] = array (
  'true_relationship_type' => 'many-to-many',
  'relationships' => 
  array (
    'ant_regionais_contacts' => 
    array (
      'lhs_module' => 'ant_regionais',
      'lhs_table' => 'ant_regionais',
      'lhs_key' => 'id',
      'rhs_module' => 'Contacts',
      'rhs_table' => 'contacts',
      'rhs_key' => 'id',
      'relationship_type' => 'many-to-many',
      'join_table' => 'ant_regionais_contacts_c',
      'join_key_lhs' => 'ant_region4141gionais_ida',
      'join_key_rhs' => 'ant_region7672ontacts_idb',
    ),
  ),
  'table' => 'ant_regionais_contacts_c',
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
      'name' => 'ant_region4141gionais_ida',
      'type' => 'varchar',
      'len' => 36,
    ),
    4 => 
    array (
      'name' => 'ant_region7672ontacts_idb',
      'type' => 'varchar',
      'len' => 36,
    ),
  ),
  'indices' => 
  array (
    0 => 
    array (
      'name' => 'ant_regionais_contactsspk',
      'type' => 'primary',
      'fields' => 
      array (
        0 => 'id',
      ),
    ),
    1 => 
    array (
      'name' => 'ant_regionais_contacts_alt',
      'type' => 'alternate_key',
      'fields' => 
      array (
        0 => 'ant_region4141gionais_ida',
        1 => 'ant_region7672ontacts_idb',
      ),
    ),
  ),
);
?>
