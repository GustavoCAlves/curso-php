<?php

$altura = 1.72;
$peso = 100 . "kg";
$imc = ($peso / $altura ** 2);

echo "Seu IMC é de $imc. Você está";

if ($imc < 18) {
    echo " abaixo do peso" . PHP_EOL;

} elseif ($imc >= 20 && 24.9) {
    echo " com o peso ideal." . PHP_EOL;

} elseif ($imc > 25) {
    echo " acima do peso.";

} elseif ($imc >= 30) {
    echo " com obesidade I.";

} elseif ($imc >= 40) {
    echo " com obesidade avançada.";
}

echo "Até mais.";