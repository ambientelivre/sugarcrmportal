<?php
defined( '_JEXEC' ) or die;

echo "<h1>Ocorrências - Qualidade</h1>";

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
	<tr><td colspan="5"><strong>Ocorrências da conta: <?php echo $r['conta']; ?></strong></td></tr>
	<tr>
				<th>Titulo</th>
				<th>Descrição</th>
				<th>Contato</th>
				<th>Data do Registro</th>
				<th>Data da finalização</th>
	</tr>
	<?php
		$sql2 = "SELECT cs.*, ccs.* 
FROM 
    cases as cs
    left join cases_cstm as ccs on (ccs.id_c = cs.id)
where
    cs.account_id = '".$r['cod_conta']."'
    ;";
		$res2 = mysql_query($sql2);
		while($lead = mysql_fetch_array($res2)){
			echo '<tr>
				<td>'.utf8_encode($lead['name']).'</td>
				<td>'.utf8_encode($lead['description']).'</td>
				<td>'.utf8_encode($lead['contato_c']).'</td>
				<td>'.$lead['data_registro_c'].'</td>
				<td>'.$lead['data_finalizacao_c'].'</td>
			</tr>';
		}
	?>
</table>
</center>
<?php
}else{
	echo 'Usuário sem acesso ao CRM!';
}
?>

