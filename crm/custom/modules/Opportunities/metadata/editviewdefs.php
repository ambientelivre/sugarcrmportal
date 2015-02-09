<?php
/*
 * TODO: Configurar para que os campos relacionaods a indicação iniciem escondidos. 
 * Fazer essa configuração em javascript. 
 * TODO: Fazer a função que irá mostrar o campo de acordo com a opção escolhida.
 * TODO: Testar e validar. em seguida publicar.
 * TODO: Testar atualização no buider do sugar CRM para ver se sobrescreve.
 */
$viewdefs ['Opportunities'] = 
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
      'javascript' => '{$PROBABILITY_SCRIPT}',
      'useTabs' => false,
    ),
    'panels' => 
    array (
      'default' => 
      array (
        0 => 
        array (
          0 => 
          array (
            'name' => 'name',
          ),
          1 => 'account_name',
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'currency_id',
            'label' => 'LBL_CURRENCY',
          ),
          1 => 
          array (
            'name' => 'date_closed',
          ),
        ),
        2 => 
        array (
          0 => 
          array (
            'name' => 'amount',
          ),
          1 => 'opportunity_type',
        ),
        3 => 
        array (
          0 => 'sales_stage',
          1 => 'probability',
        ),
        4 => 
        array (
          0 => 'next_step',
          1 => '',
        ),
        5 => 
        array (
          0 => 'description',
        ),
      ),
      'lbl_editview_panel1' => 
      array (
        0 => 
        array (
          0 => 'lead_source',
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'lead_detail_c',
            'studio' => 'visible',
            'label' => 'LBL_LEAD_DETAIL',
          	'displayParams' =>array ( 
              'field' =>  
              array ( 
                'disabled' => 'disabled', 
              ), 
            ),
          ),
          1 => 'campaign_name',
        ),
        2 => 
        array (
          0 => 
          array (
            'name' => 'source_employee_detail_c',
            'studio' => 'visible',
            'label' => 'LBL_SOURCE_EMPLOYEE_DETAIL',
          	'displayParams' =>array (
          				'field' =>
          				array (
          						'disabled' => 'disabled',
          						'style'=>'display:none;',
          				),
          		),
          ),
          1 => 
          array (
            'name' => 'contact_souce_detail_c',
            'studio' => 'visible',
            'label' => 'LBL_CONTACT_SOUCE_DETAIL',
          	'displayParams' =>array (
          				'field' =>
          				array (
          						'disabled' => 'disabled',
          				),
          		),
          ),
        ),
        3 => 
        array (
          0 => 
          array (
            'name' => 'site_source_detail_c',
            'label' => 'LBL_SITE_SOURCE_DETAIL',
          	'displayParams' =>array ( 
              'field' =>  
              array ( 
                'disabled' => 'disabled',
              ), 
            ),
          ),
          1 => 
          array (
            'name' => 'tradeshow_source_detail_c',
            'label' => 'LBL_TRADESHOW_SOURCE_DETAIL',
          	'displayParams' =>array (
          				'field' =>
          				array (
          						'disabled' => 'disabled',
          				),
          		),
          ),
        ),
      ),
      'LBL_PANEL_ASSIGNMENT' => 
      array (
        0 => 
        array (
          0 => 'assigned_user_name',
        ),
      ),
    ),
  ),
);
?>
