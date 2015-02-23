<?php 
 //WARNING: The contents of this file are auto-generated


 // created: 2012-04-03 08:52:50

 

 // created: 2012-03-30 14:26:05

 

 // created: 2012-04-03 08:54:56

 

 // created: 2012-03-30 15:51:26

 

 // created: 2012-03-30 14:24:36

 

 // created: 2012-03-30 15:51:32

 

 // created: 2012-04-03 08:55:04

 

 // created: 2012-03-30 14:25:05

 

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


 // created: 2012-03-30 14:27:48
$dictionary['Case']['fields']['case_number']['required']=false;
$dictionary['Case']['fields']['case_number']['duplicate_merge']='enabled';
$dictionary['Case']['fields']['case_number']['duplicate_merge_dom_value']='1';
$dictionary['Case']['fields']['case_number']['enable_range_search']=false;
$dictionary['Case']['fields']['case_number']['autoinc_next']='14';

 

 // created: 2012-03-30 15:53:06

 

 // created: 2012-03-30 14:26:46

 

 // created: 2012-03-30 14:24:54

 

 // created: 2012-04-03 08:54:26

 

 // created: 2012-03-30 14:25:19

 

 // created: 2012-03-30 14:25:42

 

 // created: 2012-03-30 15:51:41

 

 // created: 2012-03-30 14:24:20

 

 // created: 2012-03-30 14:27:01

 

 // created: 2012-03-30 14:26:23

 

// created: 2012-04-03 08:57:09
$dictionary["Case"]["fields"]["cases_cases"] = array (
  'name' => 'cases_cases',
  'type' => 'link',
  'relationship' => 'cases_cases',
  'source' => 'non-db',
  'vname' => 'LBL_CASES_CASES_FROM_CASES_L_TITLE',
);
$dictionary["Case"]["fields"]["cases_cases_name"] = array (
  'name' => 'cases_cases_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_CASES_CASES_FROM_CASES_L_TITLE',
  'save' => true,
  'id_name' => 'cases_casefe06escases_ida',
  'link' => 'cases_cases',
  'table' => 'cases',
  'module' => 'Cases',
  'rname' => 'name',
);
$dictionary["Case"]["fields"]["cases_casefe06escases_ida"] = array (
  'name' => 'cases_casefe06escases_ida',
  'type' => 'link',
  'relationship' => 'cases_cases',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'right',
  'vname' => 'LBL_CASES_CASES_FROM_CASES_R_TITLE',
);


 // created: 2012-04-03 08:54:28

 

 // created: 2012-04-03 09:19:16

 
?>