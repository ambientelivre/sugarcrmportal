<?php
// created: 2012-04-03 09:42:25
$dictionary["at__atendimento_ao_cliente_activities_tasks"] = array (
  'relationships' => 
  array (
    'at__atendimento_ao_cliente_activities_tasks' => 
    array (
      'lhs_module' => 'AT__Atendimento_ao_cliente',
      'lhs_table' => 'at__atendimento_ao_cliente',
      'lhs_key' => 'id',
      'rhs_module' => 'Tasks',
      'rhs_table' => 'tasks',
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
