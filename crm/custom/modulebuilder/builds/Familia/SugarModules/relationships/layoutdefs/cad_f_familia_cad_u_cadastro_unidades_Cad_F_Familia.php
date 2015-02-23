<?php
// created: 2012-01-26 12:28:42
$layout_defs["Cad_F_Familia"]["subpanel_setup"]["cad_f_familastro_unidades"] = array (
  'order' => 100,
  'module' => 'Cad_U_Cadastro_Unidades',
  'subpanel_name' => 'default',
  'sort_order' => 'asc',
  'sort_by' => 'id',
  'title_key' => 'LBL_CAD_F_FAMILIA_CAD_U_CADASTRO_UNIDADES_FROM_CAD_U_CADASTRO_UNIDADES_TITLE',
  'get_subpanel_data' => 'cad_f_familastro_unidades',
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
