<?php

class Coche extends Vehiculo {
    protected $numeropuertas;
    protected $tipocombustible;

    public function __construct($marca, $modelo, $matricula, $precioDia, $numeropuertas, $tipocombustible, $id = 0) {
        parent::__construct($id, $marca, $modelo, $matricula, $precioDia);

        $this->numeropuertas = $numeropuertas;
        $this->tipocombustible = $tipocombustible;
    }

    public function getNumeroPuertas() { return $this->numeropuertas };
    public function getTipoCombustible() { return $this->tipocombustible };

    public function getNumeroPuertas() { $this->numeropuertas = $numeropuertas };
    public function getTipoCombustible() { $this->tipocombustible = $tipocombustible };

}