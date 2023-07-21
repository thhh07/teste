#teste





<?php
/*
projeto patrimonio PHP
cadastro de patrimonio 

##informações de usuario: orgão, nome do funcionario, 

##patrimonios ligados aos servidores
*/
//numero patrimonio#####################
$texto = "Bem vindo ao cadastro de patrimonio \n \n";
echo $texto;
$a= (int)readline("Numero do patrimonio MAX 5 caracteres: ");
#sintaxe texte
if($a > 99999)
   echo (" \n \n valor invalido");
/*$limitador = 5;
$limitador = substr($a, 0, $limitador);
echo $limitador; */

//falta limitar resposta para "sim" ou "não"
$a2 = readline(" \n Sera inserido mais de um patrimonio? ");
  if($a = 'sim');
    $a2= (int)readline(" numero do patrimonio 2 ");
    

    
    
//servidor ligado a patrimonio######################
$b= readline(" \n \n Nome do servidor ligado ao patrimonio: ");

//orgão do servidor#################### 
$c= readline('Digite o orgão do servidor: ');

ob_clean();


//conferir dados
echo (" \n \n comfirmar dados servidor: ");
echo $b;

echo ("\n \n comfirmar dados patrimonio: ");
echo $a;







?>