<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html lang="pt-br" xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Estética avançada</title>

<link rel="stylesheet" href="estilo.css" type="text/css" />

</head>

<body>
	
    <div id="container">
    	
        <div id="topo">
        	
            <div id="menu">
            	
                <?php
                    include_once 'menu.php';
                ?>
            
            </div>
            
            <div id="logo">
            	
               <a href="index.html"> <img src="img/logo.jpg" border="0" /></a>
                
            </div>
            
        
        </div>
        
        <div id="banner">
        	<img src="img/banner.jpg" alt="Estar bonita é estar BEM!" />
        </div>
        
        <div id="conteudo">
        
        <h3>Bella Estética</h3>
        
        <img src="img/img1.jpg" />
        
        <p>A dor em si é uma dor, isto é, nesta vida, muito se aprende com a experiência e sempre se busca o equilíbrio. Estar em harmonia com os desafios do dia a dia é essencial. </p>

<p>Nada como uma abordagem tranquila para lidar com a jornada. Vamos deixar fluir. A vida é cheia de aprendizagens e conexões que nos tornam mais fortes.</p>
        	
            <a href="#"><img src="img/saibamais.png" border="0" /></a>
            
        </div>
        
        <div id="coluna">
        
        <h3>NewsLetter</h3>
        
        <form action="newsletter.php" method="post">
            Nome:<br/>
            <input type="text" name="nome"/><br/>
            
            E-mail:<br/>
            <input type="text" name="email"/><br/>
            
            <input type="submit" value="OK"/>
            
        </form>
        
        </div>
        
        <div id="rodape">
            <?php include_once 'rodape.php'; ?>
        </div>
    
    </div>

</body>
</html>
