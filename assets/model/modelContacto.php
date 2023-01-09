<?php

require_once '../controller/controllerContacto.php';

if($_POST['op'] == 1){
    $mail = new EmailContacto();
    $res = $mail -> sendEmail(
    $_POST['nomemensagem'],
    $_POST['emailenviado'],
    $_POST['assuntoemail'],
    $_POST['mensagemescrita']
);
    echo($res);

}
// else if($_POST['op']==4){
    
//         $editCli = new ResetPass();
//         $res = $editCli -> guardaeditpassnova(
//             $_POST['emailUtilizador'],
//             $_POST['passutilizador']
//         );
//         echo($res);
// }

    
?>