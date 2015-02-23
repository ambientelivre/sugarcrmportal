<?php
$module_name = 'ant_secretarias';
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
    ),
    'panels' => 
    array (
      'lbl_editview_panel1' => 
      array (
        0 => 
        array (
          0 => 
          array (
            'name' => 'sec_razao_social',
            'label' => 'LBL_SEC_RAZAO_SOCIAL',
          ),
          1 => 
          array (
            'name' => 'sec_nome_fantasia',
            'label' => 'LBL_SEC_NOME_FANTASIA',
          ),
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'sec_cep',
            'label' => 'LBL_SEC_CEP',
          ),
          1 => 
          array (
            'name' => 'sec_bairro',
            'label' => 'LBL_SEC_BAIRRO',
          ),
        ),
        2 => 
        array (
          0 => 
          array (
            'name' => 'sec_cidade',
            'label' => 'LBL_SEC_CIDADE',
          ),
          1 => 
          array (
            'name' => 'sec_estado',
            'studio' => 'visible',
            'label' => 'LBL_SEC_ESTADO',
          ),
        ),
        3 => 
        array (
          0 => 
          array (
            'name' => 'sec_tp_logradouro',
            'studio' => 'visible',
            'label' => 'LBL_SEC_TP_LOGRADOURO',
          ),
          1 => 
          array (
            'name' => 'sec_logradouro',
            'label' => 'LBL_SEC_LOGRADOURO',
          ),
        ),
        4 => 
        array (
          0 => 
          array (
            'name' => 'sec_numero',
            'label' => 'LBL_SEC_NUMERO',
          ),
          1 => 
          array (
            'name' => 'sec_complemento',
            'label' => 'LBL_SEC_COMPLEMENTO',
          ),
        ),
        5 => 
        array (
          0 => 
          array (
            'name' => 'sec_cnpj',
            'label' => 'LBL_SEC_CNPJ',
          ),
          1 => 
          array (
            'name' => 'sec_ie',
            'label' => 'LBL_SEC_IE',
          ),
        ),
        6 => 
        array (
          0 => 
          array (
            'name' => 'sec_cnae',
            'label' => 'LBL_SEC_CNAE',
          ),
          1 => '',
        ),
      ),
      'lbl_editview_panel4' => 
      array (
        0 => 
        array (
          0 => 
          array (
            'name' => 'sec_contato',
            'label' => 'LBL_SEC_CONTATO',
          ),
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'sec_telefone',
            'label' => 'LBL_SEC_TELEFONE',
          ),
          1 => 
          array (
            'name' => 'sec_email',
            'label' => 'LBL_SEC_EMAIL',
          ),
        ),
      ),
      'lbl_editview_panel3' => 
      array (
        0 => 
        array (
          0 => 
          array (
            'name' => 'sec_cord_est_nome',
            'label' => 'LBL_SEC_CORD_EST_NOME',
          ),
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'sec_cord_est_email',
            'label' => 'LBL_SEC_CORD_EST_EMAIL',
          ),
          1 => 
          array (
            'name' => 'sec_cord_est_tel',
            'label' => 'LBL_SEC_CORD_EST_TEL',
          ),
        ),
      ),
      'lbl_editview_panel2' => 
      array (
        0 => 
        array (
          0 => 
          array (
            'name' => 'created_by_name',
            'label' => 'LBL_CREATED',
          ),
          1 => 
          array (
            'name' => 'date_entered',
            'comment' => 'Date record created',
            'label' => 'LBL_DATE_ENTERED',
          ),
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'modified_by_name',
            'label' => 'LBL_MODIFIED_NAME',
          ),
          1 => 
          array (
            'name' => 'date_modified',
            'comment' => 'Date record last modified',
            'label' => 'LBL_DATE_MODIFIED',
          ),
        ),
      ),
    ),
  ),
);
?>
