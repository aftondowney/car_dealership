<?php
class Car
{
    public $make_model;
    public $price;
    public $miles;
}

$tesla = new Car();
$tesla->make_model = "2016 Tesla Model S";
$tesla->price = 60000;
$tesla->miles = 4000;

$fiat = new Car();
$fiat->make_model = "1958 Fiat 600";
$fiat->price = 10000;
$fiat->miles = 9000;

$jeep = new Car();
$jeep->make_model = "2006 Jeep Wrangler";
$jeep->price = 8000;
$jeep->miles = 120000;

$cars = array($tesla, $fiat, $jeep);

?>
