<?php

require_once '../controller/controllerLogin.php';

if($_POST['op'] == 1){
    $log = new Login();
    $resp = $log -> validaLogin($_POST['email'], $_POST['pass']);
    echo($resp);
    
}else if($_POST['op'] == 2){
    $out = new Login();
    $resp = $out -> validaLogout();
    echo($resp);
}


?>