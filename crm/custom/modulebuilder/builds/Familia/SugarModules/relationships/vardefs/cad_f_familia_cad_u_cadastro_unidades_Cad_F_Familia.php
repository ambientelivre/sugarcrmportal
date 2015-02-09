<?php
// created: 2012-01-26 12:37:11
$dictionary["Cad_F_Familia"]["fields"]["cad_f_familastro_unidades"] = array (
  'name' => 'cad_f_familastro_unidades',
  'type' => 'link',
  'relationship' => 'cad_f_familia_cad_u_cadastro_unidades',
  'source' => 'non-db',
  'vname' => 'LBL_CAD_F_FAMILIA_CAD_U_CADASTRO_UNIDADES_FROM_CAD_U_CADASTRO_UNIDADES_TITLE',
);
$dictionary["Cad_F_Familia"]["fields"]["cad_f_famil_unidades_name"] = array (
  'name' => 'cad_f_famil_unidades_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_CAD_F_FAMILIA_CAD_U_CADASTRO_UNIDADES_FROM_CAD_U_CADASTRO_UNIDADES_TITLE',
  'save' => true,
  'id_name' => 'cad_f_fami197dnidades_ida',
  'link' => 'cad_f_familastro_unidades',
  'table' => 'cad_u_cadastro_unidades',
  'module' => 'Cad_U_Cadastro_Unidades',
  'rname' => 'name',
);
$dictionary["Cad_F_Familia"]["fields"]["cad_f_fami197dnidades_ida"] = array (
  'name' => 'cad_f_fami197dnidades_ida',
  'type' => 'link',
  'relationship' => 'cad_f_familia_cad_u_cadastro_unidades',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'right',
  'vname' => 'LBL_CAD_F_FAMILIA_CAD_U_CADASTRO_UNIDADES_FROM_CAD_F_FAMILIA_TITLE',
);
