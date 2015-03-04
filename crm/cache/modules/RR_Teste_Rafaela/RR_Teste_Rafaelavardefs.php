<?php
// created: 2015-03-02 13:09:58
$GLOBALS["dictionary"]["RR_Teste_Rafaela"] = array (
  'table' => 'rr_teste_rafaela',
  'audited' => true,
  'fields' => 
  array (
    'id' => 
    array (
      'name' => 'id',
      'vname' => 'LBL_ID',
      'type' => 'id',
      'required' => true,
      'reportable' => true,
      'comment' => 'Unique identifier',
    ),
    'name' => 
    array (
      'name' => 'name',
      'vname' => 'LBL_NAME',
      'type' => 'name',
      'dbType' => 'varchar',
      'len' => 255,
      'unified_search' => true,
      'required' => true,
      'importable' => 'required',
    ),
    'date_entered' => 
    array (
      'name' => 'date_entered',
      'vname' => 'LBL_DATE_ENTERED',
      'type' => 'datetime',
      'group' => 'created_by_name',
      'comment' => 'Date record created',
      'enable_range_search' => true,
      'options' => 'date_range_search_dom',
    ),
    'date_modified' => 
    array (
      'name' => 'date_modified',
      'vname' => 'LBL_DATE_MODIFIED',
      'type' => 'datetime',
      'group' => 'modified_by_name',
      'comment' => 'Date record last modified',
      'enable_range_search' => true,
      'options' => 'date_range_search_dom',
    ),
    'modified_user_id' => 
    array (
      'name' => 'modified_user_id',
      'rname' => 'user_name',
      'id_name' => 'modified_user_id',
      'vname' => 'LBL_MODIFIED',
      'type' => 'assigned_user_name',
      'table' => 'users',
      'isnull' => 'false',
      'group' => 'modified_by_name',
      'dbType' => 'id',
      'reportable' => true,
      'comment' => 'User who last modified record',
    ),
    'modified_by_name' => 
    array (
      'name' => 'modified_by_name',
      'vname' => 'LBL_MODIFIED_NAME',
      'type' => 'relate',
      'reportable' => false,
      'source' => 'non-db',
      'rname' => 'user_name',
      'table' => 'users',
      'id_name' => 'modified_user_id',
      'module' => 'Users',
      'link' => 'modified_user_link',
      'duplicate_merge' => 'disabled',
    ),
    'created_by' => 
    array (
      'name' => 'created_by',
      'rname' => 'user_name',
      'id_name' => 'modified_user_id',
      'vname' => 'LBL_CREATED',
      'type' => 'assigned_user_name',
      'table' => 'users',
      'isnull' => 'false',
      'dbType' => 'id',
      'group' => 'created_by_name',
      'comment' => 'User who created record',
    ),
    'created_by_name' => 
    array (
      'name' => 'created_by_name',
      'vname' => 'LBL_CREATED',
      'type' => 'relate',
      'reportable' => false,
      'link' => 'created_by_link',
      'rname' => 'user_name',
      'source' => 'non-db',
      'table' => 'users',
      'id_name' => 'created_by',
      'module' => 'Users',
      'duplicate_merge' => 'disabled',
      'importable' => 'false',
    ),
    'description' => 
    array (
      'name' => 'description',
      'vname' => 'LBL_DESCRIPTION',
      'type' => 'text',
      'comment' => 'Full text of the note',
      'rows' => 6,
      'cols' => 80,
    ),
    'deleted' => 
    array (
      'name' => 'deleted',
      'vname' => 'LBL_DELETED',
      'type' => 'bool',
      'default' => '0',
      'reportable' => false,
      'comment' => 'Record deletion indicator',
    ),
    'created_by_link' => 
    array (
      'name' => 'created_by_link',
      'type' => 'link',
      'relationship' => 'rr_teste_rafaela_created_by',
      'vname' => 'LBL_CREATED_USER',
      'link_type' => 'one',
      'module' => 'Users',
      'bean_name' => 'User',
      'source' => 'non-db',
    ),
    'modified_user_link' => 
    array (
      'name' => 'modified_user_link',
      'type' => 'link',
      'relationship' => 'rr_teste_rafaela_modified_user',
      'vname' => 'LBL_MODIFIED_USER',
      'link_type' => 'one',
      'module' => 'Users',
      'bean_name' => 'User',
      'source' => 'non-db',
    ),
    'assigned_user_id' => 
    array (
      'name' => 'assigned_user_id',
      'rname' => 'user_name',
      'id_name' => 'assigned_user_id',
      'vname' => 'LBL_ASSIGNED_TO_ID',
      'group' => 'assigned_user_name',
      'type' => 'relate',
      'table' => 'users',
      'module' => 'Users',
      'reportable' => true,
      'isnull' => 'false',
      'dbType' => 'id',
      'audited' => true,
      'comment' => 'User ID assigned to record',
      'duplicate_merge' => 'disabled',
    ),
    'assigned_user_name' => 
    array (
      'name' => 'assigned_user_name',
      'link' => 'assigned_user_link',
      'vname' => 'LBL_ASSIGNED_TO_NAME',
      'rname' => 'user_name',
      'type' => 'relate',
      'reportable' => false,
      'source' => 'non-db',
      'table' => 'users',
      'id_name' => 'assigned_user_id',
      'module' => 'Users',
      'duplicate_merge' => 'disabled',
    ),
    'assigned_user_link' => 
    array (
      'name' => 'assigned_user_link',
      'type' => 'link',
      'relationship' => 'rr_teste_rafaela_assigned_user',
      'vname' => 'LBL_ASSIGNED_TO_USER',
      'link_type' => 'one',
      'module' => 'Users',
      'bean_name' => 'User',
      'source' => 'non-db',
      'duplicate_merge' => 'enabled',
      'rname' => 'user_name',
      'id_name' => 'assigned_user_id',
      'table' => 'users',
    ),
    'status_ligacao' => 
    array (
      'required' => false,
      'name' => 'status_ligacao',
      'vname' => 'LBL_STATUS_LIGACAO',
      'type' => 'enum',
      'massupdate' => 0,
      'default' => 'Planned',
      'comments' => '',
      'help' => '',
      'importable' => 'true',
      'duplicate_merge' => 'disabled',
      'duplicate_merge_dom_value' => '0',
      'audited' => false,
      'reportable' => true,
      'len' => 100,
      'size' => '20',
      'options' => 'call_status_dom',
      'studio' => 'visible',
      'dependency' => false,
    ),
    'rr_teste_rafaela_accounts' => 
    array (
      'name' => 'rr_teste_rafaela_accounts',
      'type' => 'link',
      'relationship' => 'rr_teste_rafaela_accounts',
      'source' => 'non-db',
      'vname' => 'LBL_RR_TESTE_RAFAELA_ACCOUNTS_FROM_ACCOUNTS_TITLE',
    ),
    'rr_teste_ra_accounts_name' => 
    array (
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
    ),
    'rr_teste_r1c45ccounts_ida' => 
    array (
      'name' => 'rr_teste_r1c45ccounts_ida',
      'type' => 'link',
      'relationship' => 'rr_teste_rafaela_accounts',
      'source' => 'non-db',
      'reportable' => false,
      'side' => 'right',
      'vname' => 'LBL_RR_TESTE_RAFAELA_ACCOUNTS_FROM_RR_TESTE_RAFAELA_TITLE',
    ),
    'rr_teste_rafaela_contacts' => 
    array (
      'name' => 'rr_teste_rafaela_contacts',
      'type' => 'link',
      'relationship' => 'rr_teste_rafaela_contacts',
      'source' => 'non-db',
      'vname' => 'LBL_RR_TESTE_RAFAELA_CONTACTS_FROM_CONTACTS_TITLE',
    ),
    'rr_teste_ra_contacts_name' => 
    array (
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
    ),
    'rr_teste_r0b5bontacts_ida' => 
    array (
      'name' => 'rr_teste_r0b5bontacts_ida',
      'type' => 'link',
      'relationship' => 'rr_teste_rafaela_contacts',
      'source' => 'non-db',
      'reportable' => false,
      'side' => 'right',
      'vname' => 'LBL_RR_TESTE_RAFAELA_CONTACTS_FROM_RR_TESTE_RAFAELA_TITLE',
    ),
  ),
  'relationships' => 
  array (
    'rr_teste_rafaela_modified_user' => 
    array (
      'lhs_module' => 'Users',
      'lhs_table' => 'users',
      'lhs_key' => 'id',
      'rhs_module' => 'RR_Teste_Rafaela',
      'rhs_table' => 'rr_teste_rafaela',
      'rhs_key' => 'modified_user_id',
      'relationship_type' => 'one-to-many',
    ),
    'rr_teste_rafaela_created_by' => 
    array (
      'lhs_module' => 'Users',
      'lhs_table' => 'users',
      'lhs_key' => 'id',
      'rhs_module' => 'RR_Teste_Rafaela',
      'rhs_table' => 'rr_teste_rafaela',
      'rhs_key' => 'created_by',
      'relationship_type' => 'one-to-many',
    ),
    'rr_teste_rafaela_assigned_user' => 
    array (
      'lhs_module' => 'Users',
      'lhs_table' => 'users',
      'lhs_key' => 'id',
      'rhs_module' => 'RR_Teste_Rafaela',
      'rhs_table' => 'rr_teste_rafaela',
      'rhs_key' => 'assigned_user_id',
      'relationship_type' => 'one-to-many',
    ),
  ),
  'optimistic_locking' => true,
  'unified_search' => true,
  'indices' => 
  array (
    'id' => 
    array (
      'name' => 'rr_teste_rafaelapk',
      'type' => 'primary',
      'fields' => 
      array (
        0 => 'id',
      ),
    ),
  ),
  'templates' => 
  array (
    'assignable' => 'assignable',
    'basic' => 'basic',
  ),
  'custom_fields' => false,
);
?>
