<!DOCTYPE html>
<html Lang= "pt-br">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>Declarando variáveis</title>
    </head>
    <body>
        <h1>Bem vindo, Thales!</h1>
        
        <?php
                                 
            //DECLARAÇÃO DE VARIÁVEIS
            //Estudem TIPOS de variáveis do PHP
            
            $nome = "Thales lima"; //String
            $idade = 30; //int
            $salario = 12000; //real,double,float
                                                            
            $nome = mb_strtolower($nome,'utf8');
            $nome = ucwords($nome);
            
            //(.) serve para concatenar/juntar texto com variavel
            echo "Nome: ".$nome;
            echo "<br/>Idade: ".$idade;
            echo "<br/>Salário: R$".number_format($salario,2,",",".");
        
        ?>
        
        <br/><br/>
        
        <a href="form1.php">Formulário 1</a>
        <a href="form2.php">Formulário 2</a>
        
    </body>
</html>
