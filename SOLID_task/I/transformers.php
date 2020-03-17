<?php


class SuperTransformer implements iCarTransformer, iPlaneTransformer, iShipTransformer
{
    public function toCar()
    {
        echo 'Transform to car';// TODO: Implement toCar() method.
    }
    public function toPlane()
    {
        echo 'Transform to plane';// TODO: Implement toPlane() method.
    }
    public function toShip()
    {
        echo 'Transform to ship';// TODO: Implement toShip() method.
    }
}

class CarTransformer implements iCarTransformer
{
    public function toCar()
    {
        echo 'Transform to car';// TODO: Implement toCar() method.
    }
}