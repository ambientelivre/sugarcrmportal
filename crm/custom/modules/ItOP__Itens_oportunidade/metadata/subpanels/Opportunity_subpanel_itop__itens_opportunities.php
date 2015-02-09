<?php
// created: 2012-03-02 10:48:51
$subpanel_layout['list_fields'] = array (
  'name' => 
  array (
    'vname' => 'LBL_NAME',
    'widget_class' => 'SubPanelDetailViewLink',
    'width' => '45%',
    'default' => true,
  ),
  'itop__itens_solucoes_name' => 
  array (
    'type' => 'relate',
    'link' => 'itop__itenscad_s_solucoes',
    'vname' => 'LBL_ITOP__ITENS_OPORTUNIDADE_CAD_S_SOLUCOES_FROM_CAD_S_SOLUCOES_TITLE',
    'width' => '10%',
    'default' => true,
  ),
  'valor_c' => 
  array (
    'type' => 'varchar',
    'default' => true,
    'vname' => 'LBL_VALOR',
    'width' => '10%',
  ),
  'assigned_user_name' => 
  array (
    'link' => 'assigned_user_link',
    'type' => 'relate',
    'vname' => 'LBL_ASSIGNED_TO_NAME',
    'width' => '10%',
    'default' => true,
  ),
  'edit_button' => 
  array (
    'widget_class' => 'SubPanelEditButton',
    'module' => 'ItOP__Itens_oportunidade',
    'width' => '4%',
    'default' => true,
  ),
  'remove_button' => 
  array (
    'widget_class' => 'SubPanelRemoveButton',
    'module' => 'ItOP__Itens_oportunidade',
    'width' => '5%',
    'default' => true,
  ),
);
?>
