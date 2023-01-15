<?php

require_once '../controller/controllerInfoImovel.php';


if($_POST['op'] == 1){
    $pes = new Pesquisa();
    $resp = $pes -> filtroanuncios($_POST['idimovel']);
    echo($resp);

}

?>   





