<?php
defined('_JEXEC') or die ;

echo "<h1>Entre em contato</h1>";
?>

<p>
	<link rel="stylesheet" type="text/css" media="all" href="./WebToLeadForm_1355501487_files/WebToLeadForm_1355501487.html">
	<script type="text/javascript" src="./WebToLeadForm_1355501487_files/sugar_grp1.js"></script><script type="text/javascript" src="./WebToLeadForm_1355501487_files/calendar.js"></script>
</p>
<form action="http://sugar.tecpar.br/index.php?entryPoint=WebToLeadCapture" name="WebToLeadForm" method="POST" id="WebToLeadForm">
	<table width="100%" style="border-top: 1px solid;
	border-bottom: 1px solid;
	padding: 10px 6px 12px 10px;
	background-color: rgb(233, 243, 255);
	font-size: 12px;
	background-repeat: repeat-x;
	background-position: center top;" mce_style="border-top: 1px solid;
	border-bottom: 1px solid;
	padding: 10px 6px 12px 10px;
	background-color: #e9f3ff;
	font-size: 12px;
	background-repeat: repeat-x;
	background-position: center top;" class="mceItemTable">
		<tbody>
			<tr align="center" style="color: rgb(0, 105, 225); font-family: Arial,Verdana,Helvetica,sans-serif; font-size: 18px; font-weight: bold; margin-bottom: 0px; margin-top: 0px;" mce_style="color: #0069e1; font-family: Arial,Verdana,Helvetica,sans-serif; font-size: 18px; font-weight: bold; margin-bottom: 0px; margin-top: 0px;">
				<td colspan="4"><b><h2>Formulário de Contato</h2></b></td>
			</tr>
			<tr align="center" style="color: rgb(0, 105, 225); font-family: Arial,Verdana,Helvetica,sans-serif; font-size: 2px; font-weight: normal; margin-bottom: 0px; margin-top: 0px;" mce_style="color: #0069e1; font-family: Arial,Verdana,Helvetica,sans-serif; font-size: 2px; font-weight: normal; margin-bottom: 0px; margin-top: 0px;">
				<td colspan="4">&nbsp;</td>
			</tr>
			<tr align="left" style="color: rgb(0, 105, 225); font-family: Arial,Verdana,Helvetica,sans-serif; font-size: 12px; font-weight: normal; margin-bottom: 0px; margin-top: 0px;" mce_style="color: #0069e1; font-family: Arial,Verdana,Helvetica,sans-serif; font-size: 12px; font-weight: normal; margin-bottom: 0px; margin-top: 0px;">
				<td colspan="4">Formulario de Contato</td>
			</tr>
			<tr align="center" style="color: rgb(0, 105, 225); font-family: Arial,Verdana,Helvetica,sans-serif; font-size: 8px; font-weight: normal; margin-bottom: 0px; margin-top: 0px;" mce_style="color: #0069e1; font-family: Arial,Verdana,Helvetica,sans-serif; font-size: 8px; font-weight: normal; margin-bottom: 0px; margin-top: 0px;">
				<td colspan="4">&nbsp;</td>
			</tr>
			<tr>
				<td width="15%" style="text-align: left; font-size: 12px; font-weight: normal;" mce_style="text-align: left; font-size: 12px; font-weight: normal;"><span sugar="slot">Nome: </span></td><td width="35%" style="font-size: 12px; font-weight: normal;" mce_style="font-size: 12px; font-weight: normal;"><span sugar="slot">
					<input id="first_name" name="first_name" type="text">
				</span></td><td width="15%" style="text-align: left; font-size: 12px; font-weight: normal;" mce_style="text-align: left; font-size: 12px; font-weight: normal;"><span sugar="slot">Razao Social: </span><span class="required" style="color: rgb(255, 0, 0);" mce_style="color: #ff0000;">*</span></td><td width="35%" style="font-size: 12px; font-weight: normal;" mce_style="font-size: 12px; font-weight: normal;"><span sugar="slot">
					<input id="razao_social_c" name="razao_social_c" type="text">
				</span></td>
			</tr>
			<tr>
				<td width="15%" style="text-align: left; font-size: 12px; font-weight: normal;" mce_style="text-align: left; font-size: 12px; font-weight: normal;"><span sugar="slot">Sobrenome: </span><span class="required" style="color: rgb(255, 0, 0);" mce_style="color: #ff0000;">*</span></td><td width="35%" style="font-size: 12px; font-weight: normal;" mce_style="font-size: 12px; font-weight: normal;"><span sugar="slot">
					<input id="last_name" name="last_name" type="text">
				</span></td><td width="15%" style="text-align: left; font-size: 12px; font-weight: normal;" mce_style="text-align: left; font-size: 12px; font-weight: normal;"><span sugar="slot">CNPJ / CPF: </span><span class="required" style="color: rgb(255, 0, 0);" mce_style="color: #ff0000;">*</span></td><td width="35%" style="font-size: 12px; font-weight: normal;" mce_style="font-size: 12px; font-weight: normal;"><span sugar="slot">
					<input id="cnpj_cpf_c" name="cnpj_cpf_c" type="text">
				</span></td>
			</tr>
			<tr>
				<td width="15%" style="text-align: left; font-size: 12px; font-weight: normal;" mce_style="text-align: left; font-size: 12px; font-weight: normal;"><span sugar="slot">Cargo: </span></td><td width="35%" style="font-size: 12px; font-weight: normal;" mce_style="font-size: 12px; font-weight: normal;"><span sugar="slot">
					<input id="title" name="title" type="text">
				</span></td><td width="15%" style="text-align: left; font-size: 12px; font-weight: normal;" mce_style="text-align: left; font-size: 12px; font-weight: normal;"><span sugar="slot">Incricao Estadual: </span><span class="required" style="color: rgb(255, 0, 0);" mce_style="color: #ff0000;">*</span></td><td width="35%" style="font-size: 12px; font-weight: normal;" mce_style="font-size: 12px; font-weight: normal;"><span sugar="slot">
					<input id="inscricao_estadual_c" name="inscricao_estadual_c" type="text">
				</span></td>
			</tr>
			<tr>
				<td width="15%" style="text-align: left; font-size: 12px; font-weight: normal;" mce_style="text-align: left; font-size: 12px; font-weight: normal;"><span sugar="slot">Telefone Comercial: </span></td><td width="35%" style="font-size: 12px; font-weight: normal;" mce_style="font-size: 12px; font-weight: normal;"><span sugar="slot">
					<input id="phone_work" name="phone_work" type="text">
				</span></td><td width="15%" style="text-align: left; font-size: 12px; font-weight: normal;" mce_style="text-align: left; font-size: 12px; font-weight: normal;"><span sugar="slot">Descrição: </span></td><td width="35%" rowspan="4" VALIGN="TOP" style="font-size: 12px; font-weight: normal;" mce_style="font-size: 12px; font-weight: normal;"><span id="sugarslot" sugar="slot">					<textarea id="description" name="description" type="text"> </textarea></span></td>
			</tr>
			<tr>
				<td width="15%" style="text-align: left; font-size: 12px; font-weight: normal;" mce_style="text-align: left; font-size: 12px; font-weight: normal;"><span sugar="slot">Celular: </span></td><td width="35%" style="font-size: 12px; font-weight: normal;" mce_style="font-size: 12px; font-weight: normal;"><span sugar="slot">
					<input id="phone_mobile" name="phone_mobile" type="text">
				</span></td><td width="15%" style="text-align: left; font-size: 12px; font-weight: normal;" mce_style="text-align: left; font-size: 12px; font-weight: normal;"><span sugar="slot">&nbsp;</span></td>
			</tr>
			<tr>
				<td width="15%" style="text-align: left; font-size: 12px; font-weight: normal;" mce_style="text-align: left; font-size: 12px; font-weight: normal;"><span sugar="slot">E-mail: </span></td><td width="35%" style="font-size: 12px; font-weight: normal;" mce_style="font-size: 12px; font-weight: normal;"><span sugar="slot">
					<input id="webtolead_email1" name="webtolead_email1" type="text" onchange="validateEmailAdd();">
				</span></td><td width="15%" style="text-align: left; font-size: 12px; font-weight: normal;" mce_style="text-align: left; font-size: 12px; font-weight: normal;"><span sugar="slot">&nbsp;</span></td>
			</tr>
			<tr>
				<td width="15%" style="text-align: left; font-size: 12px; font-weight: normal;" mce_style="text-align: left; font-size: 12px; font-weight: normal;"><span sugar="slot">Site Internet: </span></td><td width="35%" style="font-size: 12px; font-weight: normal;" mce_style="font-size: 12px; font-weight: normal;"><span sugar="slot">
					<input id="website" name="website" type="text">
				</span></td><td width="15%" style="text-align: left; font-size: 12px; font-weight: normal;" mce_style="text-align: left; font-size: 12px; font-weight: normal;"><span sugar="slot">&nbsp;</span></td>
			</tr>
			<tr align="center" style="color: rgb(0, 105, 225); font-family: Arial,Verdana,Helvetica,sans-serif; font-size: 18px; font-weight: bold; margin-bottom: 0px; margin-top: 0px;" mce_style="color: #0069e1; font-family: Arial,Verdana,Helvetica,sans-serif; font-size: 18px; font-weight: bold; margin-bottom: 0px; margin-top: 0px;">
				<td colspan="4">&nbsp;</td>
			</tr>
			<tr align="center">
				<td colspan="10">
				<input type="button" onclick="submit_form();" class="button" name="Submit" value="Enviar">
				</td>
			</tr>
			<tr>
				<td style="display: none" mce_style="display: none">
				<input type="hidden" id="campaign_id" name="campaign_id" value="516d4a4f-81f8-5991-65a9-5006c3d3a1b5">
				</td>
			</tr>
			<tr>
				<td style="display: none" mce_style="display: none">
				<input type="hidden" id="assigned_user_id" name="assigned_user_id" value="1">
				</td>
			</tr>
			<tr>
				<td style="display: none" mce_style="display: none">
				<input type="hidden" id="req_id" name="req_id" value="razao_social_c;last_name;cnpj_cpf_c;inscricao_estadual_c;">
				</td>
			</tr>
		</tbody>
	</table>
</form>
<p>
	<script type="text/javascript">
		<!--
		function submit_form() {
			if ( typeof (validateCaptchaAndSubmit) != 'undefined') {
				validateCaptchaAndSubmit();
			} else {
				check_webtolead_fields();
			}
		}

		function check_webtolead_fields() {
			if (document.getElementById('bool_id') != null) {
				var reqs = document.getElementById('bool_id').value;
				bools = reqs.substring(0, reqs.lastIndexOf(';'));
				var bool_fields = new Array();
				var bool_fields = bools.split(';');
				nbr_fields = bool_fields.length;
				for (var i = 0; i < nbr_fields; i++) {
					if (document.getElementById(bool_fields[i]).value == 'on') {
						document.getElementById(bool_fields[i]).value = 1;
					} else {
						document.getElementById(bool_fields[i]).value = 0;
					}
				}
			}
			if (document.getElementById('req_id') != null) {
				var reqs = document.getElementById('req_id').value;
				reqs = reqs.substring(0, reqs.lastIndexOf(';'));
				var req_fields = new Array();
				var req_fields = reqs.split(';');
				nbr_fields = req_fields.length;
				var req = true;
				for (var i = 0; i < nbr_fields; i++) {
					if (document.getElementById(req_fields[i]).value.length <= 0 || document.getElementById(req_fields[i]).value == 0) {
						req = false;
						break;
					}
				}
				if (req) {
					document.WebToLeadForm.submit();
					return true;
				} else {
					alert('Por favor forne&Atilde;&sect;a todos os campos obrigat&Atilde;&sup3;rios');
					return false;
				}
				return false
			} else {
				document.WebToLeadForm.submit();
			}
		}

		function validateEmailAdd() {
			if (document.getElementById('webtolead_email1').value.length > 0) {
				if (document.getElementById('webtolead_email1').value.match(/^\w+(['\.\-\+]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,})+$/) == null) {
					alert('Endere&Atilde;&sect;o de e-mail inv&Atilde;&iexcl;lido');
				}
			}
			if (document.getElementById('webtolead_email2').value.length > 0) {
				if (document.getElementById('webtolead_email2').value.match(/^\w+(['\.\-\+]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,})+$/) == null) {
					alert('Endere&Atilde;&sect;o de e-mail inv&Atilde;&iexcl;lido');
				}
			}
		}

		// -->
	</script>
</p>