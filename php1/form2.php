<!DOCTYPE html>
<html Lang="pt-br">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>Formulário PHP</title>
    </head>
    <body>

        <h3>Envio de dados pelo GET</h3>
        
        <form action="recebe2.php" method="get">
            
            Nome:<br>
            <input type="text" name="nome"><br/>
            <input type="radio" name="sexo" value="Masculino"/>M
            <input type="radio" name="sexo" value="Feminino"/>F
            <input type="submit" value="Enviar">
            <br/>
        </form>
        
        <?php 
            echo $_SERVER["REMOTE_ADDR"];
        ?>
    </body>
</html>
