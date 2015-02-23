<?php
/*********************************************************************************
 * SugarCRM Community Edition is a customer relationship management program developed by
 * SugarCRM, Inc. Copyright (C) 2004-2011 SugarCRM Inc.
 * 
 * This program is free software; you can redistribute it and/or modify it under
 * the terms of the GNU Affero General Public License version 3 as published by the
 * Free Software Foundation with the addition of the following permission added
 * to Section 15 as permitted in Section 7(a): FOR ANY PART OF THE COVERED WORK
 * IN WHICH THE COPYRIGHT IS OWNED BY SUGARCRM, SUGARCRM DISCLAIMS THE WARRANTY
 * OF NON INFRINGEMENT OF THIRD PARTY RIGHTS.
 * 
 * This program is distributed in the hope that it will be useful, but WITHOUT
 * ANY WARRANTY; without even the implied warranty of MERCHANTABILITY or FITNESS
 * FOR A PARTICULAR PURPOSE.  See the GNU Affero General Public License for more
 * details.
 * 
 * You should have received a copy of the GNU Affero General Public License along with
 * this program; if not, see http://www.gnu.org/licenses or write to the Free
 * Software Foundation, Inc., 51 Franklin Street, Fifth Floor, Boston, MA
 * 02110-1301 USA.
 * 
 * You can contact SugarCRM, Inc. headquarters at 10050 North Wolfe Road,
 * SW2-130, Cupertino, CA 95014, USA. or at email address contact@sugarcrm.com.
 * 
 * The interactive user interfaces in modified source and object code versions
 * of this program must display Appropriate Legal Notices, as required under
 * Section 5 of the GNU Affero General Public License version 3.
 * 
 * In accordance with Section 7(b) of the GNU Affero General Public License version 3,
 * these Appropriate Legal Notices must retain the display of the "Powered by
 * SugarCRM" logo. If the display of the logo is not reasonably feasible for
 * technical reasons, the Appropriate Legal Notices must display the words
 * "Powered by SugarCRM".
 ********************************************************************************/

$dictionary['ant_regionais'] = array(
	'table'=>'ant_regionais',
	'audited'=>true,
	'fields'=>array (
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
),
	'relationships'=>array (
),
	'optimistic_locking'=>true,
		'unified_search'=>true,
	);
if (!class_exists('VardefManager')){
        require_once('include/SugarObjects/VardefManager.php');
}
VardefManager::createVardef('ant_regionais','ant_regionais', array('basic','assignable'));