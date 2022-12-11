<?php

require_once 'connection.php';

class Utilizador{

    function registaUtilizador($nif, $nome , $apelido ,$pass , $morada, $codpostal, $idade, $tel,$email, $tipoutilizador, $pnascimento,$img ){
        global $conn;

        $sql = "INSERT INTO utilizador (nif,nome,apelido,pw,morada,codigopostal,idade,telemovel,email,idtipoutilizador,idpais ) 
        VALUES('".$nif."', '".$nome."', '".$apelido."','".$pass."','".$morada."','".$codpostal."','".$idade."',
        '".$tel."','".$email."','".$tipoutilizador."','".$pnascimento."')";

        $msg = "";
        
        if ($conn->query($sql) === TRUE) {

          

          $resp = $this->upload($img, $nif);
          $resp = json_decode($resp, true);

          if($resp['flag']){
            $sqlImagem = "UPDATE utilizador SET foto = '".$resp['target']."' WHERE nif =".$nif;

            if ($conn->query($sqlImagem) === TRUE) {

                $msg = "Utilizador Registado com Sucesso";
            }else{
                $msg = "Error: " . $sqlImagem . "<br>" . $conn->error;
            }
        }else{
            $msg = "A imagem nao foi colocada no servidor! Mas foi registado em base de dados";

        }

        

    } else {
      $msg = "Error: " . $sql . "<br>" . $conn->error;
    }
    
        
        $conn->close();

        return $msg;
    }


    function upload($img, $nif){

        $dir = "../teste".$nif."/";
        $dir2 = "assets/teste".$nif."/";
        $flag = false;
        $targetBD = "";
  
        if(!is_dir($dir)){
            if(!mkdir($dir, 0777, TRUE)){
                die("Não é possivel criar o diretório");
            }
        }
        if(array_key_exists('img',$img)){
          if(is_array($img)){
            if(is_uploaded_file($img['img']['tmp_name'])){
                $fonte = $img['img']['tmp_name'];
                $ficheiro = $img['img']['name'];
                $end = explode(".", $ficheiro);
                $extensao = end($end);
  
                $newName = "Imagens".date('YmdHis').".".$extensao;
  
                $target = $dir.$newName;
                $targetBD = $dir2.$newName;
  
                // $flag = move_uploaded_file($fonte, $target);

                
        if(move_uploaded_file($fonte, $target)){
          $flag = true;
          // criar o meu ficheiro
        }
  
            }
  
        }
      }
        return(json_encode(array(
            "flag" => $flag,
            "target" => $targetBD
        )));
  
    }


  function getTipoUtilizador(){

    global $conn;
  
    $sql = "SELECT idtipoutilizador, descricao FROM tipoutilizador";
    $result = $conn->query($sql);
    $msg = "<option value='-1'>Escolha uma opção</option>";
    if ($result->num_rows > 0) {
        // output data of each row
        while($row = $result->fetch_assoc()) {
            $msg .= "<option value='".$row['idtipoutilizador']."'>".$row['descricao']."</option>";
        }
    } else {
        $msg = "<option value='-1'>Sem Resultados</option>";
    }
    $conn->close();
  
    return $msg;
  
  
  
  }

  function getPais(){

    global $conn;
  
    $sql = "SELECT idpais, nome FROM pais";
    $result = $conn->query($sql);
    $msg = "<option value='-1'>Escolha uma opção</option>";
    if ($result->num_rows > 0) {
        // output data of each row
        while($row = $result->fetch_assoc()) {
            $msg .= "<option value='".$row['idpais']."'>".$row['nome']."</option>";
        }
    } else {
        $msg = "<option value='-1'>Sem Resultados</option>";
    }
    $conn->close();
  
    return $msg;
  
  
  
  }

  function tabProdutos(){
    global $conn;
    session_start();
 
     $sql ="SELECT product.id, product.img, product.descricao, product.valor, type_product.descricao as tipo ,product_state.descricao as estado , product.stock , product.id_estado From product, product_state, type_product
      WHERE product.id_type = type_product.id AND 
      product.id_estado = product_state.id ";

// echo($sql);
    // $sql ="SELECT * FROM imovel WHERE codZonaCidade =".$id;
    
    $result = $conn->query($sql);
    $msg = "";
    
    if ($result->num_rows > 0) {
        //output data of each row
        while($row = $result ->fetch_assoc()) {
        $msg .= "<tr>";
        $msg .= "<td><img class='img-thumbnail' src='".$row['img']."'></td>";
        $msg .= "<td>".$row['descricao']."</td>";
        $msg .= "<td>".$row['valor']."</td>";
        $msg .= "<td>".$row['tipo']."</td>";
        $msg .= "<td>".$row['estado']."</td>";
        $msg .= "<td>".$row['stock']."</td>";
        $msg .= "<td><button type='button' class='btn btn-info' onclick='getDadosEditProdutos(".$row['id'].")'>editar</button></td>";
        $msg .= "<td><button type='button' class='btn btn-primary' onclick='addStock(".$row['id'].")'>Adicionar Stock</button></td>";
        if($row['id_estado']==2){
        $msg .= "<td><button type='button' class='btn btn-danger' onclick='removeProd(".$row['id'].")'>Apagar</button></td>";
        }else{
        $msg .= "<td>Produto activo, nao é possivel eliminar!</td>";
        }
        $msg .= "</tr>";
      }



    }


    
      $conn->close();
      return $msg;
  } 



  function removeProd($id){
    global $conn;

    $sql = "DELETE FROM product WHERE id=".$id;
    $msg = "";
    
    if ($conn->query($sql) === TRUE) {
      $msg = "Produto removido com sucesso!";
    } else {
      $msg = "Error: " . $sql . "<br>" . $conn->error;
    }
    
    $conn->close();

    return $msg;
}

function getDadosEditProdutos($id){
    global $conn;
    $msg="";
  
    $sql = "SELECT *  FROM product WHERE id = ".$id;

    $result = $conn->query($sql);
  
    if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        $msg = $row;
    }
    }
  
    $conn->close();
  
    return json_encode($msg);
  
  }


  function editaProduto($descrProd, $valorProd, $tipoProduto, $estadoProduto,$stockProd,$id,$img){

    // global $conn;
    // $msg="";
    // $sql = "";
    
    $resp = $this -> upload($img, $id);
    $resp = json_decode($resp, TRUE);
  
    
  
    if($resp['flag']){
  
      $msg = $this -> guardaUpdate($descrProd, $valorProd, $tipoProduto, $estadoProduto, $stockProd,$id, $resp['target']);
  
    }else{
      $msg = $this -> guardaUpdate($descrProd, $valorProd, $tipoProduto, $estadoProduto, $stockProd,$id, $resp['target']);
    }
  
    return $msg;
  }
  
  function guardaUpdate($descrProd, $valorProd, $tipoProduto, $estadoProduto, $stockProd,$id,$img){
    global $conn;
    $msg="";
    $sql = "UPDATE product SET
    descricao = '".$descrProd."',
    valor = '".$valorProd."',
    id_type = '".$tipoProduto."',
    id_estado = '".$estadoProduto."',
    stock = '".$stockProd."'";
  
    if($img == ""){
      $sql .= " WHERE id =".$id;
    }else{
      $sql .= ", img = '".$img."' WHERE id =".$id;
    }
  
    if ($conn->query($sql) === TRUE) {
      $msg  = "Produto Editado com Sucesso!";
    } else {
      $msg = "Error: " . $sql . "<br>" . $conn->error;
    }
  
    $conn->close();
  
    return $msg;
  
  }















  function addStocks($id){
    global $conn;
    session_start();
    $msg="";
  
    $sql = "SELECT product.stock FROM product  WHERE id = ".$id;
  
    $result = $conn->query($sql);
  
    if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        $msg = $row;
        $_SESSION['qtds']=$row['stock'];
    }
    }
  
    $conn->close();
  
    return json_encode($msg);
  
  }


  function updateStock($id, $qtd){
    global $conn;
    session_start();
    $msg="";
    $stockOld =$_SESSION['qtds'];
    $sql = "UPDATE product SET
    stock = '".$stockOld."'+'".$qtd."'
    WHERE id =".$id;
 

    if ($conn->query($sql) === TRUE) {
      $msg  = "Stock Editado com Sucesso!";
    } else {
      $msg = "Error: " . $sql . "<br>" . $conn->error;
    }
  
    $conn->close();
  
    return $msg;
  
  }





    
}











?>