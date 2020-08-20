<?php
    $numero = $_POST["numero"];
    $primeiron = 0;
    $segundon = 1;
    $atualn = 0;
    $cont = 1;
    
        echo "Sequencia de Fibonacci $numero Termos: <br>";
        for ($i=0; $i < $numero; $i++) { 
            if ($atualn < 1) {
                echo "Termo $cont - $primeiron <br>";
                $atualn++;
                
            }elseif (($atualn == 1) && ($cont <= 2)) {
                echo "Termo $cont - $segundon <br>";
                $atualn++;

            }else {
                if ($cont <= $numero) {
                    $atualn = $primeiron + $segundon;
                    $primeiron = $segundon;
                    $segundon = $atualn;
                    echo "Termo $cont - $atualn<br>";
                }  
            }

            $cont++;
        }
?>