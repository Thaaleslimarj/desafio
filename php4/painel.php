<?php //session_start(); 
 include_once './validar.php';
?>
<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title></title>
    </head>
    <body>
                
        <h3>Painel do Sistema</h3>
        
        <?php
        echo "Seja bem vindo(a) ".$_SESSION["login"];
        ?>
        
        <h4>Menu</h4>
        
        <?php
            if($_SESSION["perfil"] == "adm"){
                include_once 'menu_adm.php';
            }elseif($_SESSION["perfil"] == "user"){
                include_once 'menu_user.php';
            }
        ?>
        
        
    </body>
</html>
