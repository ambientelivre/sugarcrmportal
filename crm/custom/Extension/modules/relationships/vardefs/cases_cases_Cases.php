<?php
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
