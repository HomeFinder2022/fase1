<?php

require_once '../controller/controllerImovel.php';


if($_POST['op'] == 1){

    $reg = new Imovel();
    $resp = $reg -> regImovel(
        $_POST['tipoImovel'],
        $_POST['tipologiaImovel'],
        $_POST['moradaImovel'],
        $_POST['postalImovel'],
        $_POST['listaDistritos'],
        $_POST['listaConcelhos'],
        $_POST['listaFreguesias'],
        $_POST['areaUtil'],
        $_POST['areaBruta'],
        $_POST['numWcs'],
        $_POST['anoImovel'],
        $_POST['certEnerg'],
        $_POST['estadoImovel'],
        $_POST['tipoNegocImovel'],
        $_POST['obsImovel'],
        $_POST['pImovel'],
        $_POST['rendaImovel'],
        $_POST['precoNoite'],
        $_FILES
    );
    echo($resp);

    }else if($_POST['op'] == 2){

    $tabelaImoveis = new Imovel();
    $res = $tabelaImoveis -> tabelaImoveis();
    echo($res);
    
}else if($_POST['op'] == 3){
    $desativarImovel = new Imovel();
    $res = $desativarImovel -> desativarImovel($_POST['idimovel']);
    echo($res);

}else if($_POST['op'] == 4){
    $infoImovel = new Imovel();
    $resp = $infoImovel -> infoImovel();
    echo($resp);

}else if($_POST['op'] == 5){
    $infoImovel = new Imovel();
    $resp = $infoImovel -> infoImovelPagina();
    echo($resp);
    

}
    
?>   





