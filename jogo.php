<!DOCTYPE html>
<html>
 <head>
 <meta charset="UTF-8"/>
 <title>Tela Inicial</title>
 </head>

 <body>
     <?php
    //VERIFICA SE O FORMULÁRIO FOI ENVIADO
    if($_POST["btnOK"]) {
        
     //VERIFICA O MÉTODO ESCOLHIDO PELO USUÁRIO
     $id_metodo = $_POST["metodo"];
     
     //VERIFICANDO O CASO
     switch($id_metodo) {
      //CASO 1: PEGA AS VARIÁVEIS UM A UM ( MÉTODO 1 )
      case 1:
       //RECEBE AS VARIÁVEIS VINDAS DO FORMULÁRIO PELO MÉTODO POST
       $dsc_nome = $_POST["txt_nome"];
       $dsc_idade = $_POST["txt_idade"];
       $dsc_sexo = $_POST["sexo"];

       //IMPRESSÃO
       echo "<h3>MÉTODO 1</h3>";
       echo $dsc_nome."<br>".$dsc_idade."<br>".$dsc_sexo."<br><br>";
       break;


      //PEGA AS VARIÁVEIS ATRAVÉS DO WHILE ( MÉTODO 2 ) 
      case 2:
       //IMPRESSÃO
       echo "<h3>MÉTODO 2</h3>";
          
       //LENDO O ARRAY $_POST
       while(list($key,$val) = each($_POST)) 
       {
        echo $key."=".$val."<br>";
       }//FECHA WHILE
      }//FECHA SWITCH
    }//FECHA IF

    //EXIBE O FORMULÁRIO
    else {
    ?>
   <form name='main' method='post'>
    <table cellpading='0' cellspacing='0' border='0' width='95%'>
        <tr>
         <td width='15%'>NOME:</td>
         <td width='80%'><input type='text' name='txt_nome' size='20'></td>
        </tr>
        
        <tr>
         <td width='15%'>IDADE:</td>
         <td width='80%'><input type='text' name='txt_idade' size='2' maxlength='2'></td>
        </tr>
        
        <tr>
         <td width='15%'>SEXO:</td>
         <td width='80%'>
            <input type='radio' name='sexo' value=’masculino' checked/>Masculino
            <input type='radio' name='sexo' value='feminino' />Feminino</td>
        </tr>

        <tr>
         <td width='15%'>METODO:</td>
         <td width='80%'>
         <input type='radio' name='metodo' value='1' checked />1
         <input type='radio' name='metodo' value='2' />2</td>
        </tr>
    </table>
       
    <br>
        <input type='submit' name='enviar' value='EnviarFormulário>>'/> 
        <input type='hidden' name='btnOK' value='1'/>
   </form> 
    <?php
    
    } //fecha o ELSE

    /*
     * To change this template, choose Tools | Templates
     * and open the template in the editor.
     */
    ?>
    </body>
</html>