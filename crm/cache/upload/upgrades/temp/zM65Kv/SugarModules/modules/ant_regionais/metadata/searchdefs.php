<?php
$module_name = 'ant_regionais';
$searchdefs [$module_name] = 
array (
  'layout' => 
  array (
    'basic_search' => 
    array (
      'reg_razao_social' => 
      array (
        'type' => 'varchar',
        'label' => 'LBL_REG_RAZAO_SOCIAL ',
        'width' => '10%',
        'default' => true,
        'name' => 'reg_razao_social',
      ),
      'reg_nm_fantasia' => 
      array (
        'type' => 'varchar',
        'label' => 'LBL_REG_NM_FANTASIA',
        'width' => '10%',
        'default' => true,
        'name' => 'reg_nm_fantasia',
      ),
      'reg_cnpj' => 
      array (
        'type' => 'varchar',
        'label' => 'LBL_REG_CNPJ',
        'width' => '10%',
        'default' => true,
        'name' => 'reg_cnpj',
      ),
      'reg_estado' => 
      array (
        'type' => 'enum',
        'default' => true,
        'studio' => 'visible',
        'label' => 'LBL_REG_ESTADO ',
        'sortable' => false,
        'width' => '10%',
        'name' => 'reg_estado',
      ),
      'reg_cidade' => 
      array (
        'type' => 'varchar',
        'label' => 'LBL_REG_CIDADE',
        'width' => '10%',
        'default' => true,
        'name' => 'reg_cidade',
      ),
    ),
    'advanced_search' => 
    array (
      'reg_razao_social' => 
      array (
        'type' => 'varchar',
        'label' => 'LBL_REG_RAZAO_SOCIAL ',
        'width' => '10%',
        'default' => true,
        'name' => 'reg_razao_social',
      ),
      'reg_nm_fantasia' => 
      array (
        'type' => 'varchar',
        'label' => 'LBL_REG_NM_FANTASIA',
        'width' => '10%',
        'default' => true,
        'name' => 'reg_nm_fantasia',
      ),
      'reg_cnpj' => 
      array (
        'type' => 'varchar',
        'label' => 'LBL_REG_CNPJ',
        'width' => '10%',
        'default' => true,
        'name' => 'reg_cnpj',
      ),
      'reg_inscricao_estadual' => 
      array (
        'type' => 'varchar',
        'label' => 'LBL_REG_INSCRICAO_ESTADUAL',
        'width' => '10%',
        'default' => true,
        'name' => 'reg_inscricao_estadual',
      ),
      'reg_email' => 
      array (
        'type' => 'varchar',
        'label' => 'LBL_REG_EMAIL',
        'width' => '10%',
        'default' => true,
        'name' => 'reg_email',
      ),
      'reg_contato' => 
      array (
        'type' => 'varchar',
        'label' => 'LBL_REG_CONTATO',
        'width' => '10%',
        'default' => true,
        'name' => 'reg_contato',
      ),
      'reg_telefone' => 
      array (
        'type' => 'varchar',
        'label' => 'LBL_REG_TELEFONE',
        'width' => '10%',
        'default' => true,
        'name' => 'reg_telefone',
      ),
      'reg_estado' => 
      array (
        'type' => 'enum',
        'default' => true,
        'studio' => 'visible',
        'label' => 'LBL_REG_ESTADO ',
        'sortable' => false,
        'width' => '10%',
        'name' => 'reg_estado',
      ),
      'reg_cidade' => 
      array (
        'type' => 'varchar',
        'label' => 'LBL_REG_CIDADE',
        'width' => '10%',
        'default' => true,
        'name' => 'reg_cidade',
      ),
      'reg_cep' => 
      array (
        'type' => 'varchar',
        'label' => 'LBL_REG_CEP',
        'width' => '10%',
        'default' => true,
        'name' => 'reg_cep',
      ),
      'reg_bairro' => 
      array (
        'type' => 'varchar',
        'label' => 'LBL_REG_BAIRRO',
        'width' => '10%',
        'default' => true,
        'name' => 'reg_bairro',
      ),
      'reg_tp_logradouro' => 
      array (
        'type' => 'enum',
        'default' => true,
        'studio' => 'visible',
        'label' => 'LBL_REG_TP_LOGRADOURO ',
        'sortable' => false,
        'width' => '10%',
        'name' => 'reg_tp_logradouro',
      ),
      'reg_logradouro' => 
      array (
        'type' => 'varchar',
        'label' => 'LBL_REG_LOGRADOURO',
        'width' => '10%',
        'default' => true,
        'name' => 'reg_logradouro',
      ),
      'reg_numero' => 
      array (
        'type' => 'varchar',
        'label' => 'LBL_ REG_NUMERO',
        'width' => '10%',
        'default' => true,
        'name' => 'reg_numero',
      ),
      'reg_complemento' => 
      array (
        'type' => 'varchar',
        'label' => 'LBL_REG_COMPLEMENTO',
        'width' => '10%',
        'default' => true,
        'name' => 'reg_complemento',
      ),
      'reg_cnae' => 
      array (
        'type' => 'varchar',
        'label' => 'LBL_REG_CNAE',
        'width' => '10%',
        'default' => true,
        'name' => 'reg_cnae',
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
