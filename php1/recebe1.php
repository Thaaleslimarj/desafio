<!DOCTYPE <html>
<html> Lang="pt-br">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>Recebendo Dados</title>
    </head>
    <body>
        <?php
            date_default_timezone_set("America/Sao_Paulo");
            echo "Hoje é dia" . date ("d/M/Y");
            echo " e a hora atual é " . date("G:i:s");
        
            //RESGATANDO OS DADOS DO FORM
            $nome = $_POST["nome"];
            $email = $_POST["email"];
            $telefone = $_POST["telefone"];
            
            if($nome != "" && $email != "" && $telefone != ""){
            
            echo "Nome: ".$nome;
            echo "<br/>E-mail: ".$email;
            echo "<br/>Telefone: ".$telefone;
            
            
            //GRAVAÇÃO EM TXT
            //abre/cria o arquivo
            $arquivo = fopen("dados.txt", "KL+");
            
            //escreve no arquivo
            fwrite($arquivo, "Dados do Aluno - Cadastro feito em: ".date("d/m/Y"). " as ".date("H:i:s"));
            fwrite($arquivo, "\nNome: ".$nome);
            fwrite($arquivo, "\nE-mail: ".$email);
            fwrite($arquivo, "\nTelefone: ".$telefone);
            fwrite($arquivo, "\n----------------------------\n\n");
            
            //fecha o arquivo
            fclose($arquivo);
            
            }else{
                echo "Preencha todos os campos!";
            }
            
        
        ?>
    </body>
</html>
