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

function inserirDados($sql){
        
 
    $result = mysql_query($sql);
            
    if(!$result){
        
        $mensagem  = 'Inserção inválida: ' . mysql_error() . "\n\n";
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
    
    function geraTxt(){
        
        $fp = fopen("../lib/erpaccess.txt", "a");
        
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
        
        // TROCA A BARRA INVERTIDA POR TRAÇO
        $data = str_replace('/', '-', $data);
        
        // INVERTE DATA PARA EVITAR PROBLEMAS EM CONSULTAS SQL
        $data = date("Y-m-d", strtotime($data));        
        
        return $data;
    }
    
    function converte_data_BR($data){
        // TROCA A BARRA INVERTIDA POR TRAÇO
        $data = str_replace('-', '/', $data);
        
        // INVERTE DATA PARA EVITAR PROBLEMAS EM CONSULTAS SQL
        $data = date("d/m/Y", strtotime($data));        
        
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

?>
