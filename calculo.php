<?php
 
$salario = 8000.00;
$imposto = calculosalario($salario);
$salarioliquido = ($imposto) ;

 
function calculosalario($salario) {
    if ($salario <= 2428.80) {
        return 0;
    } elseif ($salario <= 2826.65) {

        return ($salario * 0.075) - 182.16;

    } elseif ($salario <= 3751.05) {

        return ($salario * 0.15) - 394.16;

    } elseif ($salario <= 4664.68) {

        return ($salario * 0.225) - 675.49;

    }elseif ($salario >= 4664.68){

        return($salario * 0.275) - 908.73;   

    } else {
        return ($salario * 0.275) - 1384.28; 
    }
}
 
echo "Salário: R$ " . number_format($salario, 2, ',', '.') . "<br>";
echo "Imposto: R$ " . number_format($imposto, 2, ',', '.') . "<br>"
    ;

 
?>