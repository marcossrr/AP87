<?php

class Motocicleta extends Vehiculo {
    private $cilindrado;
    private $llevaCasco;

    public function __construct($marca, $modelo, $matricula, $precioDia, $cilindrado, $llevaCasco, $id = 0) {
        parent::__construct($id, $marca, $modelo, $matricula, $precioDia);

        $this->cilindrado = $cilindrado;
        $this->llevaCasco = $llevaCasco;
    }

    public function getCilindrado() { return $this->cilindrado };
    public function getLlevaCasco() { return $this->llevaCasco };

    public function setCilindrado() { $this->cilindrado = $cilindrado };
    public function setLlevaCasco() { $this->llevaCasco = $llevaCasco };
}