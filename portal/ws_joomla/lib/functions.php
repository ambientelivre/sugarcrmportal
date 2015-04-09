<?php
ini_set('mssql.charset', 'UTF-8');



function executarQuery($sql){
   
    $result = mysql_query($sql);
    
    if(!$result){
       
        $mensagem  = 'Consulta inválida: ' . mysql_error() . "\n\n";
        $mensagem .= 'Seu código: ' . $sql;
        
        throw new Exception($mensagem);
        
        return; 
        
    }else{
        return $result;
    }   
}

//FUNÇÃO QUE REALIZA A PESQUISA NO ESTOQUE
    function consultarEstoque($sql){
        
        $result = mysql_query($sql);        
        $l = mysql_fetch_array($result);
        
        if(!$result){

            $mensagem  = 'Query inválida: ' . mysql_error() . "\n\n";
            $mensagem .= 'Seu código: ' . $sql;

            throw new Exception($mensagem);

            return; 

        } else {
            return $l;
        }
    
    }
    
    // Função não desenvolvida até então...
    function gerarTxtAtendimentoPedido($arrayPedido){
        
        $nomePedido = "";
        $fp = fopen(LIB_PATH."/pedido/".$nomePedido.".txt", "a");
        
        if(!$fp){            
            fclose($fp);
            $mensagem = 'Arquivo não pode ser aberto ou inexistente.';
            throw new Exception($mensagem);
            return;             
        } else {            
            $escreve = fwrite($fp, "exemplo de escrita");        
            fclose($fp);            
            return;
        }
        
    }
    
    function data_pt ($dia, $mes){
        if($mes == 'January'){
            $mes = 'janeiro';
        }else if($mes == 'February'){
            $mes = 'fevereiro';

        }else if($mes == 'March'){
            $mes = 'março';

        }else if($mes == 'April'){
            $mes = 'abril';

        }else if($mes == 'May'){
            $mes = 'maio';

        }else if($mes == 'June'){
            $mes = 'junho';

        }else if($mes == 'July'){
            $mes = 'julho';

        }else if($mes == 'August'){
            $mes = 'agosto';

        }else if($mes == 'September'){
            $mes = 'setembro';

        }else if($mes == 'October'){
            $mes = 'outubro';

        }else if($mes == 'November'){
            $mes = 'novembro';

        }else if($mes == 'December'){
            $mes = 'dezembro';
        }

        if($dia == 'Sunday'){
            $dia = 'domingo';

        }else if($dia == 'Monday'){
            $dia = 'segunda';

        }else if($dia == 'Tuesday'){
            $dia = 'terça';

        }else if($dia == 'Wednesday'){
            $dia = 'quarta';

        }else if($dia == 'Thursday'){
            $dia = 'quinta';

        }else if($dia == 'Friday'){
            $dia = 'sexta';

        }else if($dia == 'Saturday'){
            $dia = 'sabado';
        }

        $data['dia'] = $dia;
        $data['mes'] = $mes;

        return $data;
    }
    
    function converte_data($data){        
        // CONVERTER UMA DATA DE FORMATO BRASILEIRO PARA INSERIR NO MYSQL
        $data = implode("-",array_reverse(explode("/",$data)));
        return $data;
    }
    
    function converte_data_BR($data){
        // CONVERTE DATA VINDA DO MYSQL PARA O FORMATO PT-BR      
        $data = implode("/",array_reverse(explode("-",$data)));
        return $data;
    }
    
    function UpLoadAntigenosPN($diretorio){
        
        $target_file = $diretorio . basename( $_FILES["arquivo"]["name"]);

        $uploadOk=1;
        
        $imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);

//      Check if image file is a actual image or fake image
        if(isset($_POST["submit"])) {
            $check = getimagesize($_FILES["arquivo"]["tmp_name"]);
            if($check !== false) {
                echo "File is an image - " . $check["mime"] . ".";
                $uploadOk = 1;
            } else {
                echo "File is not an image.";
                $uploadOk = 0;
            }
        }

        // Check if file already exists
        if (file_exists($target_file)) {
            echo "Sorry, file already exists.";
            $uploadOk = 0;
        }

        // Check file size
        if ($_FILES["arquivo"]["size"] > 500000) {
            echo "Sorry, your file is too large.";
            $uploadOk = 0;
        }

//    Allow certain file formats
        if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
        && $imageFileType != "gif" && $imageFileType != "pdf") {
            echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
            $uploadOk = 0;
        }

        // Check if $uploadOk is set to 0 by an error
        if ($uploadOk == 0) {
            echo "Sorry, your file was not uploaded.";
        // if everything is ok, try to upload file
        } else {
            if (move_uploaded_file($_FILES["arquivo"]["tmp_name"], $target_file)) {

                echo "The file ". basename( $_FILES["arquivo"]["name"]). " has been uploaded." . $target_file;
            } else {
                echo "Sorry, there was an error uploading your file.";

            }
        }
        
        return;
        
    }
    
    function ecoPre($variavel){
        
        echo '<pre>';
        print_r($variavel);
        echo '</pre>';
        
        return;
    }

    function checkProfile($prefix, $usuario_id, $profile) {
        $sql = "SELECT * FROM ".$prefix."user_profiles 
                    WHERE user_id=" . $usuario_id . "
                    AND profile_key = 'profile.".$profile."'";
        //echo $sql."<br>";
        
        $result = mysql_query($sql);

        if($us = mysql_fetch_array($result)){
            $profile['id'] = $us['user_id'];
            $profile['key'] = $us['profile_key']; 
            $profile['value'] = $us['profile_value']; 
            return $profile;            
        } else {
            return array();
        }        
    }
    
    /***** Evita ter que replicar opções de formulário em várias páginas php */  
    function populateTipoLogradouroList($selected = "") {
        $tipoLogradouroArray = array(
            array("", "Selecione um logradouro"),
            array("Rua", "Rua"),
            array("Avenida", "Avenida"),
            array("Rodovia", "Rodovia"),
            array("Travessa", "Travessa"),
            array("Praça", "Praça"),
            array("Quadra", "Quadra"),
            array("Alameda", "Alameda"),
            array("Beco", "Beco"),
            array("Vila", "Vila"),
            array("Estrada", "Estrada"),
            array("Passagem", "Passagem"),
            array("Viela", "Viela"),
            array("Servidão", "Servidão")            
        );
        
        for ($i = 0; $i < count($tipoLogradouroArray); $i++) {
            if ($tipoLogradouroArray[$i][0] == $selected) {
                echo "<option value=".$tipoLogradouroArray[$i][0]." selected>".$tipoLogradouroArray[$i][1]."</option>";  
            } else {
                echo "<option value=".$tipoLogradouroArray[$i][0].">".$tipoLogradouroArray[$i][1]."</option>";    
            }
        } 
    }
    
    function populateEstadoList($selected = "") {        
       $estadoArray = array(
           array("", "Selecione um estado"  ),
           array("AC", "AC"),
           array("AL", "AL"),
           array("AM", "AM"),
           array("AP", "AP"),
           array("BA", "BA"),
           array("CE", "CE"),
           array("DF", "DF"),
           array("ES", "ES"),
           array("GO", "GO"),
           array("MA", "MA"),
           array("MG", "MG"),
           array("MS", "MS"),
           array("MT", "MT"),
           array("PA", "PA"),
           array("PB", "PB"),
           array("PE", "PE"),
           array("PI", "PI"),
           array("PR", "PR"),
           array("RJ", "RJ"),
           array("RN", "RN"),
           array("RO", "RO"),
           array("RR", "RR"),
           array("RS", "RS"),
           array("SC", "SC"),
           array("SE", "SE"),
           array("SP", "SP"),
           array("TO", "TO")                   
           );
        
        for ($i = 0; $i < count($estadoArray); $i++) {
            if ($estadoArray[$i][0] == $selected) {
                echo "<option value=".$estadoArray[$i][0]." selected>".$estadoArray[$i][1]."</option>";                
            } else {
                echo "<option value=".$estadoArray[$i][0].">".$estadoArray[$i][1]."</option>";   
            }
        } 
    }
    
    function populateMotivoProdutoInutilizado() {
        $prodInutArray = array(
            array("", "Selecione um motivo"  ),
            array("Data de validade vencida", "Data de validade vencida"  ),
            array("Quebra de frasco", "Quebra de frasco"  ),
            array("Outros - vide observação", "Outros - vide observação"  )
        );
        
        for ($i = 0; $i < count($prodInutArray); $i++) {
           echo '<option value="'.$prodInutArray[$i][0].'">'.$prodInutArray[$i][1].'</option>';           
        } 
    }
    
    function populateOptionSelect($class, $keyword, $object_array, $extra_data = "") { 
        $abreviated = substr($class, 0, 3);
        $label = ucfirst($class);
        
        $content = "";
        $content.= '<label for="select_'.$class.'">'.$label.'</label>';        
        $content.= '<select class="chosen-select select_'.$class.'_'.$keyword.'" name="'.$abreviated.'_'.$keyword.'" >';
        $content.= '<option value="">Selecione '.$class.'</option>';            
        foreach ($object_array as $object){
            $content.= '<option value="'.$object[$abreviated.'_id'].'" data-'.$extra_data.'="'.$object[$abreviated.'_'.$extra_data].'">'.$object[$abreviated.'_name'].'</option>'; 
        }    
        $content.= '</select>';
        echo $content;   
    }
    
    /***** FIM POPULATES*/    
?>
