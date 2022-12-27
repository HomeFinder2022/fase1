<?php

require_once '../controller/controllerregisto.php';

if($_POST['op'] == 1){
    $regFilm = new Utilizador();
    $res = $regFilm -> registaUtilizador(
        $_POST['nif'], 
        $_POST['nome'], 
        $_POST['apelido'],
        $_POST['pass'],
        $_POST['morada'],
        $_POST['codpostal'],
        $_POST['idade'],
        $_POST['tel'],
        $_POST['email'],
        $_POST['pnascimento'],
        $_FILES
        );
    echo($res);
}else if($_POST['op'] == 2){
    $pesqTipo = new Utilizador();
    $res = $pesqTipo -> getTipoUtilizador();
    echo($res);
}else if($_POST['op'] == 3){
    $pespais = new Utilizador();
    $res = $pespais -> getPais();
    echo($res);
}
// else if($_POST['op'] == 4){
//     $tabpr = new Produto();
//     $res = $tabpr -> tabProdutos();
//     echo($res);
// }else if($_POST['op'] == 5){
//     $removerJ = new Produto();
//     $res = $removerJ -> removeProd($_POST['id']);
//     echo($res);
// }else if($_POST['op'] == 6){
//     $getDadosfil = new Produto();
//     $resp = $getDadosfil -> getDadosEditProdutos($_POST['id']);
//     echo($resp);

// }else if($_POST['op'] == 7){

//     $edit = new Produto();
//     $resp = $edit -> editaProduto(
//         $_POST['descrProd'],
//         $_POST['valorProd'],
//         $_POST['tipoProduto'],
//         $_POST['estadoProduto'],
//         $_POST['stockProd'],
//         $_POST['id'],
//         $_FILES

//     );
//     echo($resp);

// }else if($_POST['op'] == 8){
//     $up = new Produto();
//     $resp = $up -> addStocks($_POST['id']);
//     echo($resp);

// }
// else if($_POST['op'] == 9){
//     $up = new Produto();
//     $resp = $up -> updateStock(
//         $_POST['id'],
//         $_POST['qtd']
//     );
//     echo($resp);

// }


?>