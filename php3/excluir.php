<?php
$mat = $_GET["mat"];

include_once './conexao.php';

$sql = "delete from alunos where mat=".$mat;

if (mysqli_query($con, $sql)) {
    echo "Deletado com sucesso!";
} else {
    echo "Erro ao deletar!";
}
mysqli_close($con);
?>
<br/>
<a href="index.php">Página Inicial</a>