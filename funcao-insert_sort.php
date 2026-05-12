<?php
include ('funcao_ngr.php');      // CHAMA O ARQUIVO funcao_ngr.php [QUE É RESPONSÁVEL POR GERAR OS NÚMEROS RANDÔMICOS]
$numeros4 = "";                  // DEFINIÇÃO DA VARIÁVEL DE TEXTO
$cont_comparacoes = 0;
$cont_trocas = 0;

    for ($i = 1; $i < $tamanho_vetor; $i++) {
		$chave = $vetor[$i];
        $j = $i - 1;
       while ($j >= 0 && $vetor[$j] > $chave) {
		   $cont_comparacoes = $cont_comparacoes + 1;
		   $cont_trocas = $cont_trocas + 1;
            $vetor[$j + 1] = $vetor[$j];
            $j--;
        }
        $vetor[$j + 1] = $chave;
    }
	$cont_comparacoes = $cont_comparacoes + 1;



  for ($i = 0; $i <= $tamanho_vetor - 1; $i++){ $numeros4 = $numeros4 . " " . $vetor[$i]; }  // CONDICIONAL FOR PARA GUARDAR AS INFORMAÇÔES DENTRO DA VARIÁVEL NÚMERO2
echo "VETOR ORDENADO: [" . $numeros4 . " ] <br>";  // MOSTRA O RESULTADO DO VETOR ORDENADO
echo "&nbsp;Comparações: " . $cont_comparacoes;
echo "<br>";
echo "&nbsp;Trocas: " . $cont_trocas;
echo "<br>";
?>
<!--
    for ($i = 1; $i < $n; $i++) {
        $chave = $array[$i];
        $j = $i - 1;

        // Move os elementos maiores que a chave
        // uma posição à frente
        while ($j >= 0 && $array[$j] > $chave) {
            $array[$j + 1] = $array[$j];
            $j--;
        }

        // Insere a chave na posição correta
        $array[$j + 1] = $chave;
    }

    return $array;
}
-->