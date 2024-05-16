<?php

// Creamos la funcion
function mostrarValores($valor1, $valor2){

    // Creamos una funcion que sea un array
    $ordenados = array();

    // Creamos un IF para verificar que los valores enviados esten entre 1 y 100
    if ($valor1 >= 1 and $valor1 <= 100 and $valor2 <= 100 and $valor2 >= 1) {
        
        // Luego tenemos la segunda verificacion para ver si el primer valor es menor al segundo 
        if ($valor1 <= $valor2) {

            // Igualamos $i al numero del $valor1 y como $i es menor sumara hasta llegar al valor que tenga $valor2
            for ($i = $valor1; $i <= $valor2; $i++) {

                // En $ordenados guardamos los numeros del mas chico al mas grande
                $ordenados[] = $i;

                // Damos vuelta el array y lo guardamos en $alreves
                $alreves = array_reverse($ordenados);

            }

            // Ambos print_r van por fuera del for sino nos mostraria el array cada vez que se ejecute una vuelta en el bucle
            // Mostramos los valores del mas chico al mas grande
            print_r($ordenados);

            // Mostramos los numeros dados vueltas que estaban guardados en $alreves
            print_r($alreves);

        // Aca decimos que si $valor1 es mayor a $valor2 haga lo que esta adentro del else{}
        } else {
            
        // Si $valor2 es menor que $valor1 (como dice arriba), en este caso el bucle sumara de 1 en 1 hasta alcanzar el valor de $valor1
        for ($i = $valor2; $i <= $valor1; $i++) { 
            
            // Guardamos los valores del mas chico a mas grande en un array
            $ordenados[] = $i;

            // Damos vuelta el array
            $alreves = array_reverse($ordenados);

        }

            // Ambos print_r van por fuera del for sino nos mostraria el array cada vez que se ejecute una vuelta en el bucle
            // Mostramos primero del mas grande al mas chico, ya que la condicion del else{} es esa
            print_r($alreves);

            // Luego mostramos los valores ordenados al final
            print_r($ordenados);
        }
        
    // Si $valores1 y $valores$ no estan entre 1 y 100 mustra el mensaje que esta adentro del else{}
    } else {
        echo "Valor ingresado no valido";
    }

}
mostrarValores(1, 10);


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