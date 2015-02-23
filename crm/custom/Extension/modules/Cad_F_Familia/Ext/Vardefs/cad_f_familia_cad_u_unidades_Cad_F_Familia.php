<?php
// created: 2012-02-07 10:02:53
$dictionary["Cad_F_Familia"]["fields"]["cad_f_familcad_u_unidades"] = array (
  'name' => 'cad_f_familcad_u_unidades',
  'type' => 'link',
  'relationship' => 'cad_f_familia_cad_u_unidades',
  'source' => 'non-db',
  'vname' => 'LBL_CAD_F_FAMILIA_CAD_U_UNIDADES_FROM_CAD_U_UNIDADES_TITLE',
);
$dictionary["Cad_F_Familia"]["fields"]["cad_f_famil_unidades_name"] = array (
  'name' => 'cad_f_famil_unidades_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_CAD_F_FAMILIA_CAD_U_UNIDADES_FROM_CAD_U_UNIDADES_TITLE',
  'save' => true,
  'id_name' => 'cad_f_fami40f4nidades_ida',
  'link' => 'cad_f_familcad_u_unidades',
  'table' => 'cad_u_unidades',
  'module' => 'cad_U_Unidades',
  'rname' => 'name',
);
$dictionary["Cad_F_Familia"]["fields"]["cad_f_fami40f4nidades_ida"] = array (
  'name' => 'cad_f_fami40f4nidades_ida',
  'type' => 'link',
  'relationship' => 'cad_f_familia_cad_u_unidades',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'right',
  'vname' => 'LBL_CAD_F_FAMILIA_CAD_U_UNIDADES_FROM_CAD_F_FAMILIA_TITLE',
);
