<?php
$module_name = 't3cpa_pedido_veterinario_regional';
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
            'name' => 'ped_nm_razao',
            'label' => 'LBL_PED_NM_RAZAO',
          ),
          1 => 
          array (
            'name' => 'ped_cep',
            'label' => 'LBL_PED_CEP',
          ),
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'ped_tp_logradouro',
            'label' => 'LBL_PED_TP_LOGRADOURO',
          ),
          1 => 
          array (
            'name' => 'ped_logradouro',
            'label' => 'LBL_PED_LOGRADOURO',
          ),
        ),
        2 => 
        array (
          0 => 
          array (
            'name' => 'ped_bairro',
            'label' => 'LBL_PED_BAIRRO',
          ),
          1 => 
          array (
            'name' => 'ped_cidade',
            'label' => 'LBL_PED_CIDADE',
          ),
        ),
        3 => 
        array (
          0 => 
          array (
            'name' => 'ped_estado',
            'label' => 'LBL_PED_ESTADO',
          ),
          1 => 
          array (
            'name' => 'ped_num_logradouro',
            'label' => 'LBL_PED_NUM_LOGRADOURO',
          ),
        ),
        4 => 
        array (
          0 => 
          array (
            'name' => 'ped_complemento',
            'label' => 'LBL_PED_COMPLEMENTO',
          ),
          1 => 
          array (
            'name' => 'ped_cpf_cnpj',
            'label' => 'LBL_PED_CPF_CNPJ',
          ),
        ),
        5 => 
        array (
          0 => 
          array (
            'name' => 'ped_inscricao_estadual',
            'label' => 'LBL_PED_INSCRICAO_ESTADUAL',
          ),
          1 => 
          array (
            'name' => 'ped_telefone_contato',
            'label' => 'LBL_PED_TELEFONE_CONTATO',
          ),
        ),
        6 => 
        array (
          0 => 
          array (
            'name' => 'ped_quantidade',
            'label' => 'LBL_PED_QUANTIDADE',
          ),
          1 => 
          array (
            'name' => 'ped_desc_produto',
            'label' => 'LBL_PED_DESC_PRODUTO',
          ),
        ),
        7 => 
        array (
          0 => 
          array (
            'name' => 'ped_lote',
            'label' => 'LBL_PED_LOTE',
          ),
          1 => 
          array (
            'name' => 'ped_valor_unitario',
            'label' => 'LBL_PED_VALOR_UNITARIO',
          ),
        ),
        8 => 
        array (
          0 => 
          array (
            'name' => 'ped_valor_total',
            'label' => 'LBL_PED_VALOR_TOTAL',
          ),
          1 => '',
        ),
      ),
    ),
  ),
);
?>
