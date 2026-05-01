<?php
$tamanho_vetor = 5; // DEFINIÇÃO DO TAMANHO DA LISTA
$numeros1 = "";      // DEFINIÇÃO DA VARIÁVEL DE TEXTO
$vetor = [];         // DEFINIÇÃO DO VETOR
 for ($i = 0; $i < $tamanho_vetor; $i++) { $vetor[$i] = rand(1, 10); }                      // CONDICIONAL FOR PARA GERAR E SALVAR OS NÚMEROS RANDÔMICOS
 for ($i = 0; $i <= $tamanho_vetor - 1; $i++){$numeros1 = $numeros1 . " " . $vetor[$i]; }   // CONDICIONAL FOR PARA GUARDAR AS INFORMAÇÔES DENTRO DA VARIÁVEL NÚMERO1
echo "VETOR &nbsp;&nbsp; ORIGINAL: [" . $numeros1 . " ] <br>"; // MOSTRA O RESULTADO DO VETOR ORIGINAL
?>