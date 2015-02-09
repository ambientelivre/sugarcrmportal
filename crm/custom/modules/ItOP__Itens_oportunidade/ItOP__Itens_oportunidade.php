<?php
//prevents directly accessing this file from a web browser
if(!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');
require_once('data/SugarBean.php');
require_once('include/utils.php');
require_once('modules/ItOP__Itens_oportunidade/ItOP__Itens_oportunidade.php');
require_once('modules/Opportunities/Opportunity.php');
 
class SomaItensOpp {

	function SomarItens(&$bean, $event, $arguments){
		
		$amount = 0;
		//seleciona id da oportunidade
		$idop = $_REQUEST["record"];
      

		// Seleciona o valor dos itens relacionados com a oportunidade

		$query = "SELECT itop__itens_oportunidade.name, itop__itens_oportunidade.valor,sum(itop__itens_oportunidade.valor)valor_total FROM itop__itenspportunities_c, itop__itens_oportunidade ";
		$query .= " WHERE itop__iten6192unities_ida = '$idop' and itop__itenspportunities_c.itop__iten593cunidade_idb = itop__itens_oportunidade.id";

		
		//salva resultado do SELECT do banco na variavel $result
		$result = $bean->db->query($query, true);

		$row_num = 0;
		$row = $bean->db->fetchByAssoc($result, $row_num);
		
		//A função row acima só retorna a primeira linha da consulta realizada.
		// Para mais linhas é necessário fazer o while especificado abaixo 		
		
		while($row != null){
			// busca e soma o valor total da oportunidade 
			$amount += $row['valor_total'];
			$row_num++;
			$row = $bean->db->fetchByAssoc($result, $row_num);
		}
	
		//Atualiza o valor do amount da oportunidade
		$query = "UPDATE opportunities SET amount='$amount' WHERE id='$idop'";
		$result = $bean->db->query($query, true);
		
		//Atualiza o valor do amount_usdollar da oportunidade (aparece em "oportunidades")
		$query = "UPDATE opportunities SET amount_usdollar='$amount' WHERE id='$idop'";
		$result = $bean->db->query($query, true);

	}
}
?>
