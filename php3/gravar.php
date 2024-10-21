<?php
include_once './funcoes.php';

$nome = $_POST["nome"];
$email = $_POST["email"];
$dtnasc = databanco($_POST["dtnasc"]); //dd/mm/aaaa
//echo $dtnasc;

include_once './conexao.php';


$sql = "insert into alunos values(null,
            '".$nome."','".$email."','".$dtnasc."')";

if (mysqli_query($con, $sql)) {
    echo "Gravado com sucesso!";
} else {
    echo "Erro ao gravar!";
}
mysqli_close($con);
?>
<br/>
<a href="index.php">Página Inicial</a>
