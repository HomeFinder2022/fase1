<?php
use PHPMailer\PHPMailer;
use PHPMailer\Exception;

require_once 'connection.php';


require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';

  class ResetPass{





       function sendMail($email1,$nome){

        $mail = new PHPMailer\PHPMailer();
        $mail->isSMTP();
        $mail->Host = 'smtp.gmail.com';
        $mail->SMTPAuth = true;
        $mail->SMTPSecure = 'tls';
        $mail->Username = 'homefinderpt@gmail.com';
        $mail->Password = 'kcissgousqmemhon';
        $mail->Port = 587;

        $mail->setFrom('homefinderpt@gmail.com', $nome);
        $mail->addReplyTo('homefinderpt@gmail.com', 'HomeFinder');
        $mail->addAddress($email1, $nome);
        // $mail->addCC('dario_bianchi_@hotmail.com', 'Cópia');

        $mail->isHTML(true);
        $mail->Subject ="Recupera a palavra passe de ".$nome." para a HomeFinder";
        $mail->Body    = 
        '<h1>HomeFinder</h1>
        <h2>Olá, '.$nome.' </h2>
        <P>Reset da palavra passe</P>
        <p>HomeFinder</p>
        <link>http://localhost/Dario/fase1/create-new-password.php</>';
        $mail->AltBody = 'Para visualizar essa mensagem acesse http://localhost/Dario/fase1/create-new-password.php';
        // $mail->addAttachment('../img/logo-HomeFinder-mini.png', 'homefinder.png');


        if(!$mail->send()) {
          echo 'Não foi possível enviar o email!<br>';
          echo 'Erro: ' . $mail->ErrorInfo;
      } else {
          echo 'Verifica o teu email!';
      }
      }

    //   function listaInqui(){

    //     global $conn;
      
    //     $sql = "SELECT inquilino.*, distrito.nome AS nomedistrito, concelho.nome AS nomeconcelho, freguesias.nome AS nomefreg

    //        FROM inquilino, distrito, concelho, 
    //        freguesias

    //        WHERE
    //        inquilino.iddistrito = distrito.iddistrito AND
    //        inquilino.idconcelho = concelho.idconcelho AND
    //        inquilino.idfreguesia = freguesias.idfreguesia";
    
    //     $result = $conn->query($sql);
    
    //     $msg = "";

    //     if ($result->num_rows > 0) {
    //         // output data of each row
    //         while($row = $result->fetch_assoc()) {
    //             $msg .= "<tr>";
    //             $msg .= "<td>".$row['nome']."</td>";
    //             $msg .= "<td><a href='mailto:".$row['email']."'>".$row['email']."</a></td>";
    //             $msg .= "<td><a href='tel:".$row['contato']."'>".$row['contato']."</a></td>";
    //             $msg .= "<td>".$row['morada']."</td>";
    //             $msg .= "<td>".$row['nomedistrito']."</td>";
    //             $msg .= "<td>".$row['observacoes']."</td>";
    //             $msg .= "<td><button type='button' class='btn btn-danger btn-sm' onclick='delInqui(".$row['id'].")'>Apagar</button></td>";
    //             $msg .= "<td><button type='button' class='btn btn-success btn-sm' onclick='sendEmail()'>Enviar Convite</button></td>";
    //             $msg .= "</tr>";
    //             }
                
              
    //           }
      
    //     $conn->close();
    //     return $msg;
    // }

    


      function guardaeditpassnova( $emailUtilizador, $passutilizador){

        global $conn;
        $msg="";
        $sql = "";
        
      
      
          $sql = "UPDATE utilizador SET 
   
          pwd = '".$passutilizador."'
          WHERE email = '".$emailUtilizador."'";
        //como comparar os emails que existem ou nao na base de dados 
          
      
        if ($conn->query($sql) === TRUE) {
          $msg  = "Nova palavra-passe aceite!";
        } else {
          $msg = "Error: " . $sql . "<br>" . $conn->error;
        }
      
        
        
        $conn->close();
      
        return $msg;
      
      }
    
    

    }




