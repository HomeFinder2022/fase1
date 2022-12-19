<?php

require_once '../controller/controllerResetPass.php';

if($_POST['op'] == 1){


    }else if($_POST['op'] == 2){
    $mail = new ResetPass();
    $res = $mail -> sendMail(
    $_POST['email1'],
    $_POST['nome']);
    echo($res);
    }
    
    // else if($_POST['op'] == 3){
    //     $reg = new ResetPass();
    //     $resposta = $reg -> getresetpassUtli($_POST['nif']);
    //     echo($resposta);
    // }
    else if($_POST['op']==4){
    
        $editCli = new ResetPass();
        $res = $editCli -> guardaeditpassnova(
            $_POST['emailUtilizador'],
            $_POST['passutilizador']
        );
        echo($res);
    }

    
?>