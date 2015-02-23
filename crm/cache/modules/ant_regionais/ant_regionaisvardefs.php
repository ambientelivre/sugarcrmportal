<?php
// created: 2015-02-23 19:21:36
$GLOBALS["dictionary"]["ant_regionais"] = array (
  'table' => 'ant_regionais',
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
      'relationship' => 'ant_regionais_created_by',
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
      'relationship' => 'ant_regionais_modified_user',
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
      'relationship' => 'ant_regionais_assigned_user',
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
    'reg_razao_social' => 
    array (
      'required' => true,
      'name' => 'reg_razao_social',
      'vname' => 'LBL_REG_RAZAO_SOCIAL ',
      'type' => 'varchar',
      'massupdate' => 0,
      'comments' => '',
      'help' => 'Razão Social',
      'importable' => 'true',
      'duplicate_merge' => 'enabled',
      'duplicate_merge_dom_value' => '1',
      'audited' => false,
      'reportable' => true,
      'len' => '255',
      'size' => '20',
    ),
    'reg_nm_fantasia' => 
    array (
      'required' => true,
      'name' => 'reg_nm_fantasia',
      'vname' => 'LBL_REG_NM_FANTASIA',
      'type' => 'varchar',
      'massupdate' => 0,
      'comments' => '',
      'help' => 'Nome Fantadia da Regional',
      'importable' => 'true',
      'duplicate_merge' => 'disabled',
      'duplicate_merge_dom_value' => '0',
      'audited' => false,
      'reportable' => true,
      'len' => '255',
      'size' => '20',
    ),
    'reg_logradouro' => 
    array (
      'required' => true,
      'name' => 'reg_logradouro',
      'vname' => 'LBL_REG_LOGRADOURO',
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
    'reg_numero' => 
    array (
      'required' => true,
      'name' => 'reg_numero',
      'vname' => 'LBL_ REG_NUMERO',
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
    'reg_complemento' => 
    array (
      'required' => true,
      'name' => 'reg_complemento',
      'vname' => 'LBL_REG_COMPLEMENTO',
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
    'reg_bairro' => 
    array (
      'required' => true,
      'name' => 'reg_bairro',
      'vname' => 'LBL_REG_BAIRRO',
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
    'reg_inscricao_estadual' => 
    array (
      'required' => true,
      'name' => 'reg_inscricao_estadual',
      'vname' => 'LBL_REG_INSCRICAO_ESTADUAL',
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
    'reg_cnae' => 
    array (
      'required' => true,
      'name' => 'reg_cnae',
      'vname' => 'LBL_REG_CNAE',
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
    'reg_contato' => 
    array (
      'required' => true,
      'name' => 'reg_contato',
      'vname' => 'LBL_REG_CONTATO',
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
    'reg_email' => 
    array (
      'required' => false,
      'name' => 'reg_email',
      'vname' => 'LBL_REG_EMAIL',
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
    'reg_orgao_vinculado_pncebt' => 
    array (
      'required' => false,
      'name' => 'reg_orgao_vinculado_pncebt',
      'vname' => 'LBL_REG_ORGAO_VINCULADO_PNCEBT',
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
    'reg_cep' => 
    array (
      'required' => true,
      'name' => 'reg_cep',
      'vname' => 'LBL_REG_CEP',
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
    'reg_cidade' => 
    array (
      'required' => true,
      'name' => 'reg_cidade',
      'vname' => 'LBL_REG_CIDADE',
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
    'reg_cnpj' => 
    array (
      'required' => true,
      'name' => 'reg_cnpj',
      'vname' => 'LBL_REG_CNPJ',
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
    'reg_estado' => 
    array (
      'required' => false,
      'name' => 'reg_estado',
      'vname' => 'LBL_REG_ESTADO ',
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
    'reg_tp_logradouro' => 
    array (
      'required' => false,
      'name' => 'reg_tp_logradouro',
      'vname' => 'LBL_REG_TP_LOGRADOURO ',
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
    'reg_telefone' => 
    array (
      'required' => false,
      'name' => 'reg_telefone',
      'vname' => 'LBL_REG_TELEFONE',
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
      'vname' => 'LBL_ANT_CLIENTE_ANT_REGIONAIS_FROM_ANT_CLIENTE_TITLE',
    ),
    'ant_clienteregionais_name' => 
    array (
      'name' => 'ant_clienteregionais_name',
      'type' => 'relate',
      'source' => 'non-db',
      'vname' => 'LBL_ANT_CLIENTE_ANT_REGIONAIS_FROM_ANT_CLIENTE_TITLE',
      'save' => true,
      'id_name' => 'ant_client71d2cliente_ida',
      'link' => 'ant_cliente_ant_regionais',
      'table' => 'ant_cliente',
      'module' => 'ant_cliente',
      'rname' => 'name',
    ),
    'ant_client71d2cliente_ida' => 
    array (
      'name' => 'ant_client71d2cliente_ida',
      'type' => 'link',
      'relationship' => 'ant_cliente_ant_regionais',
      'source' => 'non-db',
      'reportable' => false,
      'side' => 'left',
      'vname' => 'LBL_ANT_CLIENTE_ANT_REGIONAIS_FROM_ANT_CLIENTE_TITLE',
    ),
    'ant_pedido_ant_regionais' => 
    array (
      'name' => 'ant_pedido_ant_regionais',
      'type' => 'link',
      'relationship' => 'ant_pedido_ant_regionais',
      'source' => 'non-db',
      'vname' => 'LBL_ANT_PEDIDO_ANT_REGIONAIS_FROM_ANT_PEDIDO_TITLE',
    ),
    'ant_pedido_regionais_name' => 
    array (
      'name' => 'ant_pedido_regionais_name',
      'type' => 'relate',
      'source' => 'non-db',
      'vname' => 'LBL_ANT_PEDIDO_ANT_REGIONAIS_FROM_ANT_PEDIDO_TITLE',
      'save' => true,
      'id_name' => 'ant_pedido17ef_pedido_ida',
      'link' => 'ant_pedido_ant_regionais',
      'table' => 'ant_pedido',
      'module' => 'ant_pedido',
      'rname' => 'name',
    ),
    'ant_pedido17ef_pedido_ida' => 
    array (
      'name' => 'ant_pedido17ef_pedido_ida',
      'type' => 'link',
      'relationship' => 'ant_pedido_ant_regionais',
      'source' => 'non-db',
      'reportable' => false,
      'side' => 'right',
      'vname' => 'LBL_ANT_PEDIDO_ANT_REGIONAIS_FROM_ANT_REGIONAIS_TITLE',
    ),
    'ant_pedido_nt_regionais_1' => 
    array (
      'name' => 'ant_pedido_nt_regionais_1',
      'type' => 'link',
      'relationship' => 'ant_pedido_ant_regionais_1',
      'source' => 'non-db',
      'vname' => 'LBL_ANT_PEDIDO_ANT_REGIONAIS_1_FROM_ANT_PEDIDO_TITLE',
    ),
    'ant_pedido_gionais_1_name' => 
    array (
      'name' => 'ant_pedido_gionais_1_name',
      'type' => 'relate',
      'source' => 'non-db',
      'vname' => 'LBL_ANT_PEDIDO_ANT_REGIONAIS_1_FROM_ANT_PEDIDO_TITLE',
      'save' => true,
      'id_name' => 'ant_pedido4dba_pedido_ida',
      'link' => 'ant_pedido_nt_regionais_1',
      'table' => 'ant_pedido',
      'module' => 'ant_pedido',
      'rname' => 'name',
    ),
    'ant_pedido4dba_pedido_ida' => 
    array (
      'name' => 'ant_pedido4dba_pedido_ida',
      'type' => 'link',
      'relationship' => 'ant_pedido_ant_regionais_1',
      'source' => 'non-db',
      'reportable' => false,
      'side' => 'right',
      'vname' => 'LBL_ANT_PEDIDO_ANT_REGIONAIS_1_FROM_ANT_REGIONAIS_TITLE',
    ),
    'ant_secreta_ant_regionais' => 
    array (
      'name' => 'ant_secreta_ant_regionais',
      'type' => 'link',
      'relationship' => 'ant_secretarias_ant_regionais',
      'source' => 'non-db',
      'side' => 'right',
      'vname' => 'LBL_ANT_SECRETARIAS_ANT_REGIONAIS_FROM_ANT_SECRETARIAS_TITLE',
    ),
    'ant_estoque_ant_regionais' => 
    array (
      'name' => 'ant_estoque_ant_regionais',
      'type' => 'link',
      'relationship' => 'ant_estoque_geral_ant_regionais',
      'source' => 'non-db',
      'vname' => 'LBL_ANT_ESTOQUE_GERAL_ANT_REGIONAIS_FROM_ANT_ESTOQUE_GERAL_TITLE',
    ),
    'ant_estoqueregionais_name' => 
    array (
      'name' => 'ant_estoqueregionais_name',
      'type' => 'relate',
      'source' => 'non-db',
      'vname' => 'LBL_ANT_ESTOQUE_GERAL_ANT_REGIONAIS_FROM_ANT_ESTOQUE_GERAL_TITLE',
      'save' => true,
      'id_name' => 'ant_estoqu7abae_geral_ida',
      'link' => 'ant_estoque_ant_regionais',
      'table' => 'ant_estoque_geral',
      'module' => 'ant_estoque_geral',
      'rname' => 'name',
    ),
    'ant_estoqu7abae_geral_ida' => 
    array (
      'name' => 'ant_estoqu7abae_geral_ida',
      'type' => 'link',
      'relationship' => 'ant_estoque_geral_ant_regionais',
      'source' => 'non-db',
      'reportable' => false,
      'side' => 'left',
      'vname' => 'LBL_ANT_ESTOQUE_GERAL_ANT_REGIONAIS_FROM_ANT_ESTOQUE_GERAL_TITLE',
    ),
    'ant_regionais_contacts' => 
    array (
      'name' => 'ant_regionais_contacts',
      'type' => 'link',
      'relationship' => 'ant_regionais_contacts',
      'source' => 'non-db',
      'vname' => 'LBL_ANT_REGIONAIS_CONTACTS_FROM_CONTACTS_TITLE',
    ),
    'ant_inutili_ant_regionais' => 
    array (
      'name' => 'ant_inutili_ant_regionais',
      'type' => 'link',
      'relationship' => 'ant_inutilizado_ant_regionais',
      'source' => 'non-db',
      'vname' => 'LBL_ANT_INUTILIZADO_ANT_REGIONAIS_FROM_ANT_INUTILIZADO_TITLE',
    ),
    'ant_inutiliregionais_name' => 
    array (
      'name' => 'ant_inutiliregionais_name',
      'type' => 'relate',
      'source' => 'non-db',
      'vname' => 'LBL_ANT_INUTILIZADO_ANT_REGIONAIS_FROM_ANT_INUTILIZADO_TITLE',
      'save' => true,
      'id_name' => 'ant_inutil66e6ilizado_ida',
      'link' => 'ant_inutili_ant_regionais',
      'table' => 'ant_inutilizado',
      'module' => 'ant_inutilizado',
      'rname' => 'name',
    ),
    'ant_inutil66e6ilizado_ida' => 
    array (
      'name' => 'ant_inutil66e6ilizado_ida',
      'type' => 'link',
      'relationship' => 'ant_inutilizado_ant_regionais',
      'source' => 'non-db',
      'reportable' => false,
      'side' => 'left',
      'vname' => 'LBL_ANT_INUTILIZADO_ANT_REGIONAIS_FROM_ANT_INUTILIZADO_TITLE',
    ),
  ),
  'relationships' => 
  array (
    'ant_regionais_modified_user' => 
    array (
      'lhs_module' => 'Users',
      'lhs_table' => 'users',
      'lhs_key' => 'id',
      'rhs_module' => 'ant_regionais',
      'rhs_table' => 'ant_regionais',
      'rhs_key' => 'modified_user_id',
      'relationship_type' => 'one-to-many',
    ),
    'ant_regionais_created_by' => 
    array (
      'lhs_module' => 'Users',
      'lhs_table' => 'users',
      'lhs_key' => 'id',
      'rhs_module' => 'ant_regionais',
      'rhs_table' => 'ant_regionais',
      'rhs_key' => 'created_by',
      'relationship_type' => 'one-to-many',
    ),
    'ant_regionais_assigned_user' => 
    array (
      'lhs_module' => 'Users',
      'lhs_table' => 'users',
      'lhs_key' => 'id',
      'rhs_module' => 'ant_regionais',
      'rhs_table' => 'ant_regionais',
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
      'name' => 'ant_regionaispk',
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
