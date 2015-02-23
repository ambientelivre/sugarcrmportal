<?php
$module_name = 'ant_secretarias';
$searchdefs [$module_name] = 
array (
  'layout' => 
  array (
    'basic_search' => 
    array (
      'sec_nome_fantasia' => 
      array (
        'type' => 'varchar',
        'label' => 'LBL_SEC_NOME_FANTASIA',
        'width' => '10%',
        'default' => true,
        'name' => 'sec_nome_fantasia',
      ),
      'sec_razao_social' => 
      array (
        'type' => 'varchar',
        'label' => 'LBL_SEC_RAZAO_SOCIAL',
        'width' => '10%',
        'default' => true,
        'name' => 'sec_razao_social',
      ),
      'sec_cnpj' => 
      array (
        'type' => 'varchar',
        'label' => 'LBL_SEC_CNPJ',
        'width' => '10%',
        'default' => true,
        'name' => 'sec_cnpj',
      ),
      'sec_cidade' => 
      array (
        'type' => 'varchar',
        'label' => 'LBL_SEC_CIDADE',
        'width' => '10%',
        'default' => true,
        'name' => 'sec_cidade',
      ),
      'sec_estado' => 
      array (
        'type' => 'enum',
        'default' => true,
        'studio' => 'visible',
        'label' => 'LBL_SEC_ESTADO',
        'sortable' => false,
        'width' => '10%',
        'name' => 'sec_estado',
      ),
    ),
    'advanced_search' => 
    array (
      'sec_razao_social' => 
      array (
        'type' => 'varchar',
        'label' => 'LBL_SEC_RAZAO_SOCIAL',
        'width' => '10%',
        'default' => true,
        'name' => 'sec_razao_social',
      ),
      'sec_nome_fantasia' => 
      array (
        'type' => 'varchar',
        'label' => 'LBL_SEC_NOME_FANTASIA',
        'width' => '10%',
        'default' => true,
        'name' => 'sec_nome_fantasia',
      ),
      'sec_cnpj' => 
      array (
        'type' => 'varchar',
        'label' => 'LBL_SEC_CNPJ',
        'width' => '10%',
        'default' => true,
        'name' => 'sec_cnpj',
      ),
      'sec_cep' => 
      array (
        'type' => 'varchar',
        'label' => 'LBL_SEC_CEP',
        'width' => '10%',
        'default' => true,
        'name' => 'sec_cep',
      ),
      'sec_estado' => 
      array (
        'type' => 'enum',
        'default' => true,
        'studio' => 'visible',
        'label' => 'LBL_SEC_ESTADO',
        'sortable' => false,
        'width' => '10%',
        'name' => 'sec_estado',
      ),
      'sec_cidade' => 
      array (
        'type' => 'varchar',
        'label' => 'LBL_SEC_CIDADE',
        'width' => '10%',
        'default' => true,
        'name' => 'sec_cidade',
      ),
      'sec_telefone' => 
      array (
        'type' => 'varchar',
        'label' => 'LBL_SEC_TELEFONE',
        'width' => '10%',
        'default' => true,
        'name' => 'sec_telefone',
      ),
      'sec_bairro' => 
      array (
        'type' => 'varchar',
        'label' => 'LBL_SEC_BAIRRO',
        'width' => '10%',
        'default' => true,
        'name' => 'sec_bairro',
      ),
      'sec_email' => 
      array (
        'type' => 'varchar',
        'label' => 'LBL_SEC_EMAIL',
        'width' => '10%',
        'default' => true,
        'name' => 'sec_email',
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
