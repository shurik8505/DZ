<?php
abstract class Climatic_equipment implements Temperatura
{
    public $proizvoditel;
    public $gabarity;
    public $price;
    public $power;


    public function __construct($proizvoditel, $gabarity, $price, $power)
    {
        $this->proizvoditel = $proizvoditel;
        $this->gabarity = $gabarity;
        $this->price = $price;
        $this->power = $power;
    }


public function info_class()
{
    return 'Manufacturer: ' . $this->proizvoditel . ', output power: ' . $this->power . ' kWt, gabarity(shir,vis,glub):  ' . $this->gabarity . ', price is - '
        . $this->price . ' UAH'.PHP_EOL;
}

}
