<?php

require_once 'connection.php';

class Login{

    function validaLogin($email, $pass){
        global $conn;
        // session_start();
        $sql = "SELECT utilizador.* , tipoutilizador. FROM utilizador, tp_user 
        WHERE email = '".$email."' AND pw = '".md5($pass)."' 
        AND utilizador.idtipoutilizador = tipoutilizador.idtipoutilizador";
        $msg = "";
        $flag = false;

        
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
        // output data of each row
        while($row = $result->fetch_assoc()) {
            $msg = "Bem-vindo ".$row['nome'];
            $flag = true;
            // $_SESSION['nomeUser'] = $row['nome'];
            // $_SESSION['tipo_user'] = $row['descricao'];
            // $_SESSION['tipo'] = $row['idtipoutilizador'];
        }
        } else {
            $msg = "Login Errado! Dados Incorretos.";
        
        }

        $conn->close();

        return json_encode(array(
            "msg" => $msg,
            "flag" => $flag,
        ));
    }

    function validaLogout(){
        // session_start();
        // session_destroy();

        return ("Obrigado!");

    }
}

?>