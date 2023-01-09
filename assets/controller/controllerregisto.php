<?php

require_once 'connection.php';

class Utilizador{

    function registaUtilizador($nif, $nome , $apelido ,$pass , $morada, $codpostal, $idade, $tel,$email, $pnascimento,$img ){
        global $conn;

        $sql = "INSERT INTO utilizador (nif,nome,apelido,pwd,morada,codigopostal,idade,telemovel,email,idtipoutilizador,idpais ) 
        VALUES('".$nif."', '".$nome."', '".$apelido."','".$pass."','".$morada."','".$codpostal."','".$idade."',
        '".$tel."','".$email."',3,'".$pnascimento."')";

        $msg = "";
        
        if ($conn->query($sql) === TRUE) {

          
          $resp = $this->insertFinancas($nif);
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

    function insertFinancas($nif){

      global $conn;
      $msg="";

      $sql = "INSERT INTO financas (idnif, saldo ) VALUES('".$nif."', 0)";

      if ($conn->query($sql) === TRUE) {
        $msg  = "conta criada com sucesso!";
      } else {
        $msg = "Error: " . $sql . "<br>" . $conn->error;
      }

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

  // function tabProdutos(){
  //   global $conn;
  //   session_start();
 
  //    $sql ="SELECT product.id, product.img, product.descricao, product.valor, type_product.descricao as tipo ,product_state.descricao as estado , product.stock , product.id_estado From product, product_state, type_product
  //     WHERE product.id_type = type_product.id AND 
  //     product.id_estado = product_state.id ";

// echo($sql);
    // $sql ="SELECT * FROM imovel WHERE codZonaCidade =".$id;
    
  //   $result = $conn->query($sql);
  //   $msg = "";
    
  //   if ($result->num_rows > 0) {
  //       //output data of each row
  //       while($row = $result ->fetch_assoc()) {
  //       $msg .= "<tr>";
  //       $msg .= "<td><img class='img-thumbnail' src='".$row['img']."'></td>";
  //       $msg .= "<td>".$row['descricao']."</td>";
  //       $msg .= "<td>".$row['valor']."</td>";
  //       $msg .= "<td>".$row['tipo']."</td>";
  //       $msg .= "<td>".$row['estado']."</td>";
  //       $msg .= "<td>".$row['stock']."</td>";
        // $msg .= "<td><button type='button' class='btn btn-info' onclick='getDadosEditProdutos(".$row['id'].")'>editar</button></td>";
  //       $msg .= "<td><button type='button' class='btn btn-primary' onclick='addStock(".$row['id'].")'>Adicionar Stock</button></td>";
  //       if($row['id_estado']==2){
  //       $msg .= "<td><button type='button' class='btn btn-danger' onclick='removeProd(".$row['id'].")'>Apagar</button></td>";
  //       }else{
  //       $msg .= "<td>Produto activo, nao é possivel eliminar!</td>";
  //       }
  //       $msg .= "</tr>";
  //     }



  //   }


    
  //     $conn->close();
  //     return $msg;
  // } 



//   function removeProd($id){
//     global $conn;

//     $sql = "DELETE FROM product WHERE id=".$id;
//     $msg = "";
    
//     if ($conn->query($sql) === TRUE) {
//       $msg = "Produto removido com sucesso!";
//     } else {
//       $msg = "Error: " . $sql . "<br>" . $conn->error;
//     }
    
//     $conn->close();

//     return $msg;
// }

function getdadosPerfilEdit(){
    global $conn;
    $msg="";
    session_start();
    $nif= $_SESSION['nif'] ;
  
    $sql = "SELECT *  FROM utilizador WHERE nif = ".$nif;

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



  function editaPerfil( $nome, $apelido, $pass,$morada,$codpostal,$idade,$tel,$email, $img,$oldnif){

    global $conn;
    $msg="";
    $sql = "";
    
    $resp = $this -> upload($img, $oldnif);
    $resp = json_decode($resp, TRUE);
  
    
  
    if($resp['flag']){
  
      $msg = $this -> guardaUpdate( $nome, $apelido, $pass,$morada,$codpostal,$idade,$tel,$email, $resp['target'],$oldnif);
  
    }else{
      $msg = $this -> guardaUpdate( $nome, $apelido, $pass,$morada,$codpostal,$idade,$tel,$email, $resp['target'],$oldnif);
    }
  
    return $msg;
  }
  
  function guardaUpdate( $nome, $apelido, $pass,$morada,$codpostal,$idade,$tel,$email,$img,$oldnif){
    global $conn;
    $msg="";
    $sql = "UPDATE utilizador SET
    
    nome = '".$nome."',
    apelido = '".$apelido."',
    morada = '".$pass."',
    codigopostal = '".$morada."',
    idpais = '".$codpostal."',
    idade = '".$idade."',
    telemovel = '".$tel."',
    email = '".$email."'";
  
    if($img == ""){
      $sql .= " WHERE nif =".$oldnif;
    }else{
      $sql .= ", foto = '".$img."' WHERE nif =".$oldnif;
    }
  
    if ($conn->query($sql) === TRUE) {
      $msg  = "Perfil Editado com Sucesso!";
    } else {
      $msg = "Error: " . $sql . "<br>" . $conn->error;
    }
  
    $conn->close();
  
    return $msg;
  
  }





  function editaPerfilPass($passworda, $confirm_password, $oldpass){

    global $conn;
    $msg="";
    $sql = "";

 
      $password = $_POST['passworda'];
      $confirm_password = $_POST['confirm_password'];
    
      if ($password == $confirm_password) {
        // passwords match, proceed with form submission
        $sql = "UPDATE utilizador SET 
              pwd = '".$passworda."'
              WHERE pwd = ".$oldpass;

              if ($conn->query($sql) === TRUE) {
                $msg  = "Password Editado com Sucesso!";
              } else {
                $msg = "Error: " . $sql . "<br>" . $conn->error;
              }
      } else {
        // passwords do not match, display error message
        $msg = "Passwords do not match. Please try again.";
      }

    
    $conn->close();
  
    return $msg;
  
  }





















    
}











?>