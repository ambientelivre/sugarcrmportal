<?php 
 //WARNING: The contents of this file are auto-generated


// created: 2012-02-16 11:16:46
$dictionary["CAD_S_Solucoes"]["fields"]["cad_s_soluc_cad_f_familia"] = array (
  'name' => 'cad_s_soluc_cad_f_familia',
  'type' => 'link',
  'relationship' => 'cad_s_solucoes_cad_f_familia',
  'source' => 'non-db',
  'vname' => 'LBL_CAD_S_SOLUCOES_CAD_F_FAMILIA_FROM_CAD_F_FAMILIA_TITLE',
);
$dictionary["CAD_S_Solucoes"]["fields"]["cad_s_solucf_familia_name"] = array (
  'name' => 'cad_s_solucf_familia_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_CAD_S_SOLUCOES_CAD_F_FAMILIA_FROM_CAD_F_FAMILIA_TITLE',
  'save' => true,
  'id_name' => 'cad_s_solu89d2familia_ida',
  'link' => 'cad_s_soluc_cad_f_familia',
  'table' => 'cad_f_familia',
  'module' => 'Cad_F_Familia',
  'rname' => 'name',
);
$dictionary["CAD_S_Solucoes"]["fields"]["cad_s_solu89d2familia_ida"] = array (
  'name' => 'cad_s_solu89d2familia_ida',
  'type' => 'link',
  'relationship' => 'cad_s_solucoes_cad_f_familia',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'right',
  'vname' => 'LBL_CAD_S_SOLUCOES_CAD_F_FAMILIA_FROM_CAD_S_SOLUCOES_TITLE',
);


// created: 2012-03-02 10:45:33
$dictionary["CAD_S_Solucoes"]["fields"]["itop__itenscad_s_solucoes"] = array (
  'name' => 'itop__itenscad_s_solucoes',
  'type' => 'link',
  'relationship' => 'itop__itens_oportunidade_cad_s_solucoes',
  'source' => 'non-db',
  'side' => 'right',
  'vname' => 'LBL_ITOP__ITENS_OPORTUNIDADE_CAD_S_SOLUCOES_FROM_ITOP__ITENS_OPORTUNIDADE_TITLE',
);

?>