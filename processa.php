<?php
    $numero = $_POST["numero"];
    $primeiron = 0;
    $segundon = 1;
    $atualn = 0;
    
        echo "Sequencia de Fibonacci $numero termos: <br>";
        for ($i=0; $i <= $numero-2; $i++) { 
            if ($atualn < 1) {
               echo "$primeiron <br>";
               echo "$segundon <br>";
               $atualn++;
            }else {
                    $atualn = $primeiron + $segundon;
                    $primeiron = $segundon;
                    $segundon = $atualn;
                    echo "$atualn<br>";
            }
        }
?>