<style type="text/css">
    @import url(agenda.css);
</style>
<?
    ini_set('mssql.charset', 'UTF-8');
    $con=mysql_connect("localhost","ambientelivre","sugarsql123");
        if (mysqli_connect_errno()) {echo "Falha ao conectar com o banco MySQL: " . mysqli_connect_error();}
    mysql_select_db("homologacao_sugarcrm", $con);
$hoje = date("d/m/Y");
    $dia = date('d');
    $month =ltrim(date('m'),"0");
    $ano = date('Y');


if(empty($_GET['data'])){
    $dia = date('d');
    $month =ltrim(date('m'),"0");
    $ano = date('Y');
}else{
    $data = explode('/',$_GET['data']);//nova data
    $dia = $data[0];
    $month = $data[1];
    $ano = $data[2];
}
if($month==1){//mes anterior se janeiro mudar valor
    $mes_ant = 12;
    $ano_ant = $ano - 1;
}else{
    $mes_ant = $month - 1;
    $ano_ant = $ano;
}
if($month==12){//proximo m�s se dezembro tem que mudar
    $mes_prox = 1;
    $ano_prox = $ano + 1;
}else{
    $mes_prox = $month + 1;
    $ano_prox = $ano;
}
switch($month){/*notem duas variaveis para o switch para identificar dia e limitar numero de dias*/
    case 1: $mes = "Janeiro";
            $n = 31;
    break;
    case 2: $mes = "Fevereiro";// todo ano bixesto fev tem 29 dias
            $bi = $ano % 4;//anos multiplos de 4 sao bixestos
            if($bi == 0){
                $n = 29;
            }else{
                $n = 28;
            }
    break;
    case 3: $mes = "Março";
            $n = 31;
    break;
    case 4: $mes = "Abril";
            $n = 30;
    break;
    case 5: $mes = "Maio";
            $n = 31;
    break;
    case 6: $mes = "Junho";
            $n = 30;
    break;
    case 7: $mes = "Julho";
            $n = 31;
    break;
    case 8: $mes = "Agosto";
            $n = 31;
    break;
    case 9: $mes = "Setembro";
            $n = 30;
    break;
    case 10: $mes = "Outubro";
            $n = 31;
    break;
    case 11: $mes = "Novembro";
            $n = 30;
    break;
    case 12: $mes = "Dezembro";
            $n = 31;
    break;
}
$pdianu = mktime(0,0,0,$month,1,$ano);//primeiros dias do mes
$dialet = date('D', $pdianu);//escolhe pelo dia da semana
switch($dialet){//verifica que dia cai
    case "Sun": $branco = 0; break;
    case "Mon": $branco = 1; break;
    case "Tue": $branco = 2; break;
    case "Wed": $branco = 3; break;
    case "Thu": $branco = 4; break;
    case "Fri": $branco = 5; break;
    case "Sat": $branco = 6; break;
}   

    print '<div class="overlay"></div>' ;         
    print '<table class="tabela" >';
    print '<tr class="container-mes">';
    print '<td class="mes"><a href="http://sugar.tecpar.br/portaldocliente/adriano.php?data='.$dia.'/'.$mes_ant.'/'.$ano_ant.'" title="M�s anterior">  &laquo; </a></td>';/*m�s anterior*/
    print '<td class="mes" colspan="5">'.$mes.'/'.$ano.'</td>';/*mes atual e ano*/
    print '<td class="mes"><a href="http://sugar.tecpar.br/portaldocliente/adriano.php?data='.$dia.'/'.$mes_prox.'/'.$ano_prox.'" title="Pr�ximo m�s">  &raquo; </a></td>';/*Proximo m�s*/
    print '</tr><tr class="container-semana">';
    print '<td class="sem">dom</td>';
    print '<td class="sem">seg</td>';
    print '<td class="sem">ter</td>';
    print '<td class="sem">qua</td>';
    print '<td class="sem">qui</td>';
    print '<td class="sem">sex</td>';
    print '<td class="sem">sab</td>';
    print '</tr><tr>';
    $dt = 1;
    if($branco > 0){
        for($x = 0; $x < $branco; $x++){
             print '<td>&nbsp;</td>';
            $dt++;
        }
    }
    for($i = 1; $i <= $n; $i++ ){
        $dtevento = $ano."-".$month."-".$i;
        $sql= "SELECT * FROM homologacao_sugarcrm.ant_pedido pd WHERE pd.ped_status = 'Pendente' AND pd.deleted =0 AND pd.ped_data = '$dtevento'"; //AND pd.ped_clie_destino IS NULL
        $sqlag = mysql_query($sql) or die(mysql_error());
        $num = mysql_num_rows($sqlag);/*quantos eventos tem para o mes*/
        $idev = @mysql_result($sqlag, 0, "dtevento");
        $eve = @mysql_result($sqlag, 0, "evento");
        $mes_atual =ltrim(date('m'),"0");
        $add= ((strtotime($ano.'/'.$month.'/'.$i)> time())||(($i == $hoje)&&($month >= $mes_atual)))

        ?'<a href="http://sugar.tecpar.br/portaldocliente/adriano.php?gdata='.$ano.'-'.$month.'-'.$i.'"><img src="images/novo.png" width="10" align ="right"></a>':'';
        if($num > 0){ 
           print '<td class="evt" >';
           print $i.$add.'</a>';
           print '<span>Pedidos: <a href="http://sugar.tecpar.br/portaldocliente/adriano.php?gdata='.$ano.'-'.$month.'-'.$i.'"><img src="images/novo.png" width="10" align ="right">'.$num.'</a></span>';
           print '</td>';
           $dt++;/*incrementa os dias da semana*/
        }elseif($i == $hoje){/*imprime os dia correntes*/
            print '<td class="hj">';
            print $i.$add;
            print '</td>';
            $dt++;
        }elseif($dt == 1){/*imprime os domingos*/
            print '<td class="dom">';
            print $i;
            print '</td>';
            $dt++;
        }else{/*imprime os dias normais*/
            print '<td class="td">';
            print $i.$add;
            print '</td>';
            $dt++;
                }
        if($dt > 7){/*faz a quebra no sabado*/
        print '</tr><tr>';
        $dt = 1;
        }
    }
    print '</tr>';
    print '</table>';

if(isset($_GET['gdata'])){
$dataped=$_GET['gdata'];
  $h1= '<div class="modal" id="modal">
            <div class="modal-header">
             
                <div class="fechaIsso"><a id="fecha" onclick="fecha();">X</a></div>
            </div>

            <div class="modal-body">

                <table width ="350">

                    <tr class="header-table-modal"> 
                        <td>Data:'.$dataped.'</td>
                         
                    </tr>

                    <tr class="header-atributes">
                        <td>Pedido</td>
                       </tr>';
                       $sql1=  mysql_query("SELECT * FROM homologacao_sugarcrm.ant_pedido pd WHERE pd.ped_status = 'Pendente' AND pd.deleted =0 AND pd.ped_data = '$dataped'") or die(mysql_error());
			$numev = mysql_num_rows($sql1);
                       for($j = 0; $j < $numev; $j++){
                        $pedido = @mysql_result($sql1, $j, "ped_codigo_boleto");
                        $backgroun = !($j % 2) ? "#fff" : "#e3e3e3";
                    $h1.= '<tr class="info-modal" bgcolor="'.$backgroun.'">

                            <td><a href="http://sugar.tecpar.br/homologacao/index.php?module=ant_pedido&offset=1&stamp=1414669443066638500&return_module=ant_pedido&action=EditView&record='.$pedido.'">'.$pedido.'</a></td>
                        </tr>';
                    }

                $h1.= '</table> </div> </div>';

                print $h1;
}

?>

<script>
function fecha() {   
   document.getElementById("modal").style.display="none";
} 

</script>



