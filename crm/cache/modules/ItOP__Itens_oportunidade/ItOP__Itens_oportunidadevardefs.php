<?php
// created: 2015-03-02 13:09:58
$GLOBALS["dictionary"]["ItOP__Itens_oportunidade"] = array (
  'table' => 'itop__itens_oportunidade',
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
      'relationship' => 'itop__itens_oportunidade_created_by',
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
      'relationship' => 'itop__itens_oportunidade_modified_user',
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
      'relationship' => 'itop__itens_oportunidade_assigned_user',
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
    'valor' => 
    array (
      'required' => false,
      'name' => 'valor',
      'vname' => 'LBL_VALOR',
      'type' => 'varchar',
      'massupdate' => 0,
      'comments' => '',
      'help' => '',
      'importable' => 'true',
      'duplicate_merge' => 'disabled',
      'duplicate_merge_dom_value' => '0',
      'audited' => true,
      'reportable' => true,
      'len' => '255',
      'size' => '20',
    ),
    'itop__itens_opportunities' => 
    array (
      'name' => 'itop__itens_opportunities',
      'type' => 'link',
      'relationship' => 'itop__itens_oportunidade_opportunities',
      'source' => 'non-db',
      'vname' => 'LBL_ITOP__ITENS_OPORTUNIDADE_OPPORTUNITIES_FROM_OPPORTUNITIES_TITLE',
    ),
    'itop__itensrtunities_name' => 
    array (
      'name' => 'itop__itensrtunities_name',
      'type' => 'relate',
      'source' => 'non-db',
      'vname' => 'LBL_ITOP__ITENS_OPORTUNIDADE_OPPORTUNITIES_FROM_OPPORTUNITIES_TITLE',
      'save' => true,
      'id_name' => 'itop__iten6192unities_ida',
      'link' => 'itop__itens_opportunities',
      'table' => 'opportunities',
      'module' => 'Opportunities',
      'rname' => 'name',
    ),
    'itop__iten6192unities_ida' => 
    array (
      'name' => 'itop__iten6192unities_ida',
      'type' => 'link',
      'relationship' => 'itop__itens_oportunidade_opportunities',
      'source' => 'non-db',
      'reportable' => false,
      'side' => 'right',
      'vname' => 'LBL_ITOP__ITENS_OPORTUNIDADE_OPPORTUNITIES_FROM_ITOP__ITENS_OPORTUNIDADE_TITLE',
    ),
    'itop__itenscad_s_solucoes' => 
    array (
      'name' => 'itop__itenscad_s_solucoes',
      'type' => 'link',
      'relationship' => 'itop__itens_oportunidade_cad_s_solucoes',
      'source' => 'non-db',
      'vname' => 'LBL_ITOP__ITENS_OPORTUNIDADE_CAD_S_SOLUCOES_FROM_CAD_S_SOLUCOES_TITLE',
    ),
    'itop__itens_solucoes_name' => 
    array (
      'name' => 'itop__itens_solucoes_name',
      'type' => 'relate',
      'source' => 'non-db',
      'vname' => 'LBL_ITOP__ITENS_OPORTUNIDADE_CAD_S_SOLUCOES_FROM_CAD_S_SOLUCOES_TITLE',
      'save' => true,
      'id_name' => 'itop__iten1d39olucoes_ida',
      'link' => 'itop__itenscad_s_solucoes',
      'table' => 'cad_s_solucoes',
      'module' => 'CAD_S_Solucoes',
      'rname' => 'name',
    ),
    'itop__iten1d39olucoes_ida' => 
    array (
      'name' => 'itop__iten1d39olucoes_ida',
      'type' => 'link',
      'relationship' => 'itop__itens_oportunidade_cad_s_solucoes',
      'source' => 'non-db',
      'reportable' => false,
      'side' => 'right',
      'vname' => 'LBL_ITOP__ITENS_OPORTUNIDADE_CAD_S_SOLUCOES_FROM_ITOP__ITENS_OPORTUNIDADE_TITLE',
    ),
    'valor_c' => 
    array (
      'required' => true,
      'source' => 'custom_fields',
      'name' => 'valor_c',
      'vname' => 'LBL_VALOR',
      'type' => 'varchar',
      'massupdate' => '0',
      'default' => NULL,
      'comments' => '',
      'help' => '',
      'importable' => 'true',
      'duplicate_merge' => 'disabled',
      'duplicate_merge_dom_value' => '0',
      'audited' => true,
      'reportable' => true,
      'len' => '255',
      'size' => '20',
      'id' => 'ItOP__Itens_oportunidadevalor_c',
      'custom_module' => 'ItOP__Itens_oportunidade',
    ),
  ),
  'relationships' => 
  array (
    'itop__itens_oportunidade_modified_user' => 
    array (
      'lhs_module' => 'Users',
      'lhs_table' => 'users',
      'lhs_key' => 'id',
      'rhs_module' => 'ItOP__Itens_oportunidade',
      'rhs_table' => 'itop__itens_oportunidade',
      'rhs_key' => 'modified_user_id',
      'relationship_type' => 'one-to-many',
    ),
    'itop__itens_oportunidade_created_by' => 
    array (
      'lhs_module' => 'Users',
      'lhs_table' => 'users',
      'lhs_key' => 'id',
      'rhs_module' => 'ItOP__Itens_oportunidade',
      'rhs_table' => 'itop__itens_oportunidade',
      'rhs_key' => 'created_by',
      'relationship_type' => 'one-to-many',
    ),
    'itop__itens_oportunidade_assigned_user' => 
    array (
      'lhs_module' => 'Users',
      'lhs_table' => 'users',
      'lhs_key' => 'id',
      'rhs_module' => 'ItOP__Itens_oportunidade',
      'rhs_table' => 'itop__itens_oportunidade',
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
      'name' => 'itop__itens_oportunidadepk',
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
  'custom_fields' => true,
);
?>
