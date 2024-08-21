<?php
namespace FactoryMethod;

$teslaFactory = new \FactoryMethod\TeslaFactory();
$dodgeFactory = new \FactoryMethod\DodgeFactory();

try {
    $teslaModelS = $teslaFactory->createCar('TeslaModelS');
    $teslaModelX = $teslaFactory->createCar('TeslaModelX');

    $DodgeCharge = $dodgeFactory->createCar('DodgeCharger');
    $DodgeDart = $dodgeFactory->createCar('DodgeDart');
} catch (Exception $e) {
    echo $e->getMessage();
}

echo $teslaModelS->speedUp();
echo $teslaModelS->speedDown();
echo $teslaModelS->changeGear();

echo $teslaModelX->speedUp();
echo $teslaModelX->speedDown();
echo $teslaModelX->changeGear();

echo $DodgeCharge->speedUp();
echo $DodgeCharge->speedDown();
echo $DodgeCharge->changeGear();

echo $DodgeDart->speedUp();
echo $DodgeDart->speedDown();
echo $DodgeDart->changeGear();
