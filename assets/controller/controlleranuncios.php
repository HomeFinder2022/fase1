<?php

require_once 'connection.php';

class Pesquisa{


      function filtroanuncioss($concelho, $tipneg , $tipimovel ,  $precomin ,  $precomax, $estado){
        global $conn;
        $msg="";
        $sql = "SELECT imovel.idimovel, imovel.morada, imovel.numwc, imovel.areabruta, imovel.anoconstrucao,listafotos.fotos, 
        concelho.nome, tiponegocio.idtiponegocio, tiponegocio.descricao AS tiponegocio, tipoimovel.descricao as tipimovel, 
        imovel.idestado,imoveisvenda.precovenda, tipologia.idtipologia
        
        FROM imovel, listafotos, concelho, imoveisvenda, tipologia, tiponegocio , estado, tipoimovel,tipocondicao
      
        WHERE listafotos.idimovel = imovel.idimovel 
        AND imovel.idconcelho = concelho.idconcelho 
        AND imoveisvenda.idimovel = imovel.idimovel 
        AND imovel.idtipologia = tipologia.idtipologia 
        AND imovel.idtiponegocio = tiponegocio.idtiponegocio 
        AND imovel.idestado = estado.idestado
        AND imovel.idtipoimovel= tipoimovel.idtipoimovel
        AND imovel.idcondicao = tipocondicao.idcondicao
        AND imovel.idconcelho =".$concelho."
        AND tiponegocio.idtiponegocio =".$tipneg."
        AND tipoimovel.idtipoimovel=".$tipimovel."
        AND tipocondicao.idcondicao = ".$estado."
        AND imoveisvenda.precovenda BETWEEN ".$precomin." AND ".$precomax;
        
    //    echo($sql);
        
        $result = $conn->query($sql);
        // echo($result)
        if ($result->num_rows > 0) {
        // output data of each row
        while($row = $result->fetch_assoc()) {
            if($row ['idestado'] == 2){
 
                $msg .= "<div class='col-md-4'>";
                $msg .= "<div class='card-box-a card-shadow'>";
        
                $msg .= "<div class='img-box-a'>";
                $msg .= "<img src='".$row['fotos']."' class='img-a img-fluid-anuncios'>";
                $msg .= "</div> ";
                $msg .= "<div class='card-overlay'>";
                $msg .= "<div class='card-overlay-a-content'>";
        
                
                $msg .= "<div class='card-header-a'>"; 
                $msg .= "<h2 class='card-title-a'>";            
                $msg .= "<a >" .$row['nome']. "<br/>".$row['morada']."</a>";            
                $msg .= "</h2>";           
                $msg .= "</div>"; 
        
        
                if($row ['idtiponegocio'] == 1){
                  $query1 = $this -> infoImovelVenda();
         
        
                  $msg .= "<div class='card-body-a'>";
                  $msg .= "<div class='price-box d-flex'>";
                  $msg .= "<span class='price-a' >" .$row['tiponegocio']. " | ".number_format((string)$row['precovenda'], 0, '.', ' ')."€</span>";
                  $msg .= "</div>";
        
        
        
        
                }else if($row ['idtiponegocio']  == 2){
        
                  $resp = $this -> infoImovelArrendamento($row['idimovel'] );
                  $resp = json_decode($resp, TRUE);
        
            $msg .= "<div class='card-body-a'>";
            $msg .= "<div class='price-box d-flex'>";
            $msg .= "<span class='price-a' >" .$resp['tiponegocio']. " | ".number_format((string)$resp['precorenda'], 0, '.', ' ')."€</span>";
            $msg .= "</div>";
                  
        
        
                }else if($row ['idtiponegocio']  == 3){
                  $resp1 = $this -> infoImovelFerias($row['idimovel']);
                  $resp1 = json_decode($resp1, TRUE);
                
            
        
            $msg .= "<div class='card-body-a'>";
            $msg .= "<div class='price-box d-flex'>";
            $msg .= "<span class='price-a' >" .$resp1['tiponegocio']. " | ".number_format((string)$resp1['precopnoite'], 0, '.', ' ')."€</span>";
            $msg .= "</div>";
        
        
        
        
                }
        
              
              $msg .= "<a href='infoImovel.php' class='link-a' onclick='infoImovelPagina(".$row['idimovel'].")'>Mais Informações";
        
              $msg .= "<span  class='bi bi-chevron-right'></span>";
              $msg .= "</a>";
              $msg .= "</div>";                  
              $msg .= "<div class='card-footer-a'>" ;
              $msg .= "<ul class='card-info d-flex justify-content-around'>"; 
              $msg .= "<li>";
              $msg .= "<h4 class='card-info-title' >Tipologia</h4>";
              $msg .= "<span >".$row['tiponegocio']." ";
              $msg .= "</span>";
              $msg .= "</li>";
              $msg .= "<li>";                  
              $msg .= "<h4 class='card-info-title'>WC's</h4>";
              $msg .= "<span >" .$row['numwc']."</span>";
              $msg .= "</li>";            
              $msg .= "<li>";
              $msg .= "<h4 class='card-info-title' >Área Bruta</h4>";                    
              $msg .= "<span>".$row['areabruta']."</span>";
              $msg .= "</li>";                      
              $msg .= "<li>";
              $msg .= "<h4 class='card-info-title' >Ano</h4>";
              $msg .= "<span>".$row['anoconstrucao']."</span>";
              $msg .= "</li>";
              $msg .= "</ul>";
              $msg .= "</div>";
              $msg .= "</div>";
              $msg .= "</div>";
              $msg .= "</div>";
              $msg .= "</div>";
        
        
        
        
                
                }
                  
        
               
        }
        } else {
          $msg = "Sem Resultados";
        
        }
      
        $conn->close();
      
        return $msg;
      
      }









      function fil($concelho1, $tipneg1 , $tipimovel1 ,  $precomin1 ,  $precomax1, $estado1){
        global $conn;
        $msg="";
        $sql = "SELECT imovel.idimovel, imovel.morada, imovel.numwc, imovel.areabruta, imovel.anoconstrucao,listafotos.fotos, 
        concelho.nome, tiponegocio.idtiponegocio, tiponegocio.descricao AS tiponegocio, tipoimovel.descricao as tipimovel, 
        imovel.idestado,imoveisvenda.precovenda, tipologia.idtipologia
        
        FROM imovel, listafotos, concelho, imoveisvenda, tipologia, tiponegocio , estado, tipoimovel,tipocondicao
      
        WHERE listafotos.idimovel = imovel.idimovel 
        AND imovel.idconcelho = concelho.idconcelho 
        AND imoveisvenda.idimovel = imovel.idimovel 
        AND imovel.idtipologia = tipologia.idtipologia 
        AND imovel.idtiponegocio = tiponegocio.idtiponegocio 
        AND imovel.idestado = estado.idestado
        AND imovel.idtipoimovel= tipoimovel.idtipoimovel
        AND imovel.idcondicao = tipocondicao.idcondicao
        AND imovel.idconcelho =".$concelho1."
        AND tiponegocio.idtiponegocio =".$tipneg1."
        AND tipoimovel.idtipoimovel=".$tipimovel1."
        AND tipocondicao.idcondicao = ".$estado1."
        AND imoveisvenda.precovenda BETWEEN ".$precomin1." AND ".$precomax1;
        
    //    echo($sql);
        
        $result = $conn->query($sql);
        // echo($result)
        if ($result->num_rows > 0) {
        // output data of each row
        while($row = $result->fetch_assoc()) {
            if($row ['idestado'] == 2){
 
                $msg .= "<div class='col-md-4'>";
                $msg .= "<div class='card-box-a card-shadow'>";
        
                $msg .= "<div class='img-box-a'>";
                $msg .= "<img src='".$row['fotos']."' class='img-a img-fluid-anuncios'>";
                $msg .= "</div> ";
                $msg .= "<div class='card-overlay'>";
                $msg .= "<div class='card-overlay-a-content'>";
        
                
                $msg .= "<div class='card-header-a'>"; 
                $msg .= "<h2 class='card-title-a'>";            
                $msg .= "<a >" .$row['nome']. "<br/>".$row['morada']."</a>";            
                $msg .= "</h2>";           
                $msg .= "</div>"; 
        
        
                if($row ['idtiponegocio'] == 1){
                  $query1 = $this -> infoImovelVenda();
         
        
                  $msg .= "<div class='card-body-a'>";
                  $msg .= "<div class='price-box d-flex'>";
                  $msg .= "<span class='price-a' >" .$row['tiponegocio']. " | ".number_format((string)$row['precovenda'], 0, '.', ' ')."€</span>";
                  $msg .= "</div>";
        
        
        
        
                }else if($row ['idtiponegocio']  == 2){
        
                  $resp = $this -> infoImovelArrendamento($row['idimovel'] );
                  $resp = json_decode($resp, TRUE);
        
            $msg .= "<div class='card-body-a'>";
            $msg .= "<div class='price-box d-flex'>";
            $msg .= "<span class='price-a' >" .$resp['tiponegocio']. " | ".number_format((string)$resp['precorenda'], 0, '.', ' ')."€</span>";
            $msg .= "</div>";
                  
        
        
                }else if($row ['idtiponegocio']  == 3){
                  $resp1 = $this -> infoImovelFerias($row['idimovel']);
                  $resp1 = json_decode($resp1, TRUE);
                
            
        
            $msg .= "<div class='card-body-a'>";
            $msg .= "<div class='price-box d-flex'>";
            $msg .= "<span class='price-a' >" .$resp1['tiponegocio']. " | ".number_format((string)$resp1['precopnoite'], 0, '.', ' ')."€</span>";
            $msg .= "</div>";
        
        
        
        
                }
        
              
              $msg .= "<a href='infoImovel.php' class='link-a' onclick='infoImovelPagina(".$row['idimovel'].")'>Mais Informações";
        
              $msg .= "<span  class='bi bi-chevron-right'></span>";
              $msg .= "</a>";
              $msg .= "</div>";                  
              $msg .= "<div class='card-footer-a'>" ;
              $msg .= "<ul class='card-info d-flex justify-content-around'>"; 
              $msg .= "<li>";
              $msg .= "<h4 class='card-info-title' >Tipologia</h4>";
              $msg .= "<span >".$row['tiponegocio']." ";
              $msg .= "</span>";
              $msg .= "</li>";
              $msg .= "<li>";                  
              $msg .= "<h4 class='card-info-title'>WC's</h4>";
              $msg .= "<span >" .$row['numwc']."</span>";
              $msg .= "</li>";            
              $msg .= "<li>";
              $msg .= "<h4 class='card-info-title' >Área Bruta</h4>";                    
              $msg .= "<span>".$row['areabruta']."</span>";
              $msg .= "</li>";                      
              $msg .= "<li>";
              $msg .= "<h4 class='card-info-title' >Ano</h4>";
              $msg .= "<span>".$row['anoconstrucao']."</span>";
              $msg .= "</li>";
              $msg .= "</ul>";
              $msg .= "</div>";
              $msg .= "</div>";
              $msg .= "</div>";
              $msg .= "</div>";
              $msg .= "</div>";
        
        
        
        
                
                }
                  
        
               
        }
        } else {
          $msg = "Sem Resultados";
        
        }
      
        $conn->close();
      
        return $msg;
      
      }































       
      function infoImovelVenda(){

        global $conn;
        $msg="";
      
        $sql = "SELECT tiponegocio.descricao as tiponegocio, imoveisvenda.precovenda
        
        FROM imoveisvenda , imovel, tiponegocio
       
        WHERE imoveisvenda.idimovel = imovel.idimovel AND
        imovel.idtiponegocio = tiponegocio.idtiponegocio";
      
      
      
        
        if ($conn->query($sql) === TRUE) {
      
      
      
          $msg  = "";
      
      
      
        } else {
          $msg = "Error: " . $sql . "<br>" . $conn->error;
        }
        
        return $msg;
      }
      
      
      
      
      
      
      
      
      
      
      function infoImovelArrendamento($idimovel){
      
        global $conn;
      
        $sql = "SELECT tiponegocio.descricao, imoveisarrendamento.precorenda
        
        FROM imoveisarrendamento, imovel, tiponegocio
       
        WHERE imoveisarrendamento.idimovel = imovel.idimovel AND
        imovel.idtiponegocio = tiponegocio.idtiponegocio AND
        imoveisarrendamento.idimovel = ".$idimovel;
      
      
        $result = $conn->query($sql);
      
        $msg = "";
      
        if ($result->num_rows > 0) {
            // output data of each row
            while($row = $result->fetch_assoc()) {
      
      
      
            $precorenda = $row['precorenda'];
            $descricao = $row['descricao'];
      
      
              }
      
            }
      
              $resp = array("precorenda"=>$precorenda, "descricao"=>$descricao);
              $resp = json_encode($resp);
      
      
              return $resp;
           
      
      }
      
      


 
      function infoImovelFerias(){

        global $conn;
        $msg="";
      
        $sql = "SELECT tiponegocio.descricao as descr, ferias.precopnoite
        
        FROM imovel, ferias, tiponegocio
        
       
        WHERE  ferias.idimovel = imovel.idimovel
        AND imovel.idtiponegocio = tiponegocio.idtiponegocio";
      
      
      
        
        if ($conn->query($sql) === TRUE) {
      
      
      
          $msg  = "";
      
      
      
        } else {
          $msg = "Error: " . $sql . "<br>" . $conn->error;
        }
        
        return $msg;
      }
      






      }























