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


    $manifest = array (
         'acceptable_sugar_versions' => 
          array (
            
          ),
          'acceptable_sugar_flavors' =>
          array(
            'CE', 'PRO','ENT'
          ),
          'readme'=>'',
          'key'=>'t3cpa',
          'author' => 'Antigenos TECPAR',
          'description' => 'Módulo responsável por manter Antigenos TECPAR.',
          'icon' => '',
          'is_uninstallable' => true,
          'name' => 'antigenos_tecpar',
          'published_date' => '2014-08-26 11:48:41',
          'type' => 'module',
          'version' => '1409053721',
          'remove_tables' => 'prompt',
          );
$installdefs = array (
  'id' => 'antigenos_tecpar',
  'beans' => 
  array (
    0 => 
    array (
      'module' => 't3cpa_estoque_gereal',
      'class' => 't3cpa_estoque_gereal',
      'path' => 'modules/t3cpa_estoque_gereal/t3cpa_estoque_gereal.php',
      'tab' => true,
    ),
    1 => 
    array (
      'module' => 't3cpa_cliente_veterinario',
      'class' => 't3cpa_cliente_veterinario',
      'path' => 'modules/t3cpa_cliente_veterinario/t3cpa_cliente_veterinario.php',
      'tab' => true,
    ),
    2 => 
    array (
      'module' => 't3cpa_estoque_regional',
      'class' => 't3cpa_estoque_regional',
      'path' => 'modules/t3cpa_estoque_regional/t3cpa_estoque_regional.php',
      'tab' => true,
    ),
    3 => 
    array (
      'module' => 't3cpa_requisicao_produto',
      'class' => 't3cpa_requisicao_produto',
      'path' => 'modules/t3cpa_requisicao_produto/t3cpa_requisicao_produto.php',
      'tab' => true,
    ),
    4 => 
    array (
      'module' => 't3cpa_log_estoque_antigenos',
      'class' => 't3cpa_log_estoque_antigenos',
      'path' => 'modules/t3cpa_log_estoque_antigenos/t3cpa_log_estoque_antigenos.php',
      'tab' => true,
    ),
    5 => 
    array (
      'module' => 't3cpa_pedido_regional',
      'class' => 't3cpa_pedido_regional',
      'path' => 'modules/t3cpa_pedido_regional/t3cpa_pedido_regional.php',
      'tab' => true,
    ),
    6 => 
    array (
      'module' => 't3cpa_regionais',
      'class' => 't3cpa_regionais',
      'path' => 'modules/t3cpa_regionais/t3cpa_regionais.php',
      'tab' => true,
    ),
    7 => 
    array (
      'module' => 't3cpa_pedido_veterinario_regional',
      'class' => 't3cpa_pedido_veterinario_regional',
      'path' => 'modules/t3cpa_pedido_veterinario_regional/t3cpa_pedido_veterinario_regional.php',
      'tab' => true,
    ),
    8 => 
    array (
      'module' => 't3cpa_venda_antigenos_tecpar',
      'class' => 't3cpa_venda_antigenos_tecpar',
      'path' => 'modules/t3cpa_venda_antigenos_tecpar/t3cpa_venda_antigenos_tecpar.php',
      'tab' => true,
    ),
  ),
  'layoutdefs' => 
  array (
  ),
  'relationships' => 
  array (
    0 => 
    array (
      'meta_data' => '<basepath>/SugarModules/relationships/relationships/t3cpa_estoque_gereal_t3cpa_secretariasMetaData.php',
    ),
    1 => 
    array (
      'meta_data' => '<basepath>/SugarModules/relationships/relationships/t3cpa_estoque_gereal_t3cpa_regionaisMetaData.php',
    ),
  ),
  'image_dir' => '<basepath>/icons',
  'copy' => 
  array (
    0 => 
    array (
      'from' => '<basepath>/SugarModules/modules/t3cpa_estoque_gereal',
      'to' => 'modules/t3cpa_estoque_gereal',
    ),
    1 => 
    array (
      'from' => '<basepath>/SugarModules/modules/t3cpa_cliente_veterinario',
      'to' => 'modules/t3cpa_cliente_veterinario',
    ),
    2 => 
    array (
      'from' => '<basepath>/SugarModules/modules/t3cpa_estoque_regional',
      'to' => 'modules/t3cpa_estoque_regional',
    ),
    3 => 
    array (
      'from' => '<basepath>/SugarModules/modules/t3cpa_requisicao_produto',
      'to' => 'modules/t3cpa_requisicao_produto',
    ),
    4 => 
    array (
      'from' => '<basepath>/SugarModules/modules/t3cpa_log_estoque_antigenos',
      'to' => 'modules/t3cpa_log_estoque_antigenos',
    ),
    5 => 
    array (
      'from' => '<basepath>/SugarModules/modules/t3cpa_pedido_regional',
      'to' => 'modules/t3cpa_pedido_regional',
    ),
    6 => 
    array (
      'from' => '<basepath>/SugarModules/modules/t3cpa_regionais',
      'to' => 'modules/t3cpa_regionais',
    ),
    7 => 
    array (
      'from' => '<basepath>/SugarModules/modules/t3cpa_pedido_veterinario_regional',
      'to' => 'modules/t3cpa_pedido_veterinario_regional',
    ),
    8 => 
    array (
      'from' => '<basepath>/SugarModules/modules/t3cpa_venda_antigenos_tecpar',
      'to' => 'modules/t3cpa_venda_antigenos_tecpar',
    ),
  ),
  'language' => 
  array (
    0 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/language/t3cpa_secretarias.php',
      'to_module' => 't3cpa_secretarias',
      'language' => 'en_us',
    ),
    1 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/language/t3cpa_secretarias.php',
      'to_module' => 't3cpa_secretarias',
      'language' => 'pt_BR',
    ),
    2 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/language/t3cpa_estoque_gereal.php',
      'to_module' => 't3cpa_estoque_gereal',
      'language' => 'en_us',
    ),
    3 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/language/t3cpa_estoque_gereal.php',
      'to_module' => 't3cpa_estoque_gereal',
      'language' => 'pt_BR',
    ),
    4 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/language/t3cpa_regionais.php',
      'to_module' => 't3cpa_regionais',
      'language' => 'en_us',
    ),
    5 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/language/t3cpa_regionais.php',
      'to_module' => 't3cpa_regionais',
      'language' => 'pt_BR',
    ),
    6 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/language/t3cpa_estoque_gereal.php',
      'to_module' => 't3cpa_estoque_gereal',
      'language' => 'en_us',
    ),
    7 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/language/t3cpa_estoque_gereal.php',
      'to_module' => 't3cpa_estoque_gereal',
      'language' => 'pt_BR',
    ),
    8 => 
    array (
      'from' => '<basepath>/SugarModules/language/application/en_us.lang.php',
      'to_module' => 'application',
      'language' => 'en_us',
    ),
    9 => 
    array (
      'from' => '<basepath>/SugarModules/language/application/pt_BR.lang.php',
      'to_module' => 'application',
      'language' => 'pt_BR',
    ),
  ),
  'vardefs' => 
  array (
    0 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/vardefs/t3cpa_estoque_gereal_t3cpa_secretarias_t3cpa_secretarias.php',
      'to_module' => 't3cpa_secretarias',
    ),
    1 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/vardefs/t3cpa_estoque_gereal_t3cpa_secretarias_t3cpa_estoque_gereal.php',
      'to_module' => 't3cpa_estoque_gereal',
    ),
    2 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/vardefs/t3cpa_estoque_gereal_t3cpa_regionais_t3cpa_regionais.php',
      'to_module' => 't3cpa_regionais',
    ),
    3 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/vardefs/t3cpa_estoque_gereal_t3cpa_regionais_t3cpa_estoque_gereal.php',
      'to_module' => 't3cpa_estoque_gereal',
    ),
  ),
  'layoutfields' => 
  array (
    0 => 
    array (
      'additional_fields' => 
      array (
        't3cpa_secretarias' => 't3cpa_estoqcretarias_name',
      ),
    ),
    1 => 
    array (
      'additional_fields' => 
      array (
      ),
    ),
  ),
);