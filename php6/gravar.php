<?php  
include_once "./conexao.php";
date_default_timezone_set("America/Sao_Paulo");  

// Obtém os dados do formulário  
$nome = $_POST["nome"] ?? '';  
$email = $_POST["email"] ?? '';  
$dia = $_POST["dia"] ?? '';  
$mes = $_POST["mes"] ?? '';  
$ano = $_POST["ano"] ?? '';  
$cpf = $_POST["cpf"] ?? '';  
$endereco = $_POST["endereco"] ?? '';  
$cep = $_POST["cep"] ?? '';  
$estado = $_POST["estado"] ?? '';  
$cidade = $_POST["cidade"] ?? '';  

// Constrói a data de nascimento  
$dtnasc = "$ano-$mes-$dia"; // yyyy-mm-dd  

// Verifica se todos os campos foram preenchidos  
if (empty($nome) || empty($email) || empty($dia) || empty($mes) || empty($ano) || empty($cpf) || empty($endereco) || empty($cep) || empty($estado) || empty($cidade)) {  
    die("Por favor, preencha todos os campos.");  
}  


// Consultar pelo CPF a existência do cliente  
$result = mysqli_query($con, "SELECT * FROM cliente WHERE cpf = '$cpf'");  

if (mysqli_num_rows($result) > 0) {  
    echo "Cliente já cadastrado!";  
} else {  
    // Inserir o cliente  
    $sql = "INSERT INTO cliente (nome, email, dtnasc, cpf) VALUES ('$nome', '$email', '$dtnasc', '$cpf')";  
    
    if (mysqli_query($con, $sql)) {  
        // Obtém o ID gerado pela última inserção  
        $id = mysqli_insert_id($con);  
        
        // Inserir o endereço  
        $sql2 = "INSERT INTO endereco (endereco, cep, estado, cidade, id_cliente) VALUES ('$endereco', '$cep', '$estado', '$cidade', $id)";  
        
        if (mysqli_query($con, $sql2)) {  
            echo "Gravado com sucesso!";  
        } else {  
            echo "Erro ao gravar endereço!";  
            // Apaga o cliente se o endereço não for gravado  
            mysqli_query($con, "DELETE FROM cliente WHERE idcliente = $id");  
        }  
    } else {  
        echo "Erro ao gravar cliente!";  
    }  
}  

// Fecha a conexão  
mysqli_close($con);  
?>
<a href="./index.php">Pagina inicial</a>