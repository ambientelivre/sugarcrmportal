<?php
$module_name = 'ant_regionais';
$viewdefs [$module_name] = 
array (
  'DetailView' => 
  array (
    'templateMeta' => 
    array (
      'form' => 
      array (
        'buttons' => 
        array (
          0 => 'EDIT',
          1 => 'DUPLICATE',
          2 => 'DELETE',
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
      'useTabs' => false,
    ),
    'panels' => 
    array (
      'default' => 
      array (
        0 => 
        array (
          0 => '',
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'reg_razao_social',
            'label' => 'LBL_REG_RAZAO_SOCIAL ',
          ),
          1 => 
          array (
            'name' => 'reg_nm_fantasia',
            'label' => 'LBL_REG_NM_FANTASIA',
          ),
        ),
        2 => 
        array (
          0 => 
          array (
            'name' => 'reg_cep',
            'label' => 'LBL_REG_CEP',
          ),
          1 => 
          array (
            'name' => 'reg_bairro',
            'label' => 'LBL_REG_BAIRRO',
          ),
        ),
        3 => 
        array (
          0 => 
          array (
            'name' => 'reg_cidade',
            'label' => 'LBL_REG_CIDADE',
          ),
          1 => 
          array (
            'name' => 'reg_estado',
            'studio' => 'visible',
            'label' => 'LBL_REG_ESTADO ',
          ),
        ),
        4 => 
        array (
          0 => 
          array (
            'name' => 'reg_tp_logradouro',
            'studio' => 'visible',
            'label' => 'LBL_REG_TP_LOGRADOURO ',
          ),
          1 => 
          array (
            'name' => 'reg_logradouro',
            'label' => 'LBL_REG_LOGRADOURO',
          ),
        ),
        5 => 
        array (
          0 => 
          array (
            'name' => 'reg_numero',
            'label' => 'LBL_ REG_NUMERO',
          ),
          1 => 
          array (
            'name' => 'reg_complemento',
            'label' => 'LBL_REG_COMPLEMENTO',
          ),
        ),
        6 => 
        array (
          0 => 
          array (
            'name' => 'reg_cnpj',
            'label' => 'LBL_REG_CNPJ',
          ),
          1 => 
          array (
            'name' => 'reg_inscricao_estadual',
            'label' => 'LBL_REG_INSCRICAO_ESTADUAL',
          ),
        ),
        7 => 
        array (
          0 => 
          array (
            'name' => 'reg_cnae',
            'label' => 'LBL_REG_CNAE',
          ),
          1 => '',
        ),
        8 => 
        array (
          0 => 
          array (
            'name' => 'ant_clienteregionais_name',
          ),
          1 => '',
        ),
        9 => 
        array (
          0 => 
          array (
            'name' => 'ant_pedido_regionais_name',
          ),
          1 => 
          array (
            'name' => 'ant_pedido_gionais_1_name',
          ),
        ),
      ),
      'lbl_editview_panel3' => 
      array (
        0 => 
        array (
          0 => 
          array (
            'name' => 'reg_contato',
            'label' => 'LBL_REG_CONTATO',
          ),
          1 => 
          array (
            'name' => 'reg_telefone',
            'label' => 'LBL_REG_TELEFONE',
          ),
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'reg_email',
            'label' => 'LBL_REG_EMAIL',
          ),
          1 => 
          array (
            'name' => 'reg_orgao_vinculado_pncebt',
            'label' => 'LBL_REG_ORGAO_VINCULADO_PNCEBT',
          ),
        ),
      ),
      'lbl_editview_panel1' => 
      array (
        0 => 
        array (
          0 => 
          array (
            'name' => 'date_entered',
            'customCode' => '{$fields.date_entered.value} {$APP.LBL_BY} {$fields.created_by_name.value}',
            'label' => 'LBL_DATE_ENTERED',
          ),
          1 => 
          array (
            'name' => 'created_by_name',
            'label' => 'LBL_CREATED',
          ),
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'date_modified',
            'customCode' => '{$fields.date_modified.value} {$APP.LBL_BY} {$fields.modified_by_name.value}',
            'label' => 'LBL_DATE_MODIFIED',
          ),
          1 => 
          array (
            'name' => 'modified_by_name',
            'label' => 'LBL_MODIFIED_NAME',
          ),
        ),
      ),
    ),
  ),
);
?>
