<?php

require_once '../controller/controlleranuncios.php';


if($_POST['op'] == 1){
    $pesq = new Pesquisa();
    $resp = $pesq -> filtroanuncioss(
        $_POST['concelho'],
        $_POST['tipneg'],
        $_POST['tipimovel'],
        // $_POST['tipologia'],
        $_POST['precomin'],
        $_POST['precomax'],
        $_POST['estado'],
    );
    echo($resp);

}

?>   





