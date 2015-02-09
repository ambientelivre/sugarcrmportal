<?php
// created: 2012-10-09 13:54:18
$dictionary["Account"]["fields"]["opportunities_accounts"] = array (
  'name' => 'opportunities_accounts',
  'type' => 'link',
  'relationship' => 'opportunities_accounts',
  'source' => 'non-db',
  'vname' => 'LBL_OPPORTUNITIES_ACCOUNTS_FROM_OPPORTUNITIES_TITLE',
);
$dictionary["Account"]["fields"]["opportuniti_accounts_name"] = array (
  'name' => 'opportuniti_accounts_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_OPPORTUNITIES_ACCOUNTS_FROM_OPPORTUNITIES_TITLE',
  'save' => true,
  'id_name' => 'opportunit9c8cunities_ida',
  'link' => 'opportunities_accounts',
  'table' => 'opportunities',
  'module' => 'Opportunities',
  'rname' => 'name',
);
$dictionary["Account"]["fields"]["opportunit9c8cunities_ida"] = array (
  'name' => 'opportunit9c8cunities_ida',
  'type' => 'link',
  'relationship' => 'opportunities_accounts',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'right',
  'vname' => 'LBL_OPPORTUNITIES_ACCOUNTS_FROM_ACCOUNTS_TITLE',
);
