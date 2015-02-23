<?php
// created: 2012-01-25 15:19:29
$dictionary["Cad_S_Solucoes"]["fields"]["cad_s_solucdastro_familia"] = array (
  'name' => 'cad_s_solucdastro_familia',
  'type' => 'link',
  'relationship' => 'cad_s_solucoes_cad_f_cadastro_familia',
  'source' => 'non-db',
  'vname' => 'LBL_CAD_S_SOLUCOES_CAD_F_CADASTRO_FAMILIA_FROM_CAD_F_CADASTRO_FAMILIA_TITLE',
);
$dictionary["Cad_S_Solucoes"]["fields"]["cad_s_soluco_familia_name"] = array (
  'name' => 'cad_s_soluco_familia_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_CAD_S_SOLUCOES_CAD_F_CADASTRO_FAMILIA_FROM_CAD_F_CADASTRO_FAMILIA_TITLE',
  'save' => true,
  'id_name' => 'cad_s_solu4eb3familia_ida',
  'link' => 'cad_s_solucdastro_familia',
  'table' => 'cad_f_cadastro_familia',
  'module' => 'cad_F_Cadastro_familia',
  'rname' => 'name',
);
$dictionary["Cad_S_Solucoes"]["fields"]["cad_s_solu4eb3familia_ida"] = array (
  'name' => 'cad_s_solu4eb3familia_ida',
  'type' => 'link',
  'relationship' => 'cad_s_solucoes_cad_f_cadastro_familia',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'right',
  'vname' => 'LBL_CAD_S_SOLUCOES_CAD_F_CADASTRO_FAMILIA_FROM_CAD_S_SOLUCOES_TITLE',
);
