<?php

function mostrarValores($valor1, $valor2){

    $ordenados = array();

    if ($valor1 >= 1 and $valor2 <= 100) {
        
        for ($i = $valor1; $i <= $valor2; $i++) {

            $ordenados[] = $i;
            
        }
        
        print_r($ordenados);
        $alreves = array_reverse($ordenados);
        print_r($alreves);
        
    } else {
        echo "Valor ingresado no valido";
    }

}


function multiplos1($tabla, $multiplo){

    for ($i = 0; $i <= $multiplo; $i++) {

        $calculo = $tabla * $i;
        echo $tabla . " x " . $i . " = " . $calculo . "\n";
}
}

function multiplos2($tabla, $multiplo){

    $i = 0;

    do {
        if ($i != $multiplo) {
            $i++;
            $calculo = $tabla * $i;
            echo $tabla . " x " . $i . " = " . $calculo . "\n";
        } else {
            break;            
        }

    } while ($tabla >= 0 || $multiplo >= 0);


}

function multiplos3($tabla, $multiplo){

    $i = 0;

    while ($tabla >= 0 and $i <= $multiplo) {

        if ($i != $multiplo) {

            $i++;
            $calculo = $tabla * $i;
            echo $tabla . " x " . $i . " = " . $calculo . "\n";

        } elseif ($i = $multiplo) {break;}
    }


}

function dado($valorMin, $ValorMax){

    $val1 = 0;
    $val2 = 0;
    $val3 = 0;
    $val4 = 0;
    $val5 = 0;
    $val6 = 0;

    for ($i = 0; $i <= 100; $i++) { 
        $randomizar = rand($valorMin, $ValorMax);
        
        switch ($randomizar) {
            case 1:
                $randomizar = 1;
                $val1 = $val1 + 1;
                break;

            case 2:
                $randomizar = 2;
                $val2 = $val2 + 1;
                break;

            case 3:
                $randomizar = 3;
                $val3 = $val3 + 1;
                break;

            case 4:
                $randomizar = 4;
                $val4 = $val4 + 1;
                break;

            case 5:
                $randomizar = 5;
                $val5 = $val5 + 1;
                break;

            default:
            $randomizar = 6;
                $val6 = $val6 + 1;
                break;

        }
    }

    echo "Cantidad de 1 repetidas = " . $val1 . "\n";
    echo "Cantidad de 2 repetidas = " . $val2 . "\n";
    echo "Cantidad de 3 repetidas = " . $val3 . "\n";
    echo "Cantidad de 4 repetidas = " . $val4 . "\n";
    echo "Cantidad de 5 repetidas = " . $val5 . "\n";
    echo "Cantidad de 6 repetidas = " . $val6 . "\n";
}