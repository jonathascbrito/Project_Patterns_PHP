<?php

namespace FactoryMethod\Product;

interface CarProduct
{

    public function speedUp(): void;

    public function speedDown(): void;

    public function changeGear(): void;

}
