<?php
//require_once 'modelo/ambiente.entidad.php';
//require_once 'modelo/ambiente.modelo.php';
class PrincipalControlador{
//    private $ambiente_modelo;
    public function __construct() {
//        $this->ambiente_modelo =   new AmbienteModelo();
    }
    public function index() {
        require_once 'vista/vHeader.php';
        require_once 'vista/page/pPrincipal.php';
        require_once 'vista/vFooter.php';
    }
}