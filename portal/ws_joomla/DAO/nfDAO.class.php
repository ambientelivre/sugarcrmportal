<?php

class nfDAO {
    public $p = null;
    
    public function nfDAO(){
        //retorna a conexão com o banco de dados Utilizando o PDO
        include_once('conexao.class.php');
        $this->p = new Conexao();
        
    }

    public function listarPedido($nf){
        
//INSERINDO INFORMAÇÕES NO SUGAR
        
        $sql = "SELECT * FROM homologacao_sugarcrm.ant_lista_pedidos
                WHERE id_pedido = '" . $nf->getNf_id() . "'";
        
        try{
            $result = executarQuery($sql);
                
            $i = 0;
            
            while ($l = mysql_fetch_array($result)){
                $pedido[$i]['id'] = $l['id'];
                $pedido[$i]['lote'] = $l['list_lote'];
                $pedido[$i]['qnt'] = $l['list_quantidade'];
                $pedido[$i]['id_pedido'] = $l['id_pedido'];
                $pedido[$i]['qnt_atendida'] = $l['qnt_atendida'];
                
                
                $sql2 = "SELECT name FROM homologacao_sugarcrm.ant_produto WHERE id = '" . $l['list_id_produto'] . "'";
                
                $prod = executarQuery($sql2);

                while ($pr = mysql_fetch_array($prod)){
                    $pedido[$i]['produto'] = $pr['name'];  
                }
                
                $i++;

            }

        }catch(Exception $e) {
            echo '<pre>';
            print_r($e->getMessage());
            echo '</pre>';
            exit();
        }
        
        return $pedido;
        
        exit();
        
        }

        public function atender($nf) {
            
            $sql = "UPDATE homologacao_sugarcrm.ant_pedido
                    SET ped_status = '" . $nf['tp_at'] . "'
                    WHERE id = '" . $nf['id_pedido'] . "'";
            
            executarQuery($sql);
            
            
            $i = 0;
            
            foreach($nf['id_produto'] as $at){
                $sql2 = "UPDATE homologacao_sugarcrm.ant_lista_pedidos 
                        SET qnt_atendida = " . $nf['qnt_atendida'][$i] . " WHERE id = " . $at;
                
                $alterar = executarQuery($sql2);
                
                $i++;
                
            }
         
            $_SESSION['sucess'] = true;
            $_SESSION['categoria'] = 'Atendimento';
            $_SESSION['link'] = 'http://sugar.tecpar.br/portaldocliente/index.php/atendimento-de-pedido-nf-tecpar';
            $_SESSION['msg_sucess'] = 'Atendimento realizado com sucesso';
            
            return;
            
        }
        
}

?>
