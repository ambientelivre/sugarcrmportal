<?php
// created: 2012-02-03 15:45:39
$dictionary["cad_U_Unidades"]["fields"]["cad_s_soluccad_u_unidades"] = array (
  'name' => 'cad_s_soluccad_u_unidades',
  'type' => 'link',
  'relationship' => 'cad_s_solucoes_cad_u_unidades',
  'source' => 'non-db',
  'vname' => 'LBL_CAD_S_SOLUCOES_CAD_U_UNIDADES_FROM_CAD_S_SOLUCOES_TITLE',
);
$dictionary["cad_U_Unidades"]["fields"]["cad_s_soluc_unidades_name"] = array (
  'name' => 'cad_s_soluc_unidades_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_CAD_S_SOLUCOES_CAD_U_UNIDADES_FROM_CAD_S_SOLUCOES_TITLE',
  'save' => true,
  'id_name' => 'cad_s_solu7103olucoes_ida',
  'link' => 'cad_s_soluccad_u_unidades',
  'table' => 'cad_s_solucoes',
  'module' => 'CAD_S_Solucoes',
  'rname' => 'name',
);
$dictionary["cad_U_Unidades"]["fields"]["cad_s_solu7103olucoes_ida"] = array (
  'name' => 'cad_s_solu7103olucoes_ida',
  'type' => 'link',
  'relationship' => 'cad_s_solucoes_cad_u_unidades',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'left',
  'vname' => 'LBL_CAD_S_SOLUCOES_CAD_U_UNIDADES_FROM_CAD_S_SOLUCOES_TITLE',
);
