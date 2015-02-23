<?php
$module_name = 't3cpa_regionais';
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
      'default' => 
      array (
        0 => 
        array (
          0 => 
          array (
            'name' => 'reg_razao_social',
            'label' => 'LBL_REG_RAZAO_SOCIAL',
          ),
          1 => 
          array (
            'name' => 'reg_nm_fantasia',
            'label' => 'LBL_REG_NM_FANTASIA',
          ),
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'reg_inscricao_estadual',
            'label' => 'LBL_REG_INSCRICAO_ESTADUAL',
          ),
          1 => 
          array (
            'name' => 'reg_cnae',
            'label' => 'LBL_REG_CNAE',
          ),
        ),
        2 => 
        array (
          0 => 
          array (
            'name' => 'reg_logradouro',
            'label' => 'LBL_REG_LOGRADOURO',
          ),
          1 => 
          array (
            'name' => 'reg_complemento',
            'label' => 'LBL_REG_COMPLEMENTO',
          ),
        ),
        3 => 
        array (
          0 => 
          array (
            'name' => 'reg_numero',
            'label' => 'LBL_REG_NUMERO',
          ),
          1 => 
          array (
            'name' => 'reg_bairro',
            'label' => 'LBL_REG_BAIRRO',
          ),
        ),
        4 => 
        array (
          0 => 
          array (
            'name' => 'reg_cep',
            'label' => 'LBL_REG_CEP',
          ),
          1 => 
          array (
            'name' => 'reg_cidade',
            'label' => 'LBL_REG_CIDADE',
          ),
        ),
        5 => 
        array (
          0 => 
          array (
            'name' => 'reg_estado',
            'label' => 'LBL_REG_ESTADO',
          ),
          1 => 
          array (
            'name' => 'reg_cnpj',
            'label' => 'LBL_REG_CNPJ',
          ),
        ),
        6 => 
        array (
          0 => 
          array (
            'name' => 'reg_tp_logradouro',
            'label' => 'LBL_REG_TP_LOGRADOURO',
          ),
          1 => '',
        ),
      ),
    ),
  ),
);
?>
