<?php

namespace FactoryMethod\Product;

class TeslaModelX implements CarProduct
{

    public function speedUp(): void
    {
        echo "Speed Up Tesla Model X \n";
    }

    public function speedDown(): void
    {
        echo "Speed Down Tesla Model X \n";
    }

    public function changeGear(): void
    {
        echo "Change Gear Tesla Model X \n";
    }

}
