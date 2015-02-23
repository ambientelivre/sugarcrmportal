<?php
$module_name = 'ant_lista_pedidos';
$viewdefs [$module_name] = 
array (
  'QuickCreate' => 
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
          0 => 'name',
          1 => 'assigned_user_name',
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'list_produto',
            'label' => 'LBL_LIST_PRODUTO',
          ),
          1 => 
          array (
            'name' => 'list_quantidade',
            'label' => 'LBL_LIST_QUANTIDADE',
          ),
        ),
        2 => 
        array (
          0 => 
          array (
            'name' => 'ant_pedido_a_pedidos_name',
            'label' => 'LBL_ANT_PEDIDO_ANT_LISTA_PEDIDOS_FROM_ANT_PEDIDO_TITLE',
          ),
          1 => '',
        ),
        3 => 
        array (
          0 => 
          array (
            'name' => 'description',
            'comment' => 'Full text of the note',
            'label' => 'LBL_DESCRIPTION',
          ),
          1 => '',
        ),
      ),
    ),
  ),
);
?>
