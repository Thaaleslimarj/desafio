<?php

//trim() elimina os espaços em branco
echo $login = trim($_POST["login"]);

if (!empty($login)) {
    include_once './conexao.php';
    
    $sql = "select * from usuario where login = '" . $login . "'";
    $result = mysqli_query( $con, $sql);

    if (mysqli_num_rows($result) == 1) {
        echo "Login já utilizado!";
        
    } else {
        echo "Login disponível!";
    }
    mysqli_close($con);
}
