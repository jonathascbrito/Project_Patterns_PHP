<?php

namespace FactoryMethod\Product;

class DodgeDart implements CarProduct
{

    public function speedUp(): void
    {
        echo "Speed Up Dodge Model Dart \n";
    }

    public function speedDown(): void
    {
        echo "Speed Down Dodge Model Dart \n";
    }

    public function changeGear(): void
    {
        echo "Change Gear Dodge Model Dart \n";
    }

}
