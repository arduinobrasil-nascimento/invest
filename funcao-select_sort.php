<?php
include ('funcao_ngr.php');      // CHAMA O ARQUIVO funcao_ngr.php [QUE É RESPONSÁVEL POR GERAR OS NÚMEROS RANDÔMICOS]
$numeros3 = "";                  // DEFINIÇÃO DA VARIÁVEL DE TEXTO
$cont_comparacoes = 0;
$cont_trocas = 0;
    for ($i = 0; $i < $tamanho_vetor - 1; $i++) {
        $minIndex = $i;
        for ($j = $i + 1; $j < $tamanho_vetor; $j++) {
			$cont_comparacoes = $cont_comparacoes + 1;
            if ($vetor[$j] < $vetor[$minIndex]) {
                $minIndex = $j;
            }
        }
        if ($minIndex != $i) {
			$cont_trocas = $cont_trocas + 1;
            $temp = $vetor[$i];
            $vetor[$i] = $vetor[$minIndex];
            $vetor[$minIndex] = $temp;
        }
    }

  for ($i = 0; $i <= $tamanho_vetor - 1; $i++){ $numeros3 = $numeros3 . " " . $vetor[$i]; }  // CONDICIONAL FOR PARA GUARDAR AS INFORMAÇÔES DENTRO DA VARIÁVEL NÚMERO2
echo "VETOR ORDENADO: [" . $numeros3 . " ] <br>";  // MOSTRA O RESULTADO DO VETOR ORDENADO
echo "&nbsp;Comparações: " . $cont_comparacoes;
echo "<br>";
echo "&nbsp;Trocas: " . $cont_trocas;
echo "<br>";
?>