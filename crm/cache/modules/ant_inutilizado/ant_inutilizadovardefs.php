<?php
// created: 2015-03-02 15:44:00
$GLOBALS["dictionary"]["ant_inutilizado"] = array (
  'table' => 'ant_inutilizado',
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
      'relationship' => 'ant_inutilizado_created_by',
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
      'relationship' => 'ant_inutilizado_modified_user',
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
      'relationship' => 'ant_inutilizado_assigned_user',
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
    'in_data' => 
    array (
      'required' => false,
      'name' => 'in_data',
      'vname' => 'LBL_IN_DATA',
      'type' => 'varchar',
      'massupdate' => 0,
      'comments' => '',
      'help' => '',
      'importable' => 'true',
      'duplicate_merge' => 'disabled',
      'duplicate_merge_dom_value' => '0',
      'audited' => false,
      'reportable' => true,
      'len' => '255',
      'size' => '20',
    ),
    'in_obs' => 
    array (
      'required' => false,
      'name' => 'in_obs',
      'vname' => 'LBL_IN_OBS',
      'type' => 'text',
      'massupdate' => 0,
      'comments' => '',
      'help' => '',
      'importable' => 'true',
      'duplicate_merge' => 'disabled',
      'duplicate_merge_dom_value' => '0',
      'audited' => false,
      'reportable' => true,
      'size' => '20',
      'studio' => 'visible',
      'rows' => '4',
      'cols' => '20',
    ),
    'in_link' => 
    array (
      'required' => false,
      'name' => 'in_link',
      'vname' => 'LBL_IN_LINK',
      'type' => 'url',
      'massupdate' => 0,
      'comments' => '',
      'help' => '',
      'importable' => 'true',
      'duplicate_merge' => 'disabled',
      'duplicate_merge_dom_value' => '0',
      'audited' => false,
      'reportable' => true,
      'len' => '255',
      'size' => '20',
      'dbType' => 'varchar',
      'gen' => '',
      'link_target' => '_self',
    ),
    'in_dt_nf' => 
    array (
      'required' => false,
      'name' => 'in_dt_nf',
      'vname' => 'LBL_IN_DT_NF',
      'type' => 'datetimecombo',
      'massupdate' => 0,
      'comments' => '',
      'help' => '',
      'importable' => 'true',
      'duplicate_merge' => 'disabled',
      'duplicate_merge_dom_value' => '0',
      'audited' => false,
      'reportable' => true,
      'size' => '20',
      'enable_range_search' => false,
      'dbType' => 'datetime',
    ),
    'in_destino' => 
    array (
      'required' => false,
      'name' => 'in_destino',
      'vname' => 'LBL_IN_DESTINO',
      'type' => 'text',
      'massupdate' => 0,
      'comments' => '',
      'help' => '',
      'importable' => 'true',
      'duplicate_merge' => 'disabled',
      'duplicate_merge_dom_value' => '0',
      'audited' => false,
      'reportable' => true,
      'size' => '20',
      'studio' => 'visible',
      'rows' => '4',
      'cols' => '20',
    ),
    'ant_inutilis_inutilizados' => 
    array (
      'name' => 'ant_inutilis_inutilizados',
      'type' => 'link',
      'relationship' => 'ant_inutilizado_ant_itens_inutilizados',
      'source' => 'non-db',
      'vname' => 'LBL_ANT_INUTILIZADO_ANT_ITENS_INUTILIZADOS_FROM_ANT_ITENS_INUTILIZADOS_TITLE',
    ),
    'ant_inutili_ant_regionais' => 
    array (
      'name' => 'ant_inutili_ant_regionais',
      'type' => 'link',
      'relationship' => 'ant_inutilizado_ant_regionais',
      'source' => 'non-db',
      'vname' => 'LBL_ANT_INUTILIZADO_ANT_REGIONAIS_FROM_ANT_REGIONAIS_TITLE',
    ),
    'ant_inutiliregionais_name' => 
    array (
      'name' => 'ant_inutiliregionais_name',
      'type' => 'relate',
      'source' => 'non-db',
      'vname' => 'LBL_ANT_INUTILIZADO_ANT_REGIONAIS_FROM_ANT_REGIONAIS_TITLE',
      'save' => true,
      'id_name' => 'ant_inutil5c3egionais_idb',
      'link' => 'ant_inutili_ant_regionais',
      'table' => 'ant_regionais',
      'module' => 'ant_regionais',
      'rname' => 'name',
    ),
    'ant_inutil5c3egionais_idb' => 
    array (
      'name' => 'ant_inutil5c3egionais_idb',
      'type' => 'link',
      'relationship' => 'ant_inutilizado_ant_regionais',
      'source' => 'non-db',
      'reportable' => false,
      'side' => 'left',
      'vname' => 'LBL_ANT_INUTILIZADO_ANT_REGIONAIS_FROM_ANT_REGIONAIS_TITLE',
    ),
    'ant_inutilint_secretarias' => 
    array (
      'name' => 'ant_inutilint_secretarias',
      'type' => 'link',
      'relationship' => 'ant_inutilizado_ant_secretarias',
      'source' => 'non-db',
      'vname' => 'LBL_ANT_INUTILIZADO_ANT_SECRETARIAS_FROM_ANT_SECRETARIAS_TITLE',
    ),
    'ant_inutilicretarias_name' => 
    array (
      'name' => 'ant_inutilicretarias_name',
      'type' => 'relate',
      'source' => 'non-db',
      'vname' => 'LBL_ANT_INUTILIZADO_ANT_SECRETARIAS_FROM_ANT_SECRETARIAS_TITLE',
      'save' => true,
      'id_name' => 'ant_inutil2440etarias_idb',
      'link' => 'ant_inutilint_secretarias',
      'table' => 'ant_secretarias',
      'module' => 'ant_secretarias',
      'rname' => 'name',
    ),
    'ant_inutil2440etarias_idb' => 
    array (
      'name' => 'ant_inutil2440etarias_idb',
      'type' => 'link',
      'relationship' => 'ant_inutilizado_ant_secretarias',
      'source' => 'non-db',
      'reportable' => false,
      'side' => 'left',
      'vname' => 'LBL_ANT_INUTILIZADO_ANT_SECRETARIAS_FROM_ANT_SECRETARIAS_TITLE',
    ),
    'ant_itens_int_inutilizado' => 
    array (
      'name' => 'ant_itens_int_inutilizado',
      'type' => 'link',
      'relationship' => 'ant_itens_inutilizados_ant_inutilizado',
      'source' => 'non-db',
      'side' => 'right',
      'vname' => 'LBL_ANT_ITENS_INUTILIZADOS_ANT_INUTILIZADO_FROM_ANT_ITENS_INUTILIZADOS_TITLE',
    ),
  ),
  'relationships' => 
  array (
    'ant_inutilizado_modified_user' => 
    array (
      'lhs_module' => 'Users',
      'lhs_table' => 'users',
      'lhs_key' => 'id',
      'rhs_module' => 'ant_inutilizado',
      'rhs_table' => 'ant_inutilizado',
      'rhs_key' => 'modified_user_id',
      'relationship_type' => 'one-to-many',
    ),
    'ant_inutilizado_created_by' => 
    array (
      'lhs_module' => 'Users',
      'lhs_table' => 'users',
      'lhs_key' => 'id',
      'rhs_module' => 'ant_inutilizado',
      'rhs_table' => 'ant_inutilizado',
      'rhs_key' => 'created_by',
      'relationship_type' => 'one-to-many',
    ),
    'ant_inutilizado_assigned_user' => 
    array (
      'lhs_module' => 'Users',
      'lhs_table' => 'users',
      'lhs_key' => 'id',
      'rhs_module' => 'ant_inutilizado',
      'rhs_table' => 'ant_inutilizado',
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
      'name' => 'ant_inutilizadopk',
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
