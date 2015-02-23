<?php
// created: 2012-02-03 15:45:39
$dictionary["CAD_S_Solucoes"]["fields"]["cad_s_soluccad_u_unidades"] = array (
  'name' => 'cad_s_soluccad_u_unidades',
  'type' => 'link',
  'relationship' => 'cad_s_solucoes_cad_u_unidades',
  'source' => 'non-db',
  'vname' => 'LBL_CAD_S_SOLUCOES_CAD_U_UNIDADES_FROM_CAD_U_UNIDADES_TITLE',
);
$dictionary["CAD_S_Solucoes"]["fields"]["cad_s_soluc_unidades_name"] = array (
  'name' => 'cad_s_soluc_unidades_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_CAD_S_SOLUCOES_CAD_U_UNIDADES_FROM_CAD_U_UNIDADES_TITLE',
  'save' => true,
  'id_name' => 'cad_s_solu642bnidades_idb',
  'link' => 'cad_s_soluccad_u_unidades',
  'table' => 'cad_u_unidades',
  'module' => 'cad_U_Unidades',
  'rname' => 'name',
);
$dictionary["CAD_S_Solucoes"]["fields"]["cad_s_solu642bnidades_idb"] = array (
  'name' => 'cad_s_solu642bnidades_idb',
  'type' => 'link',
  'relationship' => 'cad_s_solucoes_cad_u_unidades',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'left',
  'vname' => 'LBL_CAD_S_SOLUCOES_CAD_U_UNIDADES_FROM_CAD_U_UNIDADES_TITLE',
);
