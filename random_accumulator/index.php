<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        $suma = 0;
            for ($i= 0; $suma<=10000; $i++){
                $numero = rand(1, 100);
                //echo $numero.'<br>';
                $suma = $suma + $numero;
            }
                $dato = $suma - $numero;
            echo '<b>'.$suma.'</b><br>';
            echo 'valor acumulado de la suma hasta el valor más cercano que no exceda es: '. $dato;
        ?>
    </body>
</html>
