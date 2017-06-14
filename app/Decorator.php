<?php
interface iRoom
{
    public function getBaseCost();
}
class Decorator implements iRoom
{
    protected $_baseCost = 0;

    public function getBaseCost()
    {
        return $this->_baseCost;
    }
}

class Room extends Decorator
{
    public function __construct($producto)
    {
        $this->_baseCost = $producto;
    }
}

abstract class RoomDecorator implements iRoom
{
    protected $_producto;

    public function __construct(iRoom $Producto)
    {
        $this->_producto = $Producto;
    }
}

class Cuna extends RoomDecorator
{
    public function getBaseCost()
    {
        return $this->_producto->getBaseCost() + 150;
    }
}

class Cama extends RoomDecorator
{
    public function getBaseCost()
    {
        return $this->_producto->getBaseCost() + 300;
    }
}

class Wifi extends RoomDecorator
{
    public function getBaseCost()
    {
        return $this->_producto->getBaseCost() + 25;
    }
}

class Restaurante extends RoomDecorator
{
    public function getBaseCost()
    {
        return $this->_producto->getBaseCost() + 40;
    }
}

class Limpieza extends RoomDecorator
{
    public function getBaseCost()
    {
        return $this->_producto->getBaseCost() + 100;
    }
}