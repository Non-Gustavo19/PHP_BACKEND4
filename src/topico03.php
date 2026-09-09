<?php
$cep="01012123";
echo "cep = $cep";
$valor=5124.784;
echo "<br>Valor = $valor";
echo "<br>R$ ".number_format($valor,2,",",".");
echo "<br>R$ ".number_format($valor,0,",",".");

/*
R$ 5.124,74
R$ 5.125
/*

$nome="bete";
echo "<br>Nome = $nome";
echo '<br>Nome = $nome';
$cor="green";
echo "<p style='color:$cor'>$nome</p>";
?>
