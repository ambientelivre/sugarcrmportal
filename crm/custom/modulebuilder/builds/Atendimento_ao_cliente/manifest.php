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
          'key'=>'AT_',
          'author' => 'Rafaela Raganham',
          'description' => '',
          'icon' => '',
          'is_uninstallable' => true,
          'name' => 'Atendimento_ao_cliente',
          'published_date' => '2012-04-03 12:42:25',
          'type' => 'module',
          'version' => '1333456945',
          'remove_tables' => 'prompt',
          );
$installdefs = array (
  'id' => 'Atendimento_ao_cliente',
  'beans' => 
  array (
    0 => 
    array (
      'module' => 'AT__sac',
      'class' => 'AT__sac',
      'path' => 'modules/AT__sac/AT__sac.php',
      'tab' => true,
    ),
    1 => 
    array (
      'module' => 'AT__Atendimento_ao_cliente',
      'class' => 'AT__Atendimento_ao_cliente',
      'path' => 'modules/AT__Atendimento_ao_cliente/AT__Atendimento_ao_cliente.php',
      'tab' => true,
    ),
  ),
  'layoutdefs' => 
  array (
    0 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/layoutdefs/at__sac_at__atendimento_ao_cliente_AT__Atendimento_ao_cliente.php',
      'to_module' => 'AT__Atendimento_ao_cliente',
    ),
    1 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/layoutdefs/at__sac_at__atendimento_ao_cliente_AT__sac.php',
      'to_module' => 'AT__sac',
    ),
    2 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/layoutdefs/at__atendimento_ao_cliente_activities_calls_AT__Atendimento_ao_cliente.php',
      'to_module' => 'AT__Atendimento_ao_cliente',
    ),
  ),
  'relationships' => 
  array (
    0 => 
    array (
      'meta_data' => '<basepath>/SugarModules/relationships/relationships/at__sac_at__atendimento_ao_clienteMetaData.php',
    ),
    1 => 
    array (
      'meta_data' => '<basepath>/SugarModules/relationships/relationships/at__atendimento_ao_cliente_activities_callsMetaData.php',
    ),
    2 => 
    array (
      'meta_data' => '<basepath>/SugarModules/relationships/relationships/at__atendimento_ao_cliente_activities_meetingsMetaData.php',
    ),
    3 => 
    array (
      'meta_data' => '<basepath>/SugarModules/relationships/relationships/at__atendimento_ao_cliente_activities_notesMetaData.php',
    ),
    4 => 
    array (
      'meta_data' => '<basepath>/SugarModules/relationships/relationships/at__atendimento_ao_cliente_activities_tasksMetaData.php',
    ),
    5 => 
    array (
      'meta_data' => '<basepath>/SugarModules/relationships/relationships/at__atendimento_ao_cliente_activities_emailsMetaData.php',
    ),
  ),
  'image_dir' => '<basepath>/icons',
  'copy' => 
  array (
    0 => 
    array (
      'from' => '<basepath>/SugarModules/modules/AT__sac',
      'to' => 'modules/AT__sac',
    ),
    1 => 
    array (
      'from' => '<basepath>/SugarModules/modules/AT__Atendimento_ao_cliente',
      'to' => 'modules/AT__Atendimento_ao_cliente',
    ),
  ),
  'language' => 
  array (
    0 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/language/AT__Atendimento_ao_cliente.php',
      'to_module' => 'AT__Atendimento_ao_cliente',
      'language' => 'en_us',
    ),
    1 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/language/AT__Atendimento_ao_cliente.php',
      'to_module' => 'AT__Atendimento_ao_cliente',
      'language' => 'pt_BR',
    ),
    2 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/language/AT__sac.php',
      'to_module' => 'AT__sac',
      'language' => 'en_us',
    ),
    3 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/language/AT__sac.php',
      'to_module' => 'AT__sac',
      'language' => 'pt_BR',
    ),
    4 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/language/application.php',
      'to_module' => 'application',
      'language' => 'en_us',
    ),
    5 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/language/application.php',
      'to_module' => 'application',
      'language' => 'pt_BR',
    ),
    6 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/language/AT__Atendimento_ao_cliente.php',
      'to_module' => 'AT__Atendimento_ao_cliente',
      'language' => 'en_us',
    ),
    7 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/language/AT__Atendimento_ao_cliente.php',
      'to_module' => 'AT__Atendimento_ao_cliente',
      'language' => 'pt_BR',
    ),
    8 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/language/AT__Atendimento_ao_cliente.php',
      'to_module' => 'AT__Atendimento_ao_cliente',
      'language' => 'en_us',
    ),
    9 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/language/AT__Atendimento_ao_cliente.php',
      'to_module' => 'AT__Atendimento_ao_cliente',
      'language' => 'pt_BR',
    ),
    10 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/language/AT__Atendimento_ao_cliente.php',
      'to_module' => 'AT__Atendimento_ao_cliente',
      'language' => 'en_us',
    ),
    11 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/language/AT__Atendimento_ao_cliente.php',
      'to_module' => 'AT__Atendimento_ao_cliente',
      'language' => 'pt_BR',
    ),
    12 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/language/AT__Atendimento_ao_cliente.php',
      'to_module' => 'AT__Atendimento_ao_cliente',
      'language' => 'en_us',
    ),
    13 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/language/AT__Atendimento_ao_cliente.php',
      'to_module' => 'AT__Atendimento_ao_cliente',
      'language' => 'pt_BR',
    ),
    14 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/language/AT__Atendimento_ao_cliente.php',
      'to_module' => 'AT__Atendimento_ao_cliente',
      'language' => 'en_us',
    ),
    15 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/language/AT__Atendimento_ao_cliente.php',
      'to_module' => 'AT__Atendimento_ao_cliente',
      'language' => 'pt_BR',
    ),
    16 => 
    array (
      'from' => '<basepath>/SugarModules/language/application/en_us.lang.php',
      'to_module' => 'application',
      'language' => 'en_us',
    ),
    17 => 
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
      'from' => '<basepath>/SugarModules/relationships/vardefs/at__sac_at__atendimento_ao_cliente_AT__Atendimento_ao_cliente.php',
      'to_module' => 'AT__Atendimento_ao_cliente',
    ),
    1 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/vardefs/at__sac_at__atendimento_ao_cliente_AT__sac.php',
      'to_module' => 'AT__sac',
    ),
    2 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/vardefs/at__atendimento_ao_cliente_activities_calls_Calls.php',
      'to_module' => 'Calls',
    ),
    3 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/vardefs/at__atendimento_ao_cliente_activities_calls_AT__Atendimento_ao_cliente.php',
      'to_module' => 'AT__Atendimento_ao_cliente',
    ),
    4 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/vardefs/at__atendimento_ao_cliente_activities_meetings_Meetings.php',
      'to_module' => 'Meetings',
    ),
    5 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/vardefs/at__atendimento_ao_cliente_activities_meetings_AT__Atendimento_ao_cliente.php',
      'to_module' => 'AT__Atendimento_ao_cliente',
    ),
    6 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/vardefs/at__atendimento_ao_cliente_activities_notes_Notes.php',
      'to_module' => 'Notes',
    ),
    7 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/vardefs/at__atendimento_ao_cliente_activities_notes_AT__Atendimento_ao_cliente.php',
      'to_module' => 'AT__Atendimento_ao_cliente',
    ),
    8 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/vardefs/at__atendimento_ao_cliente_activities_tasks_Tasks.php',
      'to_module' => 'Tasks',
    ),
    9 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/vardefs/at__atendimento_ao_cliente_activities_tasks_AT__Atendimento_ao_cliente.php',
      'to_module' => 'AT__Atendimento_ao_cliente',
    ),
    10 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/vardefs/at__atendimento_ao_cliente_activities_emails_Emails.php',
      'to_module' => 'Emails',
    ),
    11 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/vardefs/at__atendimento_ao_cliente_activities_emails_AT__Atendimento_ao_cliente.php',
      'to_module' => 'AT__Atendimento_ao_cliente',
    ),
  ),
  'layoutfields' => 
  array (
    0 => 
    array (
      'additional_fields' => 
      array (
        'Calls' => 'at__atendimento_ao_cliente_activities_calls_name',
      ),
    ),
    1 => 
    array (
      'additional_fields' => 
      array (
        'Meetings' => 'at__atendimento_ao_cliente_activities_meetings_name',
      ),
    ),
    2 => 
    array (
      'additional_fields' => 
      array (
        'Notes' => 'at__atendimento_ao_cliente_activities_notes_name',
      ),
    ),
    3 => 
    array (
      'additional_fields' => 
      array (
        'Tasks' => 'at__atendimento_ao_cliente_activities_tasks_name',
      ),
    ),
    4 => 
    array (
      'additional_fields' => 
      array (
      ),
    ),
  ),
);