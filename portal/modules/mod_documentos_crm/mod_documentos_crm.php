<?php
defined( '_JEXEC' ) or die;

echo "<h1>Documentos</h1>";

# conesão caseira com o banco do sugar
$hostcrm = 'localhost';
$usercrm = 'ambientelivre';
$passcrm = 'sugarsql123';
$basecrm = 'sugarcrm';
mysql_connect($hostcrm, $usercrm, $passcrm);
mysql_select_db($basecrm);

$user =& JFactory::getUser();
 
if ($user->id == 0) {
  echo 'Não há usuário logado.<br />';
} else {
  echo '<h2>Você está conectado como: ' . $user->username . '</h2>';
  //echo 'Real name: ' . $user->name . '<br />';
  //echo 'User ID  : ' . $user->id . '<br />';
}


// Busca e-mail atraves do Contato da Conta
$sql = "SELECT ac.account_id as cod_conta, ea.email_address as email, acc.name as conta
    FROM email_addresses as ea
    left join email_addr_bean_rel as rl on (ea.id = rl.email_address_id)
    left join contacts as ct on (rl.bean_id = ct.id)
    left join accounts_contacts as ac on ( ct.id = ac.contact_id ) 
    left join accounts as acc on ( ac.account_id = acc.id )
where
    ea.email_address = '".$user->email."'
    AND rl.bean_module = 'Contacts'";

$res = mysql_query($sql);
$r = mysql_fetch_array($res);

if (!empty($r['cod_conta'])){

?>

<center>
<table width="80%">
	<!-- <tr><td colspan="3"><?php echo $r['first_name'].' '. $r['last_name']; ?></strong></td></tr> -->
	<tr><td colspan="3"><strong>Documentos da conta:<?php echo $r['conta']; ?></strong></td></tr>
	<tr><th>Data da ultima alteração</th>
				<th>Nome do arquivo</th>
				<th>Ultima revisão</th>
				</tr>
	<?php
		$sql2 = "SELECT 
    dc.* , dr.*, da.*, dr.id as arquivo
FROM 
    documents as dc
    left join document_revisions as dr on (dr.document_id = dc.id)
    left join documents_accounts as da on (da.document_id = dc.id)
where
    da.account_id = '".$r['cod_conta']."'
order by dr.filename, dr.revision desc
	;";
		$res2 = mysql_query($sql2);
		$rev = 0;
		$arq = '';
		while($lead = mysql_fetch_array($res2)){
			if ($lead['revision'] >= $rev && empty($arq)){
				echo '<tr><td>'.$lead['date_modified'].'</td>
				<td>'.$lead['filename'].'</td>
				<td>'.$lead['revision'].'</td>
				</tr>
				<tr><td colspan="3"><a href="./modules/mod_documentos_crm/download_documentos_crm.php?arquivo='.$lead['arquivo'].'&nome_arquivo='.$lead['filename'].'">Download</a></td></tr>
				';
				$rev = $lead['revision'];
				$arq = $lead['filename'];
			}else if ($lead['filename'] == $arq && $lead['revision'] >= $rev){
				echo '<tr><td>'.$lead['date_modified'].'</td>
				<td>'.$lead['filename'].'</td>
				<td>'.$lead['revision'].'</td>
				</tr>
				<tr><td colspan="3"><a href="./modules/mod_documentos_crm/download_documentos_crm.php?arquivo='.$lead['arquivo'].'&nome_arquivo='.$lead['filename'].'">Download</a></td></tr>
				';
				$rev = $lead['revision'];
				$arq = $lead['filename'];
			}else if ($lead['filename'] != $arq){
				echo '<tr><td>'.$lead['date_modified'].'</td>
				<td>'.$lead['filename'].'</td>
				<td>'.$lead['revision'].'</td>
				</tr>
				<tr><td colspan="3"><a href="./modules/mod_documentos_crm/download_documentos_crm.php?arquivo='.$lead['arquivo'].'&nome_arquivo='.$lead['filename'].'">Download</a></td></tr>
				';
				$rev = $lead['revision'];
				$arq = $lead['filename'];
			}
				
			
		}
	?>
</table>
</center>

<?php
}else{
	echo 'Usuário sem acesso ao CRM!';
}
?>