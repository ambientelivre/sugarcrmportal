<?php
$viewdefs ['Accounts'] = 
array (
  'EditView' => 
  array (
    'templateMeta' => 
    array (
      'form' => 
      array (
        'buttons' => 
        array (
          0 => 'SAVE',
          1 => 'CANCEL',
        ),
      ),
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
      'includes' => 
      array (
        0 => 
        array (
          'file' => 'modules/Accounts/Account.js',
        ),
      ),
      'useTabs' => false,
    ),
    'panels' => 
    array (
      'lbl_account_information' => 
      array (
        0 => 
        array (
          0 => 
          array (
            'name' => 'name',
            'label' => 'LBL_NAME',
            'displayParams' => 
            array (
              'required' => true,
            ),
          ),
          1 => 
          array (
            'name' => 'razao_social_c',
            'label' => 'LBL_RAZAO_SOCIAL',
          ),
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'inscricao_estadual_c',
            'label' => 'LBL_INSCRICAO_ESTADUAL',
          ),
          1 => 
          array (
            'name' => 'cnpj_cpf_c',
            'label' => 'LBL_CNPJ_CPF',
          ),
        ),
        2 => 
        array (
          0 => 
          array (
            'name' => 'phone_office',
            'label' => 'LBL_PHONE_OFFICE',
          ),
          1 => 
          array (
            'name' => 'phone_fax',
            'label' => 'LBL_FAX',
          ),
        ),
        3 => 
        array (
          0 => 
          array (
            'name' => 'website',
            'type' => 'link',
            'label' => 'LBL_WEBSITE',
          ),
        ),
        4 => 
        array (
          0 => 
          array (
            'name' => 'billing_address_street',
            'hideLabel' => true,
            'type' => 'address',
            'displayParams' => 
            array (
              'key' => 'billing',
              'rows' => 2,
              'cols' => 30,
              'maxlength' => 150,
            ),
            'tabindex' => '11',
          ),
          1 => 
          array (
            'name' => 'shipping_address_street',
            'hideLabel' => true,
            'type' => 'address',
            'displayParams' => 
            array (
              'key' => 'shipping',
              'copy' => 'billing',
              'rows' => 2,
              'cols' => 30,
              'maxlength' => 150,
            ),
            'tabindex' => '10',
          ),
        ),
        5 => 
        array (
          0 => 
          array (
            'name' => 'bairro_cobranca_c',
            'label' => 'LBL_BAIRRO_COBRANCA',
          ),
          1 => 
          array (
            'name' => 'bairro_entrega_c',
            'label' => 'LBL_BAIRRO_ENTREGA',
          ),
        ),
        6 => 
        array (
          0 => 
          array (
            'name' => 'email1',
            'studio' => 'false',
            'label' => 'LBL_EMAIL',
          ),
          1 => '',
        ),
        7 => 
        array (
          0 => 
          array (
            'name' => 'description',
            'label' => 'LBL_DESCRIPTION',
          ),
          1 => '',
        ),
        8 => 
        array (
          0 => 
          array (
            'name' => 'a__retorno__accounts_name',
            'label' => 'LBL_A__RETORNO_DE_INVESTIMENTO_ACCOUNTS_FROM_A__RETORNO_DE_INVESTIMENTO_TITLE',
          ),
          1 => 
          array (
            'name' => 'opportuniti_accounts_name',
          ),
        ),
      ),
      'lbl_editview_panel1' => 
      array (
        0 => 
        array (
          0 => 
          array (
            'name' => 'rua_para_faturar_c',
            'label' => 'LBL_RUA_PARA_FATURAR',
          ),
          1 => 
          array (
            'name' => 'rua_para_faturar_postalcode_c',
            'label' => 'LBL_RUA_PARA_FATURAR_POSTALCODE',
          ),
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'bairro_para_fatura_c',
            'label' => 'LBL_BAIRRO_PARA_FATURA',
          ),
          1 => 
          array (
            'name' => 'cidade_para_fatura_c',
            'label' => 'LBL_CIDADE_PARA_FATURA',
          ),
        ),
        2 => 
        array (
          0 => 
          array (
            'name' => 'estado_para_fatura_c',
            'label' => 'LBL_ESTADO_PARA_FATURA',
          ),
          1 => 
          array (
            'name' => 'pais_para_fatura_c',
            'label' => 'LBL_PAIS_PARA_FATURA',
          ),
        ),
      ),
      'LBL_PANEL_ADVANCED' => 
      array (
        0 => 
        array (
          0 => 'account_type',
          1 => 'industry',
        ),
        1 => 
        array (
          0 => 'annual_revenue',
          1 => 
          array (
            'name' => 'tipo_conte_c',
            'studio' => 'visible',
            'label' => 'LBL_TIPO_CONTE',
          ),
        ),
        2 => 
        array (
          0 => 'employees',
          1 => 'sic_code',
        ),
        3 => 
        array (
          0 => 'ticker_symbol',
          1 => 'parent_name',
        ),
        4 => 
        array (
          0 => 'ownership',
          1 => 'rating',
        ),
        5 => 
        array (
          0 => 'campaign_name',
          1 => 
          array (
            'name' => 'cod_atividade_c',
            'label' => 'LBL_COD_ATIVIDADE',
          ),
        ),
        6 => 
        array (
          0 => 
          array (
            'name' => 'descricao_atividade_c',
            'label' => 'LBL_DESCRICAO_ATIVIDADE',
          ),
          1 => '',
        ),
      ),
      'LBL_PANEL_ASSIGNMENT' => 
      array (
        0 => 
        array (
          0 => 
          array (
            'name' => 'assigned_user_name',
            'label' => 'LBL_ASSIGNED_TO',
          ),
        ),
      ),
    ),
  ),
);
?>
