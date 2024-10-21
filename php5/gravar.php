<?php

    $nome = $_POST["nome"];
    $email = $_POST["email"];
    $cpf = $_POST["cpf"];
    $dtnasc = $_POST["dtnasc"]; // dd/mm/aaaa --> aaaa-mm-dd
    $cargo = $_POST["cargo"]; //int

    
    //Tratamento de data
    $data = explode("/", $dtnasc); //[dd][mm][aaaa]
    $data = array_reverse($data); //[aaaa][mm][dd]
    $dtnasc = implode("-", $data);
    
    //echo $dtnasc;
    
    include_once './conexao.php';
    
    //CONSULTA AO BANCO, PARA VERIFICAR A EXISTENCIA DO FUNCIONARIO
    $sqlcpf = "select * from funcionario where cpf = '".$cpf."'";
    $result = mysqli_query($con, $sqlcpf);
    
    if(mysqli_num_rows($result) == 1){
        echo "Funcionario ja cadastrado!";
    }else{
    
    $sql = "insert into funcionario values(null,
            '".$nome."','".$email."','".$cpf."','".$dtnasc."',".$cargo.")";
    
    if(mysqli_query($con, $sql)){
        echo "Gravado com sucesso!";
    }else{
        echo "Erro ao gravar!";
    }
    
    }
    mysqli_close($con); 
    
?>
<br/>
<a href="index.php">Página Inicial</a>
