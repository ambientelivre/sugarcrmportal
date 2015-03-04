<?php
// created: 2015-03-02 13:09:58
$GLOBALS["dictionary"]["ant_estoque_geral"] = array (
  'table' => 'ant_estoque_geral',
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
      'relationship' => 'ant_estoque_geral_created_by',
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
      'relationship' => 'ant_estoque_geral_modified_user',
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
      'relationship' => 'ant_estoque_geral_assigned_user',
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
    'eg_lote' => 
    array (
      'required' => true,
      'name' => 'eg_lote',
      'vname' => 'LBL_EG_LOTE',
      'type' => 'varchar',
      'massupdate' => 0,
      'comments' => 'Lote',
      'help' => 'Lote do produto',
      'importable' => 'true',
      'duplicate_merge' => 'disabled',
      'duplicate_merge_dom_value' => '0',
      'audited' => true,
      'reportable' => true,
      'len' => '255',
      'size' => '20',
    ),
    'eg_qtd' => 
    array (
      'required' => true,
      'name' => 'eg_qtd',
      'vname' => 'LBL_EG_QTD',
      'type' => 'varchar',
      'massupdate' => 0,
      'comments' => '',
      'help' => '',
      'importable' => 'true',
      'duplicate_merge' => 'disabled',
      'duplicate_merge_dom_value' => '0',
      'audited' => false,
      'reportable' => true,
      'len' => '8',
      'size' => '20',
    ),
    'ant_estoque_ant_regionais' => 
    array (
      'name' => 'ant_estoque_ant_regionais',
      'type' => 'link',
      'relationship' => 'ant_estoque_geral_ant_regionais',
      'source' => 'non-db',
      'vname' => 'LBL_ANT_ESTOQUE_GERAL_ANT_REGIONAIS_FROM_ANT_REGIONAIS_TITLE',
    ),
    'ant_estoqueregionais_name' => 
    array (
      'name' => 'ant_estoqueregionais_name',
      'type' => 'relate',
      'source' => 'non-db',
      'vname' => 'LBL_ANT_ESTOQUE_GERAL_ANT_REGIONAIS_FROM_ANT_REGIONAIS_TITLE',
      'save' => true,
      'id_name' => 'ant_estoquf27agionais_idb',
      'link' => 'ant_estoque_ant_regionais',
      'table' => 'ant_regionais',
      'module' => 'ant_regionais',
      'rname' => 'name',
    ),
    'ant_estoquf27agionais_idb' => 
    array (
      'name' => 'ant_estoquf27agionais_idb',
      'type' => 'link',
      'relationship' => 'ant_estoque_geral_ant_regionais',
      'source' => 'non-db',
      'reportable' => false,
      'side' => 'left',
      'vname' => 'LBL_ANT_ESTOQUE_GERAL_ANT_REGIONAIS_FROM_ANT_REGIONAIS_TITLE',
    ),
    'ant_estoquent_secretarias' => 
    array (
      'name' => 'ant_estoquent_secretarias',
      'type' => 'link',
      'relationship' => 'ant_estoque_geral_ant_secretarias',
      'source' => 'non-db',
      'vname' => 'LBL_ANT_ESTOQUE_GERAL_ANT_SECRETARIAS_FROM_ANT_SECRETARIAS_TITLE',
    ),
    'ant_estoquecretarias_name' => 
    array (
      'name' => 'ant_estoquecretarias_name',
      'type' => 'relate',
      'source' => 'non-db',
      'vname' => 'LBL_ANT_ESTOQUE_GERAL_ANT_SECRETARIAS_FROM_ANT_SECRETARIAS_TITLE',
      'save' => true,
      'id_name' => 'ant_estoqu5de3etarias_idb',
      'link' => 'ant_estoquent_secretarias',
      'table' => 'ant_secretarias',
      'module' => 'ant_secretarias',
      'rname' => 'name',
    ),
    'ant_estoqu5de3etarias_idb' => 
    array (
      'name' => 'ant_estoqu5de3etarias_idb',
      'type' => 'link',
      'relationship' => 'ant_estoque_geral_ant_secretarias',
      'source' => 'non-db',
      'reportable' => false,
      'side' => 'left',
      'vname' => 'LBL_ANT_ESTOQUE_GERAL_ANT_SECRETARIAS_FROM_ANT_SECRETARIAS_TITLE',
    ),
    'ant_estoqueal_ant_produto' => 
    array (
      'name' => 'ant_estoqueal_ant_produto',
      'type' => 'link',
      'relationship' => 'ant_estoque_geral_ant_produto',
      'source' => 'non-db',
      'vname' => 'LBL_ANT_ESTOQUE_GERAL_ANT_PRODUTO_FROM_ANT_PRODUTO_TITLE',
    ),
    'ant_estoquet_produto_name' => 
    array (
      'name' => 'ant_estoquet_produto_name',
      'type' => 'relate',
      'source' => 'non-db',
      'vname' => 'LBL_ANT_ESTOQUE_GERAL_ANT_PRODUTO_FROM_ANT_PRODUTO_TITLE',
      'save' => true,
      'id_name' => 'ant_estoqu70a5produto_idb',
      'link' => 'ant_estoqueal_ant_produto',
      'table' => 'ant_produto',
      'module' => 'ant_produto',
      'rname' => 'name',
    ),
    'ant_estoqu70a5produto_idb' => 
    array (
      'name' => 'ant_estoqu70a5produto_idb',
      'type' => 'link',
      'relationship' => 'ant_estoque_geral_ant_produto',
      'source' => 'non-db',
      'reportable' => false,
      'side' => 'left',
      'vname' => 'LBL_ANT_ESTOQUE_GERAL_ANT_PRODUTO_FROM_ANT_PRODUTO_TITLE',
    ),
  ),
  'relationships' => 
  array (
    'ant_estoque_geral_modified_user' => 
    array (
      'lhs_module' => 'Users',
      'lhs_table' => 'users',
      'lhs_key' => 'id',
      'rhs_module' => 'ant_estoque_geral',
      'rhs_table' => 'ant_estoque_geral',
      'rhs_key' => 'modified_user_id',
      'relationship_type' => 'one-to-many',
    ),
    'ant_estoque_geral_created_by' => 
    array (
      'lhs_module' => 'Users',
      'lhs_table' => 'users',
      'lhs_key' => 'id',
      'rhs_module' => 'ant_estoque_geral',
      'rhs_table' => 'ant_estoque_geral',
      'rhs_key' => 'created_by',
      'relationship_type' => 'one-to-many',
    ),
    'ant_estoque_geral_assigned_user' => 
    array (
      'lhs_module' => 'Users',
      'lhs_table' => 'users',
      'lhs_key' => 'id',
      'rhs_module' => 'ant_estoque_geral',
      'rhs_table' => 'ant_estoque_geral',
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
      'name' => 'ant_estoque_geralpk',
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
