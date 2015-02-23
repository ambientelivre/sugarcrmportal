<?php
// created: 2014-08-11 10:27:23
$dictionary["RR_Teste_Rafaela"]["fields"]["rr_teste_rafaela_accounts"] = array (
  'name' => 'rr_teste_rafaela_accounts',
  'type' => 'link',
  'relationship' => 'rr_teste_rafaela_accounts',
  'source' => 'non-db',
  'vname' => 'LBL_RR_TESTE_RAFAELA_ACCOUNTS_FROM_ACCOUNTS_TITLE',
);
$dictionary["RR_Teste_Rafaela"]["fields"]["rr_teste_ra_accounts_name"] = array (
  'name' => 'rr_teste_ra_accounts_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_RR_TESTE_RAFAELA_ACCOUNTS_FROM_ACCOUNTS_TITLE',
  'save' => true,
  'id_name' => 'rr_teste_r1c45ccounts_ida',
  'link' => 'rr_teste_rafaela_accounts',
  'table' => 'accounts',
  'module' => 'Accounts',
  'rname' => 'name',
);
$dictionary["RR_Teste_Rafaela"]["fields"]["rr_teste_r1c45ccounts_ida"] = array (
  'name' => 'rr_teste_r1c45ccounts_ida',
  'type' => 'link',
  'relationship' => 'rr_teste_rafaela_accounts',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'right',
  'vname' => 'LBL_RR_TESTE_RAFAELA_ACCOUNTS_FROM_RR_TESTE_RAFAELA_TITLE',
);
