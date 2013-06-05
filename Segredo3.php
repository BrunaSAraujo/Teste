<!DOCTYPE html>
<html>
 <head>
 <meta charset=”UTF-8” />
 <title>Segredos</title>
 </head>

 <body>
     <p style ="color: red;">"Escolheu um Segredo"</p>
<?php

try
    {
    //instancia objeto PDO, conectando no MySQL
    $conn = new PDO('mysql:host=localhost;dbname=livro','root','mysql');
    //executa uma instrução SQL de consulta
    //$rand = rand(1,3);
    $rand = 3;
    $result = $conn->query("SELECT * FROM questoes WHERE id=".$rand);
   
    if($result)
    {
        //percorre os resultaods via iteração
        foreach($result as $row)
        {
            echo $row['assunto']."<br><br>".
                 $row['pergunta']."<br><br>".
                 $row['letraA']."<br><br>".
                 $row['letraB']."<br><br>".
                 $row['letraC']."<br><br>".
                 $row['letraD']."<br><br>".
                 $row['letraE']."<br>\n";
            
        }
    }
   
    //fecha a conexão
    $conn = null;
    }

    catch(PDOException $e)
    {
        print "Erro!: ".$e->getMessage()."<br>\n";
        die();
    }
    
?>
        <menu><a href="EnviarResposta.php"><button>Enviar</button></a></menu>
     
     <menu label="Rodape">
        <a href="TelaSegredos.php"><button id="voltar" type="button">Voltar</button></a> 
        <a href="index.php"><button id="sair" type="button">Sair</button></a>  
    </menu>

 </body>

</html>