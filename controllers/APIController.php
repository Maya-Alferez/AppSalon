<?php

namespace Controllers;
use Model\Servicio;
use Model\Cita;

class APIController {
    public static function index() {
        $servicios = Servicio::all();
        echo json_encode($servicios);
    }

    public static function guardar() {
        $cita = new Cita($_POST);
        $resultado = $cita->guardar();
        echo json_encode($resultado);
    }
}