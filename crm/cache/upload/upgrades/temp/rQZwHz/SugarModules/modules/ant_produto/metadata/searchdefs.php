<?php
$module_name = 'ant_produto';
$searchdefs [$module_name] = 
array (
  'layout' => 
  array (
    'basic_search' => 
    array (
      'pd_nome' => 
      array (
        'type' => 'varchar',
        'label' => 'LBL_PD_NOME',
        'width' => '10%',
        'default' => true,
        'name' => 'pd_nome',
      ),
      'pd_descricao' => 
      array (
        'type' => 'varchar',
        'label' => 'LBL_PD_DESCRICAO',
        'width' => '10%',
        'default' => true,
        'name' => 'pd_descricao',
      ),
    ),
    'advanced_search' => 
    array (
      'pd_nome' => 
      array (
        'type' => 'varchar',
        'label' => 'LBL_PD_NOME',
        'width' => '10%',
        'default' => true,
        'name' => 'pd_nome',
      ),
      'pd_descricao' => 
      array (
        'type' => 'varchar',
        'label' => 'LBL_PD_DESCRICAO',
        'width' => '10%',
        'default' => true,
        'name' => 'pd_descricao',
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
