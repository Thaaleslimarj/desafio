<?php

    include_once './funcoes.php';

    $mat =  $_POST["mat"];
    $nome =  $_POST["nome"];
    $email =  $_POST["email"];
    $dtnasc = databanco($_POST["dtnasc"]); //dd/mm/aaaa
    
    //echo $dtnasc;
    
    include_once './conexao.php';
    
    $sql = "update alunos set 
            nome = '".$nome."', email = '".$email."', dtnasc = '".$dtnasc."'
            where mat = ".$mat;
    
    
    if(mysqli_query($con,$sql)){
        echo "Dados atualizados com sucesso!";
    }else{
        echo "Erro ao atualizar!";
    
    mysqli_close($con);
    }
?>
<br/>
<a href="index.php">Página Inicial</a>
