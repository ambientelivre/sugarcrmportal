<?php
$module_name = 't3cpa_pedido_veterinario_regional';
$searchdefs [$module_name] = 
array (
  'layout' => 
  array (
    'basic_search' => 
    array (
      'ped_nm_razao' => 
      array (
        'type' => 'varchar',
        'label' => 'LBL_PED_NM_RAZAO',
        'width' => '10%',
        'default' => true,
        'name' => 'ped_nm_razao',
      ),
      'ped_cep' => 
      array (
        'type' => 'varchar',
        'label' => 'LBL_PED_CEP',
        'width' => '10%',
        'default' => true,
        'name' => 'ped_cep',
      ),
      'ped_cpf_cnpj' => 
      array (
        'type' => 'varchar',
        'label' => 'LBL_PED_CPF_CNPJ',
        'width' => '10%',
        'default' => true,
        'name' => 'ped_cpf_cnpj',
      ),
      'ped_valor_unitario' => 
      array (
        'type' => 'varchar',
        'label' => 'LBL_PED_VALOR_UNITARIO',
        'width' => '10%',
        'default' => true,
        'name' => 'ped_valor_unitario',
      ),
    ),
    'advanced_search' => 
    array (
      0 => 'name',
      1 => 
      array (
        'name' => 'assigned_user_id',
        'label' => 'LBL_ASSIGNED_TO',
        'type' => 'enum',
        'function' => 
        array (
          'name' => 'get_user_array',
          'params' => 
          array (
            0 => false,
          ),
        ),
      ),
    ),
  ),
  'templateMeta' => 
  array (
    'maxColumns' => '3',
    'maxColumnsBasic' => '4',
    'widths' => 
    array (
      'label' => '10',
      'field' => '30',
    ),
  ),
);
?>
