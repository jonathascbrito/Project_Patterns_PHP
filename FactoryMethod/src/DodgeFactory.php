<?php

namespace FactoryMethod;

use FactoryMethod\Product\{CarProduct, DodgeCharger, DodgeDart};
class DodgeFactory implements CarFactory
{
    public function createCar(string $carModel): CarProduct
    {
        if($carModel == "DodgeCharger"){
            return new DodgeCharger();
        } else if($carModel == "DodgeDart"){
            return new DodgeDart();
        } else {
            throw new \Exception("Modelo de carro \"{$carModel}\" não existe no sistema.");
        }
    }
}
