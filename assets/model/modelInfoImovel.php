<?php

require_once '../controller/controllerInfoImovel.php';


if($_POST['op'] == 1){
    $pes = new InfoImovel();
    $resp = $pes -> infoImovelPagina($_POST['idimovel']);
    echo($resp);

}

?>   





