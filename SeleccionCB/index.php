<?php

define('RUTA_HTTP', 'http://'.$_SERVER['HTTP_HOST'].'ventadepaweb');
//echo $_REQUEST['c'];

if(!isset($_REQUEST['c']))
{
    require_once 'controlador/principal.controlador.php';
    $controlador    =   new PrincipalControlador();
    $controlador->Index();
}
else
{
    $fichero='controlador/'.strtolower($_REQUEST['c']).'.controlador.php';
    if(file_exists($fichero)){
        $controlador    =   $_REQUEST['c'].'Controlador';
        $accion = isset($_REQUEST['a']) ? $_REQUEST['a'] : 'Index';
        require_once 'controlador/' . strtolower($_REQUEST['c']) . '.controlador.php';
        $metodo = method_exists($controlador, $_REQUEST['a']);
        if($metodo==1 ){
            $controlador    =   new $controlador();
            call_user_func(array($controlador, $accion));
        }else{
            //----- CAMBIAR * --------------------
            echo 'La ruta a la que intenta ingresar no existe';
            //----- CAMBIAR * --------------------
        }
    }else{
        //----- CAMBIAR * --------------------
        echo 'La ruta a la que intenta ingresar no existe';
        //----- CAMBIAR * --------------------
    }       
}