<?php
// created: 2012-03-02 10:45:33
$dictionary["itop__itens_oportunidade_opportunities"] = array (
  'true_relationship_type' => 'one-to-many',
  'relationships' => 
  array (
    'itop__itens_oportunidade_opportunities' => 
    array (
      'lhs_module' => 'Opportunities',
      'lhs_table' => 'opportunities',
      'lhs_key' => 'id',
      'rhs_module' => 'ItOP__Itens_oportunidade',
      'rhs_table' => 'itop__itens_oportunidade',
      'rhs_key' => 'id',
      'relationship_type' => 'many-to-many',
      'join_table' => 'itop__itenspportunities_c',
      'join_key_lhs' => 'itop__iten6192unities_ida',
      'join_key_rhs' => 'itop__iten593cunidade_idb',
    ),
  ),
  'table' => 'itop__itenspportunities_c',
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
      'name' => 'itop__iten6192unities_ida',
      'type' => 'varchar',
      'len' => 36,
    ),
    4 => 
    array (
      'name' => 'itop__iten593cunidade_idb',
      'type' => 'varchar',
      'len' => 36,
    ),
  ),
  'indices' => 
  array (
    0 => 
    array (
      'name' => 'itop__itens_opportunitiesspk',
      'type' => 'primary',
      'fields' => 
      array (
        0 => 'id',
      ),
    ),
    1 => 
    array (
      'name' => 'itop__itens_opportunities_ida1',
      'type' => 'index',
      'fields' => 
      array (
        0 => 'itop__iten6192unities_ida',
      ),
    ),
    2 => 
    array (
      'name' => 'itop__itens_opportunities_alt',
      'type' => 'alternate_key',
      'fields' => 
      array (
        0 => 'itop__iten593cunidade_idb',
      ),
    ),
  ),
);
?>
