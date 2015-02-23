<?php
$module_name = 't3cpa_venda_antigenos_tecpar';
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
            'name' => 'nome_razao_social',
            'label' => 'LBL_NOME_RAZAO_SOCIAL',
          ),
          1 => 
          array (
            'name' => 'cpf_cnpj',
            'label' => 'LBL_CPF_CNPJ',
          ),
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'telefone_contato',
            'label' => 'LBL_TELEFONE_CONTATO',
          ),
          1 => 
          array (
            'name' => 'tipo_logradouro',
            'label' => 'LBL_TIPO_LOGRADOURO',
          ),
        ),
        2 => 
        array (
          0 => 
          array (
            'name' => 'complemento',
            'label' => 'LBL_COMPLEMENTO',
          ),
          1 => 
          array (
            'name' => 'cep',
            'label' => 'LBL_CEP',
          ),
        ),
        3 => 
        array (
          0 => 
          array (
            'name' => 'bairro',
            'label' => 'LBL_BAIRRO',
          ),
          1 => 
          array (
            'name' => 'cidade',
            'label' => 'LBL_CIDADE',
          ),
        ),
        4 => 
        array (
          0 => 
          array (
            'name' => 'estado',
            'label' => 'LBL_ESTADO',
          ),
          1 => 
          array (
            'name' => 'pais',
            'label' => 'LBL_PAIS',
          ),
        ),
        5 => 
        array (
          0 => 
          array (
            'name' => 'inscricao_estadual',
            'label' => 'LBL_INSCRICAO_ESTADUAL',
          ),
        ),
      ),
      'lbl_editview_panel1' => 
      array (
        0 => 
        array (
          0 => 
          array (
            'name' => 'quantidade',
            'label' => 'LBL_QUANTIDADE',
          ),
          1 => 
          array (
            'name' => 'valor_total',
            'label' => 'LBL_VALOR_TOTAL',
          ),
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'valor_unitario',
            'label' => 'LBL_VALOR_UNITARIO',
          ),
          1 => 
          array (
            'name' => 'lote',
            'label' => 'LBL_LOTE',
          ),
        ),
        2 => 
        array (
          0 => 
          array (
            'name' => 'descricao_do_produto',
            'label' => 'LBL_DESCRICAO_DO_PRODUTO',
          ),
          1 => '',
        ),
      ),
    ),
  ),
);
?>
