<?php
defined( '_JEXEC' ) or die;

echo "<h1>Propostas Comerciais</h1>";

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
	<tr><td colspan="3"><strong>Propostas da conta: <?php echo $r['conta']; ?></strong></td></tr>
	<?php
		$sql2 = "SELECT ac.name as conta, 
		aop.date_modified as atualizacao,
		op.name as oportunidade, 
		op.description as descricao, 
		op.sales_stage as estagio  FROM accounts as ac
    left join accounts_opportunities as aop on(ac.id = aop.account_id)
    left join opportunities as op on (op.id = aop.opportunity_id)
where
    	op.sales_stage != 'Closed Won'
		AND op.deleted = 0
		AND ac.id =  '".$r['cod_conta']."';";
		$res2 = mysql_query($sql2);
		while($lead = mysql_fetch_array($res2)){
			echo '<tr><td>'.utf8_encode($lead['oportunidade']).'</td>
			<td>'.utf8_encode($lead['descricao']).'</td>
			<td>'.$lead['atualizacao'];
		}
	?>
</table>
</center>
<?php
}else{
	echo 'Usuário sem acesso ao CRM!';
}
?>

