<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>Artigo</title>
    </head>
    <body>
        
        <h4>Cadastro de Artigo</h4>
        <!--enctype="multipart/form-data"
            habilita o form a enviar arquivos-->
        <form action="gravar.php" method="post" enctype="multipart/form-data">
            
            Título:<br/>
            <input type="text" name="titulo"/><br/>
            
            Autor(a):<br/>
            <input type="text" name="autor"/><br/>
            
            Foto:<br/>
            <input type="file" name="foto"/><br/>
            
            Artigo:<br/>
            <textarea cols="40" rows="8" name="artigo"></textarea>
            <br/>
            
            <input type="submit" value="Enviar" />
            
        </form>

        <?php
        // put your code here
        ?>
    </body>
</html>
