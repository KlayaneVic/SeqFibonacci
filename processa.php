<?php
    $numero = $_POST["numero"];
    $primeiron = 0;
    $segundon = 1;
    $atualn = 0;
    
        echo "Sequencia de Fibonacci 0 à $numero: <br>";
        for ($i=0; $i <= $numero; $i++) { 
            if ($atualn < 1) {
               echo "$primeiron <br>";
               echo "$segundon <br>";
               $atualn++;
            }else {
                if ($atualn < $numero) {
                    $atualn = $primeiron + $segundon;
                    $primeiron = $segundon;
                    $segundon = $atualn;
                    echo "$atualn<br>";
                }  
            }
        }
?>