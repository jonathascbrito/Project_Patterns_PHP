<?php

namespace FactoryMethod\Product;

class DodgeCharger implements CarProduct
{

    public function speedUp(): void
    {
        echo "Speed Up Dodge Model Charger \n";
    }

    public function speedDown(): void
    {
        echo "Speed Down Dodge Model Charger \n";
    }

    public function changeGear(): void
    {
        echo "Change Gear Dodge Model Charger \n";
    }

}
