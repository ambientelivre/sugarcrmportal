<?php
// created: 2014-09-12 15:58:56
$layout_defs["ant_pedido"]["subpanel_setup"]["ant_lista_pdos_ant_pedido"] = array (
  'order' => 100,
  'module' => 'ant_lista_pedidos',
  'subpanel_name' => 'default',
  'sort_order' => 'asc',
  'sort_by' => 'id',
  'title_key' => 'LBL_ANT_LISTA_PEDIDOS_ANT_PEDIDO_FROM_ANT_LISTA_PEDIDOS_TITLE',
  'get_subpanel_data' => 'ant_lista_pdos_ant_pedido',
  'top_buttons' => 
  array (
    0 => 
    array (
      'widget_class' => 'SubPanelTopButtonQuickCreate',
    ),
    1 => 
    array (
      'widget_class' => 'SubPanelTopSelectButton',
      'mode' => 'MultiSelect',
    ),
  ),
);
?>
