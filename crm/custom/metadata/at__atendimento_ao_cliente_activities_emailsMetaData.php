<?php
// created: 2012-04-03 09:42:25
$dictionary["at__atendimento_ao_cliente_activities_emails"] = array (
  'relationships' => 
  array (
    'at__atendimento_ao_cliente_activities_emails' => 
    array (
      'lhs_module' => 'AT__Atendimento_ao_cliente',
      'lhs_table' => 'at__atendimento_ao_cliente',
      'lhs_key' => 'id',
      'rhs_module' => 'Emails',
      'rhs_table' => 'emails',
      'rhs_key' => 'parent_id',
      'relationship_type' => 'one-to-many',
      'relationship_role_column' => 'parent_type',
      'relationship_role_column_value' => 'AT__Atendimento_ao_cliente',
    ),
  ),
  'fields' => '',
  'indices' => '',
  'table' => '',
);
?>
