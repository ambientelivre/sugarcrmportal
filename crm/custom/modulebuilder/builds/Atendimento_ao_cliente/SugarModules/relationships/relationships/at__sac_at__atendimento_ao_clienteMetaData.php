<?php
// created: 2012-04-03 09:42:25
$dictionary["at__sac_at__atendimento_ao_cliente"] = array (
  'true_relationship_type' => 'many-to-many',
  'relationships' => 
  array (
    'at__sac_at__atendimento_ao_cliente' => 
    array (
      'lhs_module' => 'AT__sac',
      'lhs_table' => 'at__sac',
      'lhs_key' => 'id',
      'rhs_module' => 'AT__Atendimento_ao_cliente',
      'rhs_table' => 'at__atendimento_ao_cliente',
      'rhs_key' => 'id',
      'relationship_type' => 'many-to-many',
      'join_table' => 'at__sac_at_o_ao_cliente_c',
      'join_key_lhs' => 'at__sac_atd1bfat__sac_ida',
      'join_key_rhs' => 'at__sac_at316dcliente_idb',
    ),
  ),
  'table' => 'at__sac_at_o_ao_cliente_c',
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
      'name' => 'at__sac_atd1bfat__sac_ida',
      'type' => 'varchar',
      'len' => 36,
    ),
    4 => 
    array (
      'name' => 'at__sac_at316dcliente_idb',
      'type' => 'varchar',
      'len' => 36,
    ),
  ),
  'indices' => 
  array (
    0 => 
    array (
      'name' => 'at__sac_at_nto_ao_clientespk',
      'type' => 'primary',
      'fields' => 
      array (
        0 => 'id',
      ),
    ),
    1 => 
    array (
      'name' => 'at__sac_at_nto_ao_cliente_alt',
      'type' => 'alternate_key',
      'fields' => 
      array (
        0 => 'at__sac_atd1bfat__sac_ida',
        1 => 'at__sac_at316dcliente_idb',
      ),
    ),
  ),
);
?>
