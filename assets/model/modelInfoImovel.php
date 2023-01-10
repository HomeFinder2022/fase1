<?php

require_once '../controller/controllerInfoImovel.php';


if($_POST['op'] == 1){
    $infoImovelPagina = new InfoImovel();
    $resp = $infoImovelPagina -> infoImovelPagina($_POST['idimovel']);
    echo($resp);

}

?>   





