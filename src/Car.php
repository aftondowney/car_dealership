<?php
class Car
{
    private $make_model;
    private $price;
    private $miles;
    private $image_path;


    function __construct($car_model, $price, $mileage, $image)
    {
        $this->make_model = $car_model;
        $this->price = $price;
        $this->miles = $mileage;
        $this->image_path = $image;
    }

    function setModel($car_model)
    {
        $this->make_model = $car_model;
    }

    function getModel()
    {
        return $this->make_model;
    }

    function setPrice($car_price)
    {
        $this->price = $price;
    }

    function getPrice()
    {
        return $this->price;
    }

    function setMileage($mileage)
    {
        $this->mileage = $mileage;
    }

    function getMileage()
    {
        return $this->mileage;
    }

    function setImage($car_image)
    {
        $this->image_path = $image;
    }

    function getImage()
    {
        return $this->image;
    }


    function worthBuying($max_price)
    {
        return $this->price < $max_price;
    }

    function save()
    {
        array_push($_SESSION['car-list'], $this);
    }

    static function getAll()
    {
        return $_SESSION['car-list'];
    }


    static function deleteAll()
    {
        $_SESSION['car-list'] = array();
    }



}

?>
