<?php  
    $con = mysqli_connect("localhost", "root", "");  

    // Verificando se a conexão foi bem-sucedida  
    if (!$con) {  
        die("Conexão falhou: " . mysqli_connect_error());  
    }  

    // Seleciona o banco de dados  
    if (!mysqli_select_db($con, "aula6")) {  
        die("Erro ao selecionar o banco de dados: " . mysqli_error($con));  
    }  
?>