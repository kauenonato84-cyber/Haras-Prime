<?php

$parcelas = $_POST["sel_parcelas"];
$idade = $_POST["num_idade"];
$valor = $_POST["num_valor";

$valor_final = $valor;

 if ($parcelas == 1){
         $valor_final = $valor
        }
     else if ($parcelas == 12){
         $valor_final = $valor * 1.05;
         }
     else if ($parcelas == 24){
        $valor_final = $valor * 1.12;
        }

     $valor_final = $valor / $parcelas;

     echo "<h1>Valor total: R$ $valor_final</h1>";
     echo "<h3>Valor de cada parcela ($parcelas x): R$ $valor_parcela</h3>";

     else if ($idade >= 18 && $valor >= 30000){
          echo "<h2>Como cliente especial, você foi contemplado com um Cupom VIP no valor de R$ 1.000,00 para sua próxima aquisição</h2>";
     }
      
      
