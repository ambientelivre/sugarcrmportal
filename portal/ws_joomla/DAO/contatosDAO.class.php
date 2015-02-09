<?php

class contatosDAO {
    public $p = null;
    
    public function contatosDAO(){
        //retorna a conexão com o banco de dados Utilizando o PDO
        include_once('conexao.class.php');
        $this->p = new Conexao();
        
    }
    
        public function inserirContato($contato){
            
        $key = date('ymdHis');
            
        //INSERINDO INFORMAÇÕES NO SUGAR
        
        $sql = "INSERT INTO homologacao_sugarcrm.contacts(
            id,
            first_name,
            last_name,
            title,
            phone_work,
            phone_mobile
            )
            VALUES (
                 " . $key . ",
                '" . $contato->getCt_nome() . "', 
                '" . $contato->getCt_sobrenome() . "', 
                '" . $contato->getCt_cargo() . "', 
                '" . $contato->getCt_telefone() . "', 
                '" . $contato->getCt_celular() . "'
            );"; 
        
            try {
                
                inserirDados($sql);
                
            } catch(Exception $e) {

                echo '<pre>';
                print_r($e->getMessage());
                echo '</pre>';
                
                exit();
            }
            
            if($contato->getCt_regional() != ''){
                
                $sql = "INSERT INTO homologacao_sugarcrm.ant_regionais_contacts_c(
                id,
                ant_region4141gionais_ida,
                ant_region7672ontacts_idb
                )
                VALUES (
                     " . $key . ",
                     " . $contato->getCt_regional() . ",
                     " . $key . "
                );"; 
                

            }else if($contato->getCt_secretaria() != ''){

                $sql = "INSERT INTO homologacao_sugarcrm.ant_secretaias_contacts_c(
                id,
                ant_secretb807etarias_ida,
                ant_secret2566ontacts_idb
                )
                VALUES (
                     " . $key . ",
                     " . $contato->getCt_secretaria() . ",
                     " . $key . "
                );"; 

            }
            
             try{
                    inserirDados($sql);

                    $_SESSION['sucess'] = true;
                    $_SESSION['categoria'] = 'Contato';
                    $_SESSION['link'] = 'http://sugar.tecpar.br/portaldocliente/index.php/manutencao-de-contatos';
                    $_SESSION['msg_sucess'] = 'Contato cadastrado(a) com sucesso.';

                    return;

                } catch(Exception $e) {

                    echo '<pre>';
                    print_r($e->getMessage());
                    echo '</pre>';

                    exit();
                }
            
        }
        
        public function pesquisaContato($sql,$key){
            
            
            
            
//  PARA MOSTRAR A TELA COM TODAS AS INFORMAÇÔES DO CONTATO E ALTERAR
            if($key == 'AC' || $key == 'EX'){
                try{
                    
                    $retorno = executarQuery($sql);
                    
                    $contato = array();
                    $con1 = array();


                    while($l = mysql_fetch_array($retorno)){
                        $con1['con_id'] = $l['id'];
                        $con1['con_nome'] = $l['first_name'];
                        $con1['con_sobrenome'] = $l['last_name'];
                        $con1['con_telefone'] = $l['phone_work'];
                        $con1['con_celular'] = $l['phone_mobile'];
                        $con1['con_cargo'] = $l['title'];

                        $contato = $con1;

                    }
                    
                    return $contato;
                    
                }catch(Exception $e) {
                    echo '<pre>';
                    print_r($e->getMessage());
                    echo '</pre>';
                    exit();
                }
                
            }else{
                
//          PARA SOMENTE LISTAR TODOS OS CONTATOS
                try {

                    $retorno = executarQuery($sql);

                    if($_REQUEST['ct_reg'] != ''){
                        
                        $i = 0;
                        while($l = mysql_fetch_array($retorno)){
                            $contato[$i] = $l['ant_region7672ontacts_idb'];
                            $i++;
                        }
                        
                        $j = 0;
                        foreach ($contato as $con){

                            $sql = "SELECT * FROM homologacao_sugarcrm.contacts
                                    WHERE id = '" . $con . "'";

                            try{
                                $result = executarQuery($sql);

                                while ($l = mysql_fetch_array($result)){
                                    $contact[$j]['id'] = $l['id'];
                                    $contact[$j]['nome'] = $l['first_name'];
                                    $contact[$j]['sobrenome'] = $l['last_name'];
                                    $contact[$j]['cargo'] = $l['title'];
                                    $contact[$j]['telefone'] = $l['phone_work'];
                                    $contact[$j]['celular'] = $l['phone_mobile'];
                                }

                            }catch(Exception $e) {
                                echo '<pre>';
                                print_r($e->getMessage());
                                echo '</pre>';
                                exit();
                            }

                            $j++;
                        }
                        
                    }else if($_REQUEST['ct_sec'] != ''){

                        $i = 0;
                        while($l = mysql_fetch_array($retorno)){
            //                $contato[$i] = $l['id'];
                            $contato[$i] = $l['ant_secret2566ontacts_idb'];
                            $i++;

                        }

                        $j = 0;
                        foreach ($contato as $con){

                            $sql = "SELECT * FROM homologacao_sugarcrm.contacts
                                    WHERE id = '" . $con . "'";

                            try{
                                $result = executarQuery($sql);

                                while ($l = mysql_fetch_array($result)){
                                    $contact[$j]['id'] = $l['id'];
                                    $contact[$j]['nome'] = $l['first_name'];
                                    $contact[$j]['sobrenome'] = $l['last_name'];
                                    $contact[$j]['cargo'] = $l['title'];
                                    $contact[$j]['telefone'] = $l['phone_work'];
                                    $contact[$j]['celular'] = $l['phone_mobile'];
                                }

                            }catch(Exception $e) {
                                echo '<pre>';
                                print_r($e->getMessage());
                                echo '</pre>';
                                exit();
                            }

                            $j++;
                        }
                    }
                    
                  
                }

                catch(Exception $e) {
                    echo '<pre>';
                    print_r($e->getMessage());
                    echo '</pre>';
                    exit();
                }
                
            }
            
            $_SESSION['sucess'] = true;
            $_SESSION['categoria'] = 'Contato';
            $_SESSION['link'] = 'http://sugar.tecpar.br/portaldocliente/index.php/manutencao-de-contatos';
            $_SESSION['msg_sucess'] = 'Busca realizada com sucesso';
            
            return $contact;
        
    }
    
    public function buscaRegional($reg_sec_id){
        
        $sql = "SELECT * FROM homologacao_sugarcrm.ant_regionais WHERE reg_sec_id = " . $reg_sec_id;

        
        $retorno = executarQuery($sql);

        $i = 0;
        while($l = mysql_fetch_array($retorno)){
            $regional[$i]['id'] = $l['id'];
            $regional[$i]['nome'] = $l['name'];
            $i++;
        }
        
        echo json_encode($regional);
        
    }
    
    public function altertarContato($contato){
        
        $sql = "UPDATE homologacao_sugarcrm.contacts SET
                    first_name = '" . $contato->getCt_nome() . "',
                    last_name = '" . $contato->getCt_sobrenome() . "',
                    title = '" . $contato->getCt_cargo() . "',
                    phone_work = '" . $contato->getCt_telefone() . "',
                    phone_mobile = '" . $contato->getCt_celular() . "'
                WHERE id = " . $contato->getCt_id() . ";";
                
            try{
                $result = executarQuery($sql);

            }catch(Exception $e) {
                echo '<pre>';
                print_r($e->getMessage());
                echo '</pre>';
                exit();
            }
        
        $_SESSION['sucess'] = true;
        $_SESSION['categoria'] = 'Contato';
        $_SESSION['link'] = 'http://sugar.tecpar.br/portaldocliente/index.php/manutencao-de-contatos';
        $_SESSION['msg_sucess'] = 'Altera&ccedil;&atilde;o realizada com sucesso';
        

        $sql = "SELECT * FROM homologacao_sugarcrm.contacts WHERE id = " . $contato->getCt_id() . " LIMIT 0 , 30";

        try{
            $result = executarQuery($sql);

            while ($l = mysql_fetch_array($result)){
                $contatos['con_id'] = $l['id'];
                $contatos['con_nome'] = $l['first_name'];
                $contatos['con_sobrenome'] = $l['last_name'];
                $contatos['con_cargo'] = $l['title'];
                $contatos['con_telefone'] = $l['phone_work'];
                $contatos['con_celular'] = $l['phone_mobile'];
            }

        }catch(Exception $e) {
            echo '<pre>';
            print_r($e->getMessage());
            echo '</pre>';
            exit();
        }
        
        return $contatos;
    }
    
    public function excluiContato($contato){
        
        $sql = "DELETE FROM homologacao_sugarcrm.contacts WHERE id = " . $contato->getCt_id();
        
        try{
            $result = executarQuery($sql);

        }catch(Exception $e) {
            echo '<pre>';
            print_r($e->getMessage());
            echo '</pre>';
            exit();
        }
        
        $_SESSION['sucess'] = true;
        $_SESSION['categoria'] = 'Contato';
        $_SESSION['link'] = 'http://sugar.tecpar.br/portaldocliente/index.php/manutencao-de-contatos';
        $_SESSION['msg_sucess'] = 'Contato Excluido com sucesso.';
        
        return;
        
    }
    
}

?>