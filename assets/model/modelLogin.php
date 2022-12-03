<?php

require_once '../controller/controllerLogin.php';

if($_POST['op'] == 1){
    $log = new Login();
    $resp = $log -> validaLogin($_POST['emailutl'], $_POST['passuti']);
    echo($resp);
    
}else if($_POST['op'] == 2){
    $out = new Login();
    $resp = $out -> validaLogout();
    echo($resp);
}


?>