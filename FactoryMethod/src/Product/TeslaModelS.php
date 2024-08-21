<?php

namespace FactoryMethod\Product;

class TeslaModelS implements CarProduct
{
    public function speedUp(): void
    {
        echo "Speep Up Telas Model S \n";
    }

    public function speedDown(): void
    {
        echo "Speed Down Telas Model S \n";
    }

    public function changeGear(): void
    {
        echo "Change Gear Telas Model S \n";
    }
}
