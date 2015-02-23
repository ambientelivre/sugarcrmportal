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
          'key'=>'cad_U',
          'author' => 'Rafaela Raganham',
          'description' => '',
          'icon' => '',
          'is_uninstallable' => true,
          'name' => 'Unidades',
          'published_date' => '2012-03-30 14:13:26',
          'type' => 'module',
          'version' => '1333116806',
          'remove_tables' => 'prompt',
          );
$installdefs = array (
  'id' => 'Unidades',
  'beans' => 
  array (
    0 => 
    array (
      'module' => 'cad_U_Unidades',
      'class' => 'cad_U_Unidades',
      'path' => 'modules/cad_U_Unidades/cad_U_Unidades.php',
      'tab' => true,
    ),
  ),
  'layoutdefs' => 
  array (
    0 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/layoutdefs/cad_u_unidades_cases_cad_U_Unidades.php',
      'to_module' => 'cad_U_Unidades',
    ),
  ),
  'relationships' => 
  array (
    0 => 
    array (
      'meta_data' => '<basepath>/SugarModules/relationships/relationships/cad_u_unidades_casesMetaData.php',
    ),
  ),
  'image_dir' => '<basepath>/icons',
  'copy' => 
  array (
    0 => 
    array (
      'from' => '<basepath>/SugarModules/modules/cad_U_Unidades',
      'to' => 'modules/cad_U_Unidades',
    ),
  ),
  'language' => 
  array (
    0 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/language/Cases.php',
      'to_module' => 'Cases',
      'language' => 'en_us',
    ),
    1 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/language/Cases.php',
      'to_module' => 'Cases',
      'language' => 'pt_BR',
    ),
    2 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/language/cad_U_Unidades.php',
      'to_module' => 'cad_U_Unidades',
      'language' => 'en_us',
    ),
    3 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/language/cad_U_Unidades.php',
      'to_module' => 'cad_U_Unidades',
      'language' => 'pt_BR',
    ),
    4 => 
    array (
      'from' => '<basepath>/SugarModules/language/application/en_us.lang.php',
      'to_module' => 'application',
      'language' => 'en_us',
    ),
    5 => 
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
      'from' => '<basepath>/SugarModules/relationships/vardefs/cad_u_unidades_cases_Cases.php',
      'to_module' => 'Cases',
    ),
    1 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/vardefs/cad_u_unidades_cases_cad_U_Unidades.php',
      'to_module' => 'cad_U_Unidades',
    ),
  ),
  'layoutfields' => 
  array (
    0 => 
    array (
      'additional_fields' => 
      array (
        'Cases' => 'cad_u_unidades_cases_name',
      ),
    ),
  ),
);