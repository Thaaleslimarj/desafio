<?php

    $titulo = $_POST["titulo"];
    $autor = $_POST["autor"];
    $foto = $_FILES["foto"]; //ARRAY
    $artigo = $_POST["artigo"];

    //se o nome da foto for diferente de vazio
    if($foto["name"] != ""){
        
        //foto.ferias.JPG
        
        $ext = explode(".", $foto["name"]); //[foto][ferias][JPG]
        $ext = array_reverse($ext);//[JPG][ferias][foto]
        $ext = strtolower($ext[0]); //jpg
        
        //echo $ext;
        
        if($ext != "jpg" && $ext != "gif" && $ext != "png"){
            echo "Escolha um arquivo valido!";
        }elseif($foto["size"] > 1024*800){
            echo "Tamanho excedido!";
        }else{
            //nao ocorreu nenhum dos erros acima, podemos gravar
            
            $nomefoto = date("YmdHis").rand(1000, 9999).".".$ext;
            //echo $nomefoto;
            
            include_once './conexao.php';
            
            $sql = "insert into artigos values(null,
                    '".$titulo."','".$autor."','".$nomefoto."','".$artigo."')";
            
            if(mysqli_query($con, $sql)){
                echo "Gravado com sucesso!";
                move_uploaded_file($foto["tmp_name"], "imagens/".$nomefoto);
            }else{
                echo "Erro ao gravar!";
            }
            mysqli_close($con);
            
        }
        
    }else{
        echo "Escolha um arquivo!";
    }
?>
<hr/>
<a href="painel.php">Painel</a> <br/>
<a href="index.php">Site</a>


