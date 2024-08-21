<?php

namespace FactoryMethod;

use FactoryMethod\Product\{CarProduct, TeslaModelS, TeslaModelX};
class TeslaFactory implements CarFactory
{
    public function createCar(string $carModel): CarProduct
    {
        if($carModel == "TeslaModelX"){
            return new TeslaModelX();
        } elseif($carModel == "TeslaModelS"){
            return new TeslaModelS();
        } else {
            throw new \Exception("Modelo de Carro \" {$carModel}\" não existe no sistema");
        }
    }
}
