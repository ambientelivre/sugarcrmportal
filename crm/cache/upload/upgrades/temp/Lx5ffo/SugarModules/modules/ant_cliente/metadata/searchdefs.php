<?php
$module_name = 'ant_cliente';
$searchdefs [$module_name] = 
array (
  'layout' => 
  array (
    'basic_search' => 
    array (
      'cli_razao_social' => 
      array (
        'type' => 'varchar',
        'label' => 'LBL_CLI_RAZAO_SOCIAL',
        'width' => '10%',
        'default' => true,
        'name' => 'cli_razao_social',
      ),
      'cli_nm_fantasia' => 
      array (
        'type' => 'varchar',
        'label' => 'LBL_CLI_NM_FANTASIA',
        'width' => '10%',
        'default' => true,
        'name' => 'cli_nm_fantasia',
      ),
      'cli_estado' => 
      array (
        'type' => 'enum',
        'default' => true,
        'studio' => 'visible',
        'label' => 'LBL_CLI_ESTADO',
        'sortable' => false,
        'width' => '10%',
        'name' => 'cli_estado',
      ),
      'cli_cidade' => 
      array (
        'type' => 'varchar',
        'label' => 'LBL_CLI_CIDADE',
        'width' => '10%',
        'default' => true,
        'name' => 'cli_cidade',
      ),
    ),
    'advanced_search' => 
    array (
      'cli_razao_social' => 
      array (
        'type' => 'varchar',
        'label' => 'LBL_CLI_RAZAO_SOCIAL',
        'width' => '10%',
        'default' => true,
        'name' => 'cli_razao_social',
      ),
      'cli_nm_fantasia' => 
      array (
        'type' => 'varchar',
        'label' => 'LBL_CLI_NM_FANTASIA',
        'width' => '10%',
        'default' => true,
        'name' => 'cli_nm_fantasia',
      ),
      'cli_cnpj_cpf' => 
      array (
        'type' => 'varchar',
        'label' => 'LBL_CLI_CNPJ_CPF',
        'width' => '10%',
        'default' => true,
        'name' => 'cli_cnpj_cpf',
      ),
      'cli_telefone' => 
      array (
        'type' => 'varchar',
        'label' => 'LBL_CLI_TELEFONE',
        'width' => '10%',
        'default' => true,
        'name' => 'cli_telefone',
      ),
      'cli_estado' => 
      array (
        'type' => 'enum',
        'default' => true,
        'studio' => 'visible',
        'label' => 'LBL_CLI_ESTADO',
        'sortable' => false,
        'width' => '10%',
        'name' => 'cli_estado',
      ),
      'cli_cidade' => 
      array (
        'type' => 'varchar',
        'label' => 'LBL_CLI_CIDADE',
        'width' => '10%',
        'default' => true,
        'name' => 'cli_cidade',
      ),
      'cli_bairro' => 
      array (
        'type' => 'varchar',
        'label' => 'LBL_CLI_BAIRRO',
        'width' => '10%',
        'default' => true,
        'name' => 'cli_bairro',
      ),
      'cli_cep' => 
      array (
        'type' => 'varchar',
        'label' => 'LBL_CLI_CEP',
        'width' => '10%',
        'default' => true,
        'name' => 'cli_cep',
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
