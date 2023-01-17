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
        $_POST['estado']
    );
    echo($resp);

}else if($_POST['op'] == 2){
    $pesq = new Pesquisa();
    $resp = $pesq -> fil(
        $_POST['concelho1'],
        $_POST['tipneg1'],
        $_POST['tipimovel1'],
        $_POST['precomin1'],
        $_POST['precomax1'],
        $_POST['estado1']
    );
    echo($resp);

}

?>   





