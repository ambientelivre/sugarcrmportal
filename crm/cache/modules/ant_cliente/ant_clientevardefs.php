<?php
// created: 2015-03-02 13:09:58
$GLOBALS["dictionary"]["ant_cliente"] = array (
  'table' => 'ant_cliente',
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
      'relationship' => 'ant_cliente_created_by',
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
      'relationship' => 'ant_cliente_modified_user',
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
      'relationship' => 'ant_cliente_assigned_user',
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
    'cli_razao_social' => 
    array (
      'required' => false,
      'name' => 'cli_razao_social',
      'vname' => 'LBL_CLI_RAZAO_SOCIAL',
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
    'cli_nm_fantasia' => 
    array (
      'required' => false,
      'name' => 'cli_nm_fantasia',
      'vname' => 'LBL_CLI_NM_FANTASIA',
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
    'cli_cep' => 
    array (
      'required' => false,
      'name' => 'cli_cep',
      'vname' => 'LBL_CLI_CEP',
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
    'cli_cidade' => 
    array (
      'required' => false,
      'name' => 'cli_cidade',
      'vname' => 'LBL_CLI_CIDADE',
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
    'cli_email' => 
    array (
      'required' => false,
      'name' => 'cli_email',
      'vname' => 'LBL_CLI_EMAIL',
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
    'cli_cnpj_cpf' => 
    array (
      'required' => false,
      'name' => 'cli_cnpj_cpf',
      'vname' => 'LBL_CLI_CNPJ_CPF',
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
    'cli_logradouro' => 
    array (
      'required' => false,
      'name' => 'cli_logradouro',
      'vname' => 'LBL_CLI_LOGRADOURO',
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
    'cli_numero' => 
    array (
      'required' => false,
      'name' => 'cli_numero',
      'vname' => 'LBL_CLI_NUMERO',
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
    'cli_bairro' => 
    array (
      'required' => false,
      'name' => 'cli_bairro',
      'vname' => 'LBL_CLI_BAIRRO',
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
    'cli_contato' => 
    array (
      'required' => false,
      'name' => 'cli_contato',
      'vname' => 'LBL_CLI_CONTATO',
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
    'cli_telefone' => 
    array (
      'required' => false,
      'name' => 'cli_telefone',
      'vname' => 'LBL_CLI_TELEFONE',
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
    'cli_estado' => 
    array (
      'required' => false,
      'name' => 'cli_estado',
      'vname' => 'LBL_CLI_ESTADO',
      'type' => 'enum',
      'massupdate' => 0,
      'default' => 'PR',
      'comments' => '',
      'help' => '',
      'importable' => 'true',
      'duplicate_merge' => 'disabled',
      'duplicate_merge_dom_value' => '0',
      'audited' => false,
      'reportable' => true,
      'len' => 100,
      'size' => '20',
      'options' => 'uf_list',
      'studio' => 'visible',
      'dependency' => false,
    ),
    'cli_tp_logradouro' => 
    array (
      'required' => false,
      'name' => 'cli_tp_logradouro',
      'vname' => 'LBL_CLI_TP_LOGRADOURO',
      'type' => 'enum',
      'massupdate' => 0,
      'default' => 'rua',
      'comments' => '',
      'help' => '',
      'importable' => 'true',
      'duplicate_merge' => 'disabled',
      'duplicate_merge_dom_value' => '0',
      'audited' => false,
      'reportable' => true,
      'len' => 100,
      'size' => '20',
      'options' => 'tp_log_list',
      'studio' => 'visible',
      'dependency' => false,
    ),
    'cli_complemento' => 
    array (
      'required' => false,
      'name' => 'cli_complemento',
      'vname' => 'LBL_CLI_COMPLEMENTO',
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
    'cli_ie' => 
    array (
      'required' => false,
      'name' => 'cli_ie',
      'vname' => 'LBL_CLI_IE',
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
    'cli_crmv' => 
    array (
      'required' => false,
      'name' => 'cli_crmv',
      'vname' => 'LBL_CLI_CRMV',
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
    'cli_pncebt' => 
    array (
      'required' => false,
      'name' => 'cli_pncebt',
      'vname' => 'LBL_CLI_PNCEBT',
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
    'ant_cliente_ant_regionais' => 
    array (
      'name' => 'ant_cliente_ant_regionais',
      'type' => 'link',
      'relationship' => 'ant_cliente_ant_regionais',
      'source' => 'non-db',
      'vname' => 'LBL_ANT_CLIENTE_ANT_REGIONAIS_FROM_ANT_REGIONAIS_TITLE',
    ),
    'ant_clienteregionais_name' => 
    array (
      'name' => 'ant_clienteregionais_name',
      'type' => 'relate',
      'source' => 'non-db',
      'vname' => 'LBL_ANT_CLIENTE_ANT_REGIONAIS_FROM_ANT_REGIONAIS_TITLE',
      'save' => true,
      'id_name' => 'ant_clientcab3gionais_idb',
      'link' => 'ant_cliente_ant_regionais',
      'table' => 'ant_regionais',
      'module' => 'ant_regionais',
      'rname' => 'name',
    ),
    'ant_clientcab3gionais_idb' => 
    array (
      'name' => 'ant_clientcab3gionais_idb',
      'type' => 'link',
      'relationship' => 'ant_cliente_ant_regionais',
      'source' => 'non-db',
      'reportable' => false,
      'side' => 'left',
      'vname' => 'LBL_ANT_CLIENTE_ANT_REGIONAIS_FROM_ANT_REGIONAIS_TITLE',
    ),
    'ant_clientent_secretarias' => 
    array (
      'name' => 'ant_clientent_secretarias',
      'type' => 'link',
      'relationship' => 'ant_cliente_ant_secretarias',
      'source' => 'non-db',
      'vname' => 'LBL_ANT_CLIENTE_ANT_SECRETARIAS_FROM_ANT_SECRETARIAS_TITLE',
    ),
    'ant_clientecretarias_name' => 
    array (
      'name' => 'ant_clientecretarias_name',
      'type' => 'relate',
      'source' => 'non-db',
      'vname' => 'LBL_ANT_CLIENTE_ANT_SECRETARIAS_FROM_ANT_SECRETARIAS_TITLE',
      'save' => true,
      'id_name' => 'ant_client3388etarias_idb',
      'link' => 'ant_clientent_secretarias',
      'table' => 'ant_secretarias',
      'module' => 'ant_secretarias',
      'rname' => 'name',
    ),
    'ant_client3388etarias_idb' => 
    array (
      'name' => 'ant_client3388etarias_idb',
      'type' => 'link',
      'relationship' => 'ant_cliente_ant_secretarias',
      'source' => 'non-db',
      'reportable' => false,
      'side' => 'left',
      'vname' => 'LBL_ANT_CLIENTE_ANT_SECRETARIAS_FROM_ANT_SECRETARIAS_TITLE',
    ),
  ),
  'relationships' => 
  array (
    'ant_cliente_modified_user' => 
    array (
      'lhs_module' => 'Users',
      'lhs_table' => 'users',
      'lhs_key' => 'id',
      'rhs_module' => 'ant_cliente',
      'rhs_table' => 'ant_cliente',
      'rhs_key' => 'modified_user_id',
      'relationship_type' => 'one-to-many',
    ),
    'ant_cliente_created_by' => 
    array (
      'lhs_module' => 'Users',
      'lhs_table' => 'users',
      'lhs_key' => 'id',
      'rhs_module' => 'ant_cliente',
      'rhs_table' => 'ant_cliente',
      'rhs_key' => 'created_by',
      'relationship_type' => 'one-to-many',
    ),
    'ant_cliente_assigned_user' => 
    array (
      'lhs_module' => 'Users',
      'lhs_table' => 'users',
      'lhs_key' => 'id',
      'rhs_module' => 'ant_cliente',
      'rhs_table' => 'ant_cliente',
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
      'name' => 'ant_clientepk',
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
