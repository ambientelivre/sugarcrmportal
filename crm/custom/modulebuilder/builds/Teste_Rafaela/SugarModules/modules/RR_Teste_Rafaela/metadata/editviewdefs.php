<?php
$module_name = 'RR_Teste_Rafaela';
$viewdefs [$module_name] = 
array (
  'EditView' => 
  array (
    'templateMeta' => 
    array (
      'maxColumns' => '2',
      'widths' => 
      array (
        0 => 
        array (
          'label' => '10',
          'field' => '30',
        ),
        1 => 
        array (
          'label' => '10',
          'field' => '30',
        ),
      ),
      'useTabs' => false,
      'syncDetailEditViews' => true,
    ),
    'panels' => 
    array (
      'default' => 
      array (
        0 => 
        array (
          0 => 'name',
          1 => 'assigned_user_name',
        ),
        1 => 
        array (
          0 => 'description',
          1 => '',
        ),
        2 => 
        array (
          0 => 
          array (
            'name' => 'status_ligacao',
            'studio' => 'visible',
            'label' => 'LBL_STATUS_LIGACAO',
          ),
          1 => 
          array (
            'name' => 'rr_teste_ra_contacts_name',
          ),
        ),
        3 => 
        array (
          0 => '',
          1 => '',
        ),
        4 => 
        array (
          0 => 
          array (
            'name' => 'rr_teste_ra_accounts_name',
          ),
        ),
      ),
    ),
  ),
);
?>
