<?php
// created: 2015-03-05 11:07:45
$GLOBALS["dictionary"]["ant_secretarias"] = array (
  'table' => 'ant_secretarias',
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
      'relationship' => 'ant_secretarias_created_by',
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
      'relationship' => 'ant_secretarias_modified_user',
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
      'relationship' => 'ant_secretarias_assigned_user',
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
    'sec_nome_fantasia' => 
    array (
      'required' => false,
      'name' => 'sec_nome_fantasia',
      'vname' => 'LBL_SEC_NOME_FANTASIA',
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
    'sec_cidade' => 
    array (
      'required' => false,
      'name' => 'sec_cidade',
      'vname' => 'LBL_SEC_CIDADE',
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
    'sec_cep' => 
    array (
      'required' => false,
      'name' => 'sec_cep',
      'vname' => 'LBL_SEC_CEP',
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
    'sec_bairro' => 
    array (
      'required' => false,
      'name' => 'sec_bairro',
      'vname' => 'LBL_SEC_BAIRRO',
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
    'sec_email' => 
    array (
      'required' => false,
      'name' => 'sec_email',
      'vname' => 'LBL_SEC_EMAIL',
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
    'sec_telefone' => 
    array (
      'required' => false,
      'name' => 'sec_telefone',
      'vname' => 'LBL_SEC_TELEFONE',
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
    'sec_estado' => 
    array (
      'required' => false,
      'name' => 'sec_estado',
      'vname' => 'LBL_SEC_ESTADO',
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
    'sec_tp_logradouro' => 
    array (
      'required' => false,
      'name' => 'sec_tp_logradouro',
      'vname' => 'LBL_SEC_TP_LOGRADOURO',
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
    'sec_logradouro' => 
    array (
      'required' => false,
      'name' => 'sec_logradouro',
      'vname' => 'LBL_SEC_LOGRADOURO',
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
    'sec_numero' => 
    array (
      'required' => false,
      'name' => 'sec_numero',
      'vname' => 'LBL_SEC_NUMERO',
      'type' => 'int',
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
      'enable_range_search' => false,
      'disable_num_format' => '',
    ),
    'sec_complemento' => 
    array (
      'required' => false,
      'name' => 'sec_complemento',
      'vname' => 'LBL_SEC_COMPLEMENTO',
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
    'sec_cnpj' => 
    array (
      'required' => false,
      'name' => 'sec_cnpj',
      'vname' => 'LBL_SEC_CNPJ',
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
    'sec_ie' => 
    array (
      'required' => false,
      'name' => 'sec_ie',
      'vname' => 'LBL_SEC_IE',
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
    'sec_cnae' => 
    array (
      'required' => false,
      'name' => 'sec_cnae',
      'vname' => 'LBL_SEC_CNAE',
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
    'sec_razao_social' => 
    array (
      'required' => false,
      'name' => 'sec_razao_social',
      'vname' => 'LBL_SEC_RAZAO_SOCIAL',
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
    'sec_cord_est_nome' => 
    array (
      'required' => false,
      'name' => 'sec_cord_est_nome',
      'vname' => 'LBL_SEC_CORD_EST_NOME',
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
    'sec_cord_est_email' => 
    array (
      'required' => false,
      'name' => 'sec_cord_est_email',
      'vname' => 'LBL_SEC_CORD_EST_EMAIL',
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
    'sec_cord_est_tel' => 
    array (
      'required' => false,
      'name' => 'sec_cord_est_tel',
      'vname' => 'LBL_SEC_CORD_EST_TEL',
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
    'sec_contato' => 
    array (
      'required' => false,
      'name' => 'sec_contato',
      'vname' => 'LBL_SEC_CONTATO',
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
    'ant_clientent_secretarias' => 
    array (
      'name' => 'ant_clientent_secretarias',
      'type' => 'link',
      'relationship' => 'ant_cliente_ant_secretarias',
      'source' => 'non-db',
      'vname' => 'LBL_ANT_CLIENTE_ANT_SECRETARIAS_FROM_ANT_CLIENTE_TITLE',
    ),
    'ant_clientecretarias_name' => 
    array (
      'name' => 'ant_clientecretarias_name',
      'type' => 'relate',
      'source' => 'non-db',
      'vname' => 'LBL_ANT_CLIENTE_ANT_SECRETARIAS_FROM_ANT_CLIENTE_TITLE',
      'save' => true,
      'id_name' => 'ant_client895acliente_ida',
      'link' => 'ant_clientent_secretarias',
      'table' => 'ant_cliente',
      'module' => 'ant_cliente',
      'rname' => 'name',
    ),
    'ant_client895acliente_ida' => 
    array (
      'name' => 'ant_client895acliente_ida',
      'type' => 'link',
      'relationship' => 'ant_cliente_ant_secretarias',
      'source' => 'non-db',
      'reportable' => false,
      'side' => 'left',
      'vname' => 'LBL_ANT_CLIENTE_ANT_SECRETARIAS_FROM_ANT_CLIENTE_TITLE',
    ),
    'ant_secretarias_contacts' => 
    array (
      'name' => 'ant_secretarias_contacts',
      'type' => 'link',
      'relationship' => 'ant_secretarias_contacts',
      'source' => 'non-db',
      'vname' => 'LBL_ANT_SECRETARIAS_CONTACTS_FROM_CONTACTS_TITLE',
    ),
    'ant_pedido__secretarias_1' => 
    array (
      'name' => 'ant_pedido__secretarias_1',
      'type' => 'link',
      'relationship' => 'ant_pedido_ant_secretarias_1',
      'source' => 'non-db',
      'vname' => 'LBL_ANT_PEDIDO_ANT_SECRETARIAS_1_FROM_ANT_PEDIDO_TITLE',
    ),
    'ant_pedido_etarias_1_name' => 
    array (
      'name' => 'ant_pedido_etarias_1_name',
      'type' => 'relate',
      'source' => 'non-db',
      'vname' => 'LBL_ANT_PEDIDO_ANT_SECRETARIAS_1_FROM_ANT_PEDIDO_TITLE',
      'save' => true,
      'id_name' => 'ant_pedidof689_pedido_ida',
      'link' => 'ant_pedido__secretarias_1',
      'table' => 'ant_pedido',
      'module' => 'ant_pedido',
      'rname' => 'name',
    ),
    'ant_pedidof689_pedido_ida' => 
    array (
      'name' => 'ant_pedidof689_pedido_ida',
      'type' => 'link',
      'relationship' => 'ant_pedido_ant_secretarias_1',
      'source' => 'non-db',
      'reportable' => false,
      'side' => 'left',
      'vname' => 'LBL_ANT_PEDIDO_ANT_SECRETARIAS_1_FROM_ANT_PEDIDO_TITLE',
    ),
    'ant_pedido_nt_secretarias' => 
    array (
      'name' => 'ant_pedido_nt_secretarias',
      'type' => 'link',
      'relationship' => 'ant_pedido_ant_secretarias',
      'source' => 'non-db',
      'vname' => 'LBL_ANT_PEDIDO_ANT_SECRETARIAS_FROM_ANT_PEDIDO_TITLE',
    ),
    'ant_pedido_cretarias_name' => 
    array (
      'name' => 'ant_pedido_cretarias_name',
      'type' => 'relate',
      'source' => 'non-db',
      'vname' => 'LBL_ANT_PEDIDO_ANT_SECRETARIAS_FROM_ANT_PEDIDO_TITLE',
      'save' => true,
      'id_name' => 'ant_pedido7367_pedido_ida',
      'link' => 'ant_pedido_nt_secretarias',
      'table' => 'ant_pedido',
      'module' => 'ant_pedido',
      'rname' => 'name',
    ),
    'ant_pedido7367_pedido_ida' => 
    array (
      'name' => 'ant_pedido7367_pedido_ida',
      'type' => 'link',
      'relationship' => 'ant_pedido_ant_secretarias',
      'source' => 'non-db',
      'reportable' => false,
      'side' => 'left',
      'vname' => 'LBL_ANT_PEDIDO_ANT_SECRETARIAS_FROM_ANT_PEDIDO_TITLE',
    ),
    'ant_secreta_ant_regionais' => 
    array (
      'name' => 'ant_secreta_ant_regionais',
      'type' => 'link',
      'relationship' => 'ant_secretarias_ant_regionais',
      'source' => 'non-db',
      'vname' => 'LBL_ANT_SECRETARIAS_ANT_REGIONAIS_FROM_ANT_REGIONAIS_TITLE',
    ),
    'ant_secretaregionais_name' => 
    array (
      'name' => 'ant_secretaregionais_name',
      'type' => 'relate',
      'source' => 'non-db',
      'vname' => 'LBL_ANT_SECRETARIAS_ANT_REGIONAIS_FROM_ANT_REGIONAIS_TITLE',
      'save' => true,
      'id_name' => 'ant_secretdacfgionais_ida',
      'link' => 'ant_secreta_ant_regionais',
      'table' => 'ant_regionais',
      'module' => 'ant_regionais',
      'rname' => 'name',
    ),
    'ant_secretdacfgionais_ida' => 
    array (
      'name' => 'ant_secretdacfgionais_ida',
      'type' => 'link',
      'relationship' => 'ant_secretarias_ant_regionais',
      'source' => 'non-db',
      'reportable' => false,
      'side' => 'right',
      'vname' => 'LBL_ANT_SECRETARIAS_ANT_REGIONAIS_FROM_ANT_SECRETARIAS_TITLE',
    ),
    'ant_estoquent_secretarias' => 
    array (
      'name' => 'ant_estoquent_secretarias',
      'type' => 'link',
      'relationship' => 'ant_estoque_geral_ant_secretarias',
      'source' => 'non-db',
      'vname' => 'LBL_ANT_ESTOQUE_GERAL_ANT_SECRETARIAS_FROM_ANT_ESTOQUE_GERAL_TITLE',
    ),
    'ant_estoquecretarias_name' => 
    array (
      'name' => 'ant_estoquecretarias_name',
      'type' => 'relate',
      'source' => 'non-db',
      'vname' => 'LBL_ANT_ESTOQUE_GERAL_ANT_SECRETARIAS_FROM_ANT_ESTOQUE_GERAL_TITLE',
      'save' => true,
      'id_name' => 'ant_estoqu540ce_geral_ida',
      'link' => 'ant_estoquent_secretarias',
      'table' => 'ant_estoque_geral',
      'module' => 'ant_estoque_geral',
      'rname' => 'name',
    ),
    'ant_estoqu540ce_geral_ida' => 
    array (
      'name' => 'ant_estoqu540ce_geral_ida',
      'type' => 'link',
      'relationship' => 'ant_estoque_geral_ant_secretarias',
      'source' => 'non-db',
      'reportable' => false,
      'side' => 'left',
      'vname' => 'LBL_ANT_ESTOQUE_GERAL_ANT_SECRETARIAS_FROM_ANT_ESTOQUE_GERAL_TITLE',
    ),
    'ant_inutilint_secretarias' => 
    array (
      'name' => 'ant_inutilint_secretarias',
      'type' => 'link',
      'relationship' => 'ant_inutilizado_ant_secretarias',
      'source' => 'non-db',
      'vname' => 'LBL_ANT_INUTILIZADO_ANT_SECRETARIAS_FROM_ANT_INUTILIZADO_TITLE',
    ),
    'ant_inutilicretarias_name' => 
    array (
      'name' => 'ant_inutilicretarias_name',
      'type' => 'relate',
      'source' => 'non-db',
      'vname' => 'LBL_ANT_INUTILIZADO_ANT_SECRETARIAS_FROM_ANT_INUTILIZADO_TITLE',
      'save' => true,
      'id_name' => 'ant_inutil6267ilizado_ida',
      'link' => 'ant_inutilint_secretarias',
      'table' => 'ant_inutilizado',
      'module' => 'ant_inutilizado',
      'rname' => 'name',
    ),
    'ant_inutil6267ilizado_ida' => 
    array (
      'name' => 'ant_inutil6267ilizado_ida',
      'type' => 'link',
      'relationship' => 'ant_inutilizado_ant_secretarias',
      'source' => 'non-db',
      'reportable' => false,
      'side' => 'left',
      'vname' => 'LBL_ANT_INUTILIZADO_ANT_SECRETARIAS_FROM_ANT_INUTILIZADO_TITLE',
    ),
  ),
  'relationships' => 
  array (
    'ant_secretarias_modified_user' => 
    array (
      'lhs_module' => 'Users',
      'lhs_table' => 'users',
      'lhs_key' => 'id',
      'rhs_module' => 'ant_secretarias',
      'rhs_table' => 'ant_secretarias',
      'rhs_key' => 'modified_user_id',
      'relationship_type' => 'one-to-many',
    ),
    'ant_secretarias_created_by' => 
    array (
      'lhs_module' => 'Users',
      'lhs_table' => 'users',
      'lhs_key' => 'id',
      'rhs_module' => 'ant_secretarias',
      'rhs_table' => 'ant_secretarias',
      'rhs_key' => 'created_by',
      'relationship_type' => 'one-to-many',
    ),
    'ant_secretarias_assigned_user' => 
    array (
      'lhs_module' => 'Users',
      'lhs_table' => 'users',
      'lhs_key' => 'id',
      'rhs_module' => 'ant_secretarias',
      'rhs_table' => 'ant_secretarias',
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
      'name' => 'ant_secretariaspk',
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
