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
          'key'=>'ant',
          'author' => 'Diego',
          'description' => '',
          'icon' => '',
          'is_uninstallable' => true,
          'name' => 'antigenos',
          'published_date' => '2014-11-27 11:01:48',
          'type' => 'module',
          'version' => '1417086109',
          'remove_tables' => 'prompt',
          );
$installdefs = array (
  'id' => 'antigenos',
  'beans' => 
  array (
    0 => 
    array (
      'module' => 'ant_secretarias',
      'class' => 'ant_secretarias',
      'path' => 'modules/ant_secretarias/ant_secretarias.php',
      'tab' => true,
    ),
    1 => 
    array (
      'module' => 'ant_producao',
      'class' => 'ant_producao',
      'path' => 'modules/ant_producao/ant_producao.php',
      'tab' => true,
    ),
    2 => 
    array (
      'module' => 'ant_cliente',
      'class' => 'ant_cliente',
      'path' => 'modules/ant_cliente/ant_cliente.php',
      'tab' => true,
    ),
    3 => 
    array (
      'module' => 'ant_produto',
      'class' => 'ant_produto',
      'path' => 'modules/ant_produto/ant_produto.php',
      'tab' => true,
    ),
    4 => 
    array (
      'module' => 'ant_estoque_geral',
      'class' => 'ant_estoque_geral',
      'path' => 'modules/ant_estoque_geral/ant_estoque_geral.php',
      'tab' => true,
    ),
    5 => 
    array (
      'module' => 'ant_inutilizado',
      'class' => 'ant_inutilizado',
      'path' => 'modules/ant_inutilizado/ant_inutilizado.php',
      'tab' => true,
    ),
    6 => 
    array (
      'module' => 'ant_itens_pedido',
      'class' => 'ant_itens_pedido',
      'path' => 'modules/ant_itens_pedido/ant_itens_pedido.php',
      'tab' => true,
    ),
    7 => 
    array (
      'module' => 'ant_regionais',
      'class' => 'ant_regionais',
      'path' => 'modules/ant_regionais/ant_regionais.php',
      'tab' => true,
    ),
    8 => 
    array (
      'module' => 'ant_log_estoque',
      'class' => 'ant_log_estoque',
      'path' => 'modules/ant_log_estoque/ant_log_estoque.php',
      'tab' => true,
    ),
    9 => 
    array (
      'module' => 'ant_lista_pedidos',
      'class' => 'ant_lista_pedidos',
      'path' => 'modules/ant_lista_pedidos/ant_lista_pedidos.php',
      'tab' => true,
    ),
    10 => 
    array (
      'module' => 'ant_itens_inutilizados',
      'class' => 'ant_itens_inutilizados',
      'path' => 'modules/ant_itens_inutilizados/ant_itens_inutilizados.php',
      'tab' => true,
    ),
    11 => 
    array (
      'module' => 'ant_pedido',
      'class' => 'ant_pedido',
      'path' => 'modules/ant_pedido/ant_pedido.php',
      'tab' => true,
    ),
  ),
  'layoutdefs' => 
  array (
    0 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/layoutdefs/ant_secretarias_contacts_Contacts.php',
      'to_module' => 'Contacts',
    ),
    1 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/layoutdefs/ant_secretarias_contacts_ant_secretarias.php',
      'to_module' => 'ant_secretarias',
    ),
    2 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/layoutdefs/ant_secretarias_ant_regionais_ant_secretarias.php',
      'to_module' => 'ant_secretarias',
    ),
    3 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/layoutdefs/ant_cliente_ant_secretarias_ant_secretarias.php',
      'to_module' => 'ant_secretarias',
    ),
    4 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/layoutdefs/ant_regionais_contacts_Contacts.php',
      'to_module' => 'Contacts',
    ),
    5 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/layoutdefs/ant_regionais_contacts_ant_regionais.php',
      'to_module' => 'ant_regionais',
    ),
    6 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/layoutdefs/ant_itens_inutilizados_ant_inutilizado_ant_inutilizado.php',
      'to_module' => 'ant_inutilizado',
    ),
    7 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/layoutdefs/ant_pedido_ant_lista_pedidos_ant_pedido.php',
      'to_module' => 'ant_pedido',
    ),
  ),
  'relationships' => 
  array (
    0 => 
    array (
      'meta_data' => '<basepath>/SugarModules/relationships/relationships/ant_secretarias_contactsMetaData.php',
    ),
    1 => 
    array (
      'meta_data' => '<basepath>/SugarModules/relationships/relationships/ant_secretarias_ant_regionaisMetaData.php',
    ),
    2 => 
    array (
      'meta_data' => '<basepath>/SugarModules/relationships/relationships/ant_producao_ant_produtoMetaData.php',
    ),
    3 => 
    array (
      'meta_data' => '<basepath>/SugarModules/relationships/relationships/ant_cliente_ant_regionaisMetaData.php',
    ),
    4 => 
    array (
      'meta_data' => '<basepath>/SugarModules/relationships/relationships/ant_cliente_ant_secretariasMetaData.php',
    ),
    5 => 
    array (
      'meta_data' => '<basepath>/SugarModules/relationships/relationships/ant_estoque_geral_ant_regionaisMetaData.php',
    ),
    6 => 
    array (
      'meta_data' => '<basepath>/SugarModules/relationships/relationships/ant_estoque_geral_ant_secretariasMetaData.php',
    ),
    7 => 
    array (
      'meta_data' => '<basepath>/SugarModules/relationships/relationships/ant_estoque_geral_ant_produtoMetaData.php',
    ),
    8 => 
    array (
      'meta_data' => '<basepath>/SugarModules/relationships/relationships/ant_inutilizado_ant_produtoMetaData.php',
    ),
    9 => 
    array (
      'meta_data' => '<basepath>/SugarModules/relationships/relationships/ant_inutilizado_ant_regionaisMetaData.php',
    ),
    10 => 
    array (
      'meta_data' => '<basepath>/SugarModules/relationships/relationships/ant_inutilizado_ant_secretariasMetaData.php',
    ),
    11 => 
    array (
      'meta_data' => '<basepath>/SugarModules/relationships/relationships/ant_itens_pedido_ant_produtoMetaData.php',
    ),
    12 => 
    array (
      'meta_data' => '<basepath>/SugarModules/relationships/relationships/ant_regionais_contactsMetaData.php',
    ),
    13 => 
    array (
      'meta_data' => '<basepath>/SugarModules/relationships/relationships/ant_log_estoque_ant_produtoMetaData.php',
    ),
    14 => 
    array (
      'meta_data' => '<basepath>/SugarModules/relationships/relationships/ant_itens_inutilizados_ant_inutilizadoMetaData.php',
    ),
    15 => 
    array (
      'meta_data' => '<basepath>/SugarModules/relationships/relationships/ant_pedido_ant_lista_pedidosMetaData.php',
    ),
  ),
  'image_dir' => '<basepath>/icons',
  'copy' => 
  array (
    0 => 
    array (
      'from' => '<basepath>/SugarModules/modules/ant_secretarias',
      'to' => 'modules/ant_secretarias',
    ),
    1 => 
    array (
      'from' => '<basepath>/SugarModules/modules/ant_producao',
      'to' => 'modules/ant_producao',
    ),
    2 => 
    array (
      'from' => '<basepath>/SugarModules/modules/ant_cliente',
      'to' => 'modules/ant_cliente',
    ),
    3 => 
    array (
      'from' => '<basepath>/SugarModules/modules/ant_produto',
      'to' => 'modules/ant_produto',
    ),
    4 => 
    array (
      'from' => '<basepath>/SugarModules/modules/ant_estoque_geral',
      'to' => 'modules/ant_estoque_geral',
    ),
    5 => 
    array (
      'from' => '<basepath>/SugarModules/modules/ant_inutilizado',
      'to' => 'modules/ant_inutilizado',
    ),
    6 => 
    array (
      'from' => '<basepath>/SugarModules/modules/ant_itens_pedido',
      'to' => 'modules/ant_itens_pedido',
    ),
    7 => 
    array (
      'from' => '<basepath>/SugarModules/modules/ant_regionais',
      'to' => 'modules/ant_regionais',
    ),
    8 => 
    array (
      'from' => '<basepath>/SugarModules/modules/ant_log_estoque',
      'to' => 'modules/ant_log_estoque',
    ),
    9 => 
    array (
      'from' => '<basepath>/SugarModules/modules/ant_lista_pedidos',
      'to' => 'modules/ant_lista_pedidos',
    ),
    10 => 
    array (
      'from' => '<basepath>/SugarModules/modules/ant_itens_inutilizados',
      'to' => 'modules/ant_itens_inutilizados',
    ),
    11 => 
    array (
      'from' => '<basepath>/SugarModules/modules/ant_pedido',
      'to' => 'modules/ant_pedido',
    ),
  ),
  'language' => 
  array (
    0 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/language/Contacts.php',
      'to_module' => 'Contacts',
      'language' => 'en_us',
    ),
    1 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/language/Contacts.php',
      'to_module' => 'Contacts',
      'language' => 'pt_BR',
    ),
    2 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/language/ant_secretarias.php',
      'to_module' => 'ant_secretarias',
      'language' => 'en_us',
    ),
    3 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/language/ant_secretarias.php',
      'to_module' => 'ant_secretarias',
      'language' => 'pt_BR',
    ),
    4 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/language/ant_regionais.php',
      'to_module' => 'ant_regionais',
      'language' => 'en_us',
    ),
    5 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/language/ant_regionais.php',
      'to_module' => 'ant_regionais',
      'language' => 'pt_BR',
    ),
    6 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/language/ant_secretarias.php',
      'to_module' => 'ant_secretarias',
      'language' => 'en_us',
    ),
    7 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/language/ant_secretarias.php',
      'to_module' => 'ant_secretarias',
      'language' => 'pt_BR',
    ),
    8 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/language/ant_produto.php',
      'to_module' => 'ant_produto',
      'language' => 'en_us',
    ),
    9 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/language/ant_produto.php',
      'to_module' => 'ant_produto',
      'language' => 'pt_BR',
    ),
    10 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/language/ant_producao.php',
      'to_module' => 'ant_producao',
      'language' => 'en_us',
    ),
    11 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/language/ant_producao.php',
      'to_module' => 'ant_producao',
      'language' => 'pt_BR',
    ),
    12 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/language/ant_regionais.php',
      'to_module' => 'ant_regionais',
      'language' => 'en_us',
    ),
    13 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/language/ant_regionais.php',
      'to_module' => 'ant_regionais',
      'language' => 'pt_BR',
    ),
    14 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/language/ant_cliente.php',
      'to_module' => 'ant_cliente',
      'language' => 'en_us',
    ),
    15 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/language/ant_cliente.php',
      'to_module' => 'ant_cliente',
      'language' => 'pt_BR',
    ),
    16 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/language/ant_cliente.php',
      'to_module' => 'ant_cliente',
      'language' => 'en_us',
    ),
    17 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/language/ant_cliente.php',
      'to_module' => 'ant_cliente',
      'language' => 'pt_BR',
    ),
    18 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/language/ant_secretarias.php',
      'to_module' => 'ant_secretarias',
      'language' => 'en_us',
    ),
    19 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/language/ant_secretarias.php',
      'to_module' => 'ant_secretarias',
      'language' => 'pt_BR',
    ),
    20 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/language/ant_regionais.php',
      'to_module' => 'ant_regionais',
      'language' => 'en_us',
    ),
    21 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/language/ant_regionais.php',
      'to_module' => 'ant_regionais',
      'language' => 'pt_BR',
    ),
    22 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/language/ant_estoque_geral.php',
      'to_module' => 'ant_estoque_geral',
      'language' => 'en_us',
    ),
    23 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/language/ant_estoque_geral.php',
      'to_module' => 'ant_estoque_geral',
      'language' => 'pt_BR',
    ),
    24 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/language/ant_secretarias.php',
      'to_module' => 'ant_secretarias',
      'language' => 'en_us',
    ),
    25 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/language/ant_secretarias.php',
      'to_module' => 'ant_secretarias',
      'language' => 'pt_BR',
    ),
    26 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/language/ant_estoque_geral.php',
      'to_module' => 'ant_estoque_geral',
      'language' => 'en_us',
    ),
    27 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/language/ant_estoque_geral.php',
      'to_module' => 'ant_estoque_geral',
      'language' => 'pt_BR',
    ),
    28 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/language/ant_produto.php',
      'to_module' => 'ant_produto',
      'language' => 'en_us',
    ),
    29 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/language/ant_produto.php',
      'to_module' => 'ant_produto',
      'language' => 'pt_BR',
    ),
    30 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/language/ant_estoque_geral.php',
      'to_module' => 'ant_estoque_geral',
      'language' => 'en_us',
    ),
    31 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/language/ant_estoque_geral.php',
      'to_module' => 'ant_estoque_geral',
      'language' => 'pt_BR',
    ),
    32 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/language/ant_produto.php',
      'to_module' => 'ant_produto',
      'language' => 'en_us',
    ),
    33 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/language/ant_produto.php',
      'to_module' => 'ant_produto',
      'language' => 'pt_BR',
    ),
    34 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/language/ant_inutilizado.php',
      'to_module' => 'ant_inutilizado',
      'language' => 'en_us',
    ),
    35 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/language/ant_inutilizado.php',
      'to_module' => 'ant_inutilizado',
      'language' => 'pt_BR',
    ),
    36 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/language/ant_regionais.php',
      'to_module' => 'ant_regionais',
      'language' => 'en_us',
    ),
    37 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/language/ant_regionais.php',
      'to_module' => 'ant_regionais',
      'language' => 'pt_BR',
    ),
    38 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/language/ant_inutilizado.php',
      'to_module' => 'ant_inutilizado',
      'language' => 'en_us',
    ),
    39 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/language/ant_inutilizado.php',
      'to_module' => 'ant_inutilizado',
      'language' => 'pt_BR',
    ),
    40 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/language/ant_secretarias.php',
      'to_module' => 'ant_secretarias',
      'language' => 'en_us',
    ),
    41 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/language/ant_secretarias.php',
      'to_module' => 'ant_secretarias',
      'language' => 'pt_BR',
    ),
    42 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/language/ant_inutilizado.php',
      'to_module' => 'ant_inutilizado',
      'language' => 'en_us',
    ),
    43 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/language/ant_inutilizado.php',
      'to_module' => 'ant_inutilizado',
      'language' => 'pt_BR',
    ),
    44 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/language/ant_produto.php',
      'to_module' => 'ant_produto',
      'language' => 'en_us',
    ),
    45 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/language/ant_produto.php',
      'to_module' => 'ant_produto',
      'language' => 'pt_BR',
    ),
    46 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/language/ant_itens_pedido.php',
      'to_module' => 'ant_itens_pedido',
      'language' => 'en_us',
    ),
    47 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/language/ant_itens_pedido.php',
      'to_module' => 'ant_itens_pedido',
      'language' => 'pt_BR',
    ),
    48 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/language/Contacts.php',
      'to_module' => 'Contacts',
      'language' => 'en_us',
    ),
    49 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/language/Contacts.php',
      'to_module' => 'Contacts',
      'language' => 'pt_BR',
    ),
    50 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/language/ant_regionais.php',
      'to_module' => 'ant_regionais',
      'language' => 'en_us',
    ),
    51 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/language/ant_regionais.php',
      'to_module' => 'ant_regionais',
      'language' => 'pt_BR',
    ),
    52 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/language/ant_produto.php',
      'to_module' => 'ant_produto',
      'language' => 'en_us',
    ),
    53 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/language/ant_produto.php',
      'to_module' => 'ant_produto',
      'language' => 'pt_BR',
    ),
    54 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/language/ant_log_estoque.php',
      'to_module' => 'ant_log_estoque',
      'language' => 'en_us',
    ),
    55 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/language/ant_log_estoque.php',
      'to_module' => 'ant_log_estoque',
      'language' => 'pt_BR',
    ),
    56 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/language/ant_itens_inutilizados.php',
      'to_module' => 'ant_itens_inutilizados',
      'language' => 'en_us',
    ),
    57 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/language/ant_itens_inutilizados.php',
      'to_module' => 'ant_itens_inutilizados',
      'language' => 'pt_BR',
    ),
    58 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/language/ant_inutilizado.php',
      'to_module' => 'ant_inutilizado',
      'language' => 'en_us',
    ),
    59 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/language/ant_inutilizado.php',
      'to_module' => 'ant_inutilizado',
      'language' => 'pt_BR',
    ),
    60 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/language/ant_lista_pedidos.php',
      'to_module' => 'ant_lista_pedidos',
      'language' => 'en_us',
    ),
    61 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/language/ant_lista_pedidos.php',
      'to_module' => 'ant_lista_pedidos',
      'language' => 'pt_BR',
    ),
    62 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/language/ant_pedido.php',
      'to_module' => 'ant_pedido',
      'language' => 'en_us',
    ),
    63 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/language/ant_pedido.php',
      'to_module' => 'ant_pedido',
      'language' => 'pt_BR',
    ),
    64 => 
    array (
      'from' => '<basepath>/SugarModules/language/application/en_us.lang.php',
      'to_module' => 'application',
      'language' => 'en_us',
    ),
    65 => 
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
      'from' => '<basepath>/SugarModules/relationships/vardefs/ant_secretarias_contacts_Contacts.php',
      'to_module' => 'Contacts',
    ),
    1 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/vardefs/ant_secretarias_contacts_ant_secretarias.php',
      'to_module' => 'ant_secretarias',
    ),
    2 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/vardefs/ant_secretarias_ant_regionais_ant_regionais.php',
      'to_module' => 'ant_regionais',
    ),
    3 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/vardefs/ant_secretarias_ant_regionais_ant_secretarias.php',
      'to_module' => 'ant_secretarias',
    ),
    4 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/vardefs/ant_producao_ant_produto_ant_produto.php',
      'to_module' => 'ant_produto',
    ),
    5 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/vardefs/ant_producao_ant_produto_ant_producao.php',
      'to_module' => 'ant_producao',
    ),
    6 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/vardefs/ant_cliente_ant_regionais_ant_regionais.php',
      'to_module' => 'ant_regionais',
    ),
    7 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/vardefs/ant_cliente_ant_regionais_ant_cliente.php',
      'to_module' => 'ant_cliente',
    ),
    8 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/vardefs/ant_cliente_ant_secretarias_ant_cliente.php',
      'to_module' => 'ant_cliente',
    ),
    9 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/vardefs/ant_cliente_ant_secretarias_ant_secretarias.php',
      'to_module' => 'ant_secretarias',
    ),
    10 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/vardefs/ant_estoque_geral_ant_regionais_ant_regionais.php',
      'to_module' => 'ant_regionais',
    ),
    11 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/vardefs/ant_estoque_geral_ant_regionais_ant_estoque_geral.php',
      'to_module' => 'ant_estoque_geral',
    ),
    12 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/vardefs/ant_estoque_geral_ant_secretarias_ant_secretarias.php',
      'to_module' => 'ant_secretarias',
    ),
    13 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/vardefs/ant_estoque_geral_ant_secretarias_ant_estoque_geral.php',
      'to_module' => 'ant_estoque_geral',
    ),
    14 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/vardefs/ant_estoque_geral_ant_produto_ant_produto.php',
      'to_module' => 'ant_produto',
    ),
    15 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/vardefs/ant_estoque_geral_ant_produto_ant_estoque_geral.php',
      'to_module' => 'ant_estoque_geral',
    ),
    16 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/vardefs/ant_inutilizado_ant_produto_ant_produto.php',
      'to_module' => 'ant_produto',
    ),
    17 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/vardefs/ant_inutilizado_ant_produto_ant_inutilizado.php',
      'to_module' => 'ant_inutilizado',
    ),
    18 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/vardefs/ant_inutilizado_ant_regionais_ant_regionais.php',
      'to_module' => 'ant_regionais',
    ),
    19 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/vardefs/ant_inutilizado_ant_regionais_ant_inutilizado.php',
      'to_module' => 'ant_inutilizado',
    ),
    20 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/vardefs/ant_inutilizado_ant_secretarias_ant_secretarias.php',
      'to_module' => 'ant_secretarias',
    ),
    21 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/vardefs/ant_inutilizado_ant_secretarias_ant_inutilizado.php',
      'to_module' => 'ant_inutilizado',
    ),
    22 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/vardefs/ant_itens_pedido_ant_produto_ant_produto.php',
      'to_module' => 'ant_produto',
    ),
    23 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/vardefs/ant_itens_pedido_ant_produto_ant_itens_pedido.php',
      'to_module' => 'ant_itens_pedido',
    ),
    24 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/vardefs/ant_regionais_contacts_Contacts.php',
      'to_module' => 'Contacts',
    ),
    25 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/vardefs/ant_regionais_contacts_ant_regionais.php',
      'to_module' => 'ant_regionais',
    ),
    26 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/vardefs/ant_log_estoque_ant_produto_ant_produto.php',
      'to_module' => 'ant_produto',
    ),
    27 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/vardefs/ant_log_estoque_ant_produto_ant_log_estoque.php',
      'to_module' => 'ant_log_estoque',
    ),
    28 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/vardefs/ant_itens_inutilizados_ant_inutilizado_ant_itens_inutilizados.php',
      'to_module' => 'ant_itens_inutilizados',
    ),
    29 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/vardefs/ant_itens_inutilizados_ant_inutilizado_ant_inutilizado.php',
      'to_module' => 'ant_inutilizado',
    ),
    30 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/vardefs/ant_pedido_ant_lista_pedidos_ant_lista_pedidos.php',
      'to_module' => 'ant_lista_pedidos',
    ),
    31 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/vardefs/ant_pedido_ant_lista_pedidos_ant_pedido.php',
      'to_module' => 'ant_pedido',
    ),
  ),
  'layoutfields' => 
  array (
    0 => 
    array (
      'additional_fields' => 
      array (
      ),
    ),
    1 => 
    array (
      'additional_fields' => 
      array (
      ),
    ),
    2 => 
    array (
      'additional_fields' => 
      array (
      ),
    ),
    3 => 
    array (
      'additional_fields' => 
      array (
      ),
    ),
    4 => 
    array (
      'additional_fields' => 
      array (
      ),
    ),
    5 => 
    array (
      'additional_fields' => 
      array (
      ),
    ),
    6 => 
    array (
      'additional_fields' => 
      array (
      ),
    ),
    7 => 
    array (
      'additional_fields' => 
      array (
      ),
    ),
    8 => 
    array (
      'additional_fields' => 
      array (
      ),
    ),
    9 => 
    array (
      'additional_fields' => 
      array (
      ),
    ),
    10 => 
    array (
      'additional_fields' => 
      array (
      ),
    ),
    11 => 
    array (
      'additional_fields' => 
      array (
      ),
    ),
    12 => 
    array (
      'additional_fields' => 
      array (
      ),
    ),
    13 => 
    array (
      'additional_fields' => 
      array (
      ),
    ),
  ),
);