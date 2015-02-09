<?php
$searchdefs ['Cases'] = 
array (
  'layout' => 
  array (
    'basic_search' => 
    array (
      'case_number' => 
      array (
        'type' => 'int',
        'default' => true,
        'width' => '10%',
        'label' => 'LBL_NUMBER',
        'name' => 'case_number',
      ),
      'open_only' => 
      array (
        'name' => 'open_only',
        'label' => 'LBL_OPEN_ITEMS',
        'type' => 'bool',
        'default' => true,
        'width' => '10%',
      ),
      'responsavel_atual_c' => 
      array (
        'type' => 'varchar',
        'default' => true,
        'label' => 'LBL_RESPONSAVEL_ATUAL',
        'width' => '10%',
        'name' => 'responsavel_atual_c',
      ),
    ),
    'advanced_search' => 
    array (
      'case_number' => 
      array (
        'name' => 'case_number',
        'default' => true,
        'width' => '10%',
      ),
      'name' => 
      array (
        'name' => 'name',
        'default' => true,
        'width' => '10%',
      ),
      'account_name' => 
      array (
        'name' => 'account_name',
        'default' => true,
        'width' => '10%',
      ),
      'status' => 
      array (
        'name' => 'status',
        'default' => true,
        'width' => '10%',
      ),
      'assigned_user_id' => 
      array (
        'name' => 'assigned_user_id',
        'type' => 'enum',
        'label' => 'LBL_ASSIGNED_TO',
        'function' => 
        array (
          'name' => 'get_user_array',
          'params' => 
          array (
            0 => false,
          ),
        ),
        'default' => true,
        'width' => '10%',
      ),
      'priority' => 
      array (
        'name' => 'priority',
        'default' => true,
        'width' => '10%',
      ),
      'cad_u_unidades_cases_name' => 
      array (
        'type' => 'relate',
        'link' => 'cad_u_unidades_cases',
        'label' => 'LBL_CAD_U_UNIDADES_CASES_FROM_CAD_U_UNIDADES_TITLE',
        'width' => '10%',
        'default' => true,
        'name' => 'cad_u_unidades_cases_name',
      ),
      'responsavel_atual_c' => 
      array (
        'type' => 'varchar',
        'default' => true,
        'label' => 'LBL_RESPONSAVEL_ATUAL',
        'width' => '10%',
        'name' => 'responsavel_atual_c',
      ),
      'type' => 
      array (
        'type' => 'enum',
        'label' => 'LBL_TYPE',
        'sortable' => false,
        'width' => '10%',
        'default' => true,
        'name' => 'type',
      ),
      'informacao_c' => 
      array (
        'type' => 'varchar',
        'default' => true,
        'label' => 'LBL_INFORMACAO',
        'width' => '10%',
        'name' => 'informacao_c',
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
