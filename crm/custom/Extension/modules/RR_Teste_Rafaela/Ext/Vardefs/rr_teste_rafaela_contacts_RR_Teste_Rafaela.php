<?php
// created: 2014-08-11 10:27:23
$dictionary["RR_Teste_Rafaela"]["fields"]["rr_teste_rafaela_contacts"] = array (
  'name' => 'rr_teste_rafaela_contacts',
  'type' => 'link',
  'relationship' => 'rr_teste_rafaela_contacts',
  'source' => 'non-db',
  'vname' => 'LBL_RR_TESTE_RAFAELA_CONTACTS_FROM_CONTACTS_TITLE',
);
$dictionary["RR_Teste_Rafaela"]["fields"]["rr_teste_ra_contacts_name"] = array (
  'name' => 'rr_teste_ra_contacts_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_RR_TESTE_RAFAELA_CONTACTS_FROM_CONTACTS_TITLE',
  'save' => true,
  'id_name' => 'rr_teste_r0b5bontacts_ida',
  'link' => 'rr_teste_rafaela_contacts',
  'table' => 'contacts',
  'module' => 'Contacts',
  'rname' => 'name',
  'db_concat_fields' => 
  array (
    0 => 'first_name',
    1 => 'last_name',
  ),
);
$dictionary["RR_Teste_Rafaela"]["fields"]["rr_teste_r0b5bontacts_ida"] = array (
  'name' => 'rr_teste_r0b5bontacts_ida',
  'type' => 'link',
  'relationship' => 'rr_teste_rafaela_contacts',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'right',
  'vname' => 'LBL_RR_TESTE_RAFAELA_CONTACTS_FROM_RR_TESTE_RAFAELA_TITLE',
);
