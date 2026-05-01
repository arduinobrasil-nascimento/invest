<?php
include ('funcao_ngr.php');      // CHAMA O ARQUIVO funcao_ngr.php [QUE É RESPONSÁVEL POR GERAR OS NÚMEROS RANDÔMICOS]
$numeros2 = "";                  // DEFINIÇÃO DA VARIÁVEL DE TEXTO
$cont_comparacoes = 0;
$cont_trocas = 0;
  for ($i = 0; $i < $tamanho_vetor - 1; $i++) {              // PRIMEIRO FOR
      for ($j = 0; $j < $tamanho_vetor - $i - 1; $j++) {     // SEGUNDO FOR DENTRO DO PRIMEIRO FOR
	      $cont_comparacoes = $cont_comparacoes + 1;
          if ($vetor[$j] > $vetor[$j + 1]) {                 // IF DENTRO DOS DOIS FOR
		      $cont_trocas = $cont_trocas + 1;
              $temp = $vetor[$j];                            // SE ENTRAR NO IF, FAZ A PRIMEIRO MOVIMENTO DA TROCA
              $vetor[$j] = $vetor[$j + 1];                   // FAZ O SEGUNDO MOVIMENTO DA TROCA
              $vetor[$j + 1] = $temp; } } }                  // FAZ A TERCEIRO MOVIMENTO DA TROCA E FECHA O IF E OS DOIS FOR
  for ($i = 0; $i <= $tamanho_vetor - 1; $i++){ $numeros2 = $numeros2 . " " . $vetor[$i]; }  // CONDICIONAL FOR PARA GUARDAR AS INFORMAÇÔES DENTRO DA VARIÁVEL NÚMERO2
echo "VETOR ORDENADO: [" . $numeros2 . " ] <br>";  // MOSTRA O RESULTADO DO VETOR ORDENADO
echo "&nbsp;Comparações: " . $cont_comparacoes;
echo "<br>";
echo "&nbsp;Trocas: " . $cont_trocas;
echo "<br>";
?>