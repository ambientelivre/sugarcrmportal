<?php
// created: 2012-03-30 11:13:26
$dictionary["Case"]["fields"]["cad_u_unidades_cases"] = array (
  'name' => 'cad_u_unidades_cases',
  'type' => 'link',
  'relationship' => 'cad_u_unidades_cases',
  'source' => 'non-db',
  'vname' => 'LBL_CAD_U_UNIDADES_CASES_FROM_CAD_U_UNIDADES_TITLE',
);
$dictionary["Case"]["fields"]["cad_u_unidades_cases_name"] = array (
  'name' => 'cad_u_unidades_cases_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_CAD_U_UNIDADES_CASES_FROM_CAD_U_UNIDADES_TITLE',
  'save' => true,
  'id_name' => 'cad_u_unidbaaanidades_ida',
  'link' => 'cad_u_unidades_cases',
  'table' => 'cad_u_unidades',
  'module' => 'cad_U_Unidades',
  'rname' => 'name',
);
$dictionary["Case"]["fields"]["cad_u_unidbaaanidades_ida"] = array (
  'name' => 'cad_u_unidbaaanidades_ida',
  'type' => 'link',
  'relationship' => 'cad_u_unidades_cases',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'right',
  'vname' => 'LBL_CAD_U_UNIDADES_CASES_FROM_CASES_TITLE',
);
