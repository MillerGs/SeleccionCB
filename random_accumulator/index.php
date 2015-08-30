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
            if(!isset($suma)){
                $suma = 0;
                if($suma <= 10000){
                    for($i=1; $i<=100; $i++){
                            $numero = mt_rand(1, 100);
                        $suma = $suma + $numero;
                    }
                    
                }
            }else{
                if($suma <= 10000){
                    for($i=1; $i<=100; $i++){
                            $numero = mt_rand(1, 100);
                        $suma = $suma + $numero;
                    }
                    
                }
                    
            }
            echo $suma.'<br>';
            echo getrand($suma);
        ?>
    </body>
</html>
