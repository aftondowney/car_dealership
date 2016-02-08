<?php
class Car
{
    public $make_model;
    public $price;
    public $miles;
    public $image_path;

    function __construct($car_model, $cost, $mileage, $image)
    {
        $this->make_model = $car_model;
        $this->price = $cost;
        $this->miles = $mileage;
        $this->image_path = $image;
    }

    function worthBuying($max_price)
    {
        return $this->price < $max_price;
    }
}


$tesla = new Car("2016 Tesla Model S", 60000, 4000, "img/teslaS.png");
$fiat = new Car("1958 Fiat 600", 1000, 9000, "img/fiat600.png");
$jeep = new Car("2006 Jeep Wrangler", 8000, 12000, "img/jeep-wrangler.png");

$cars = array($tesla, $fiat, $jeep);

$cars_matching_search = array();
foreach ($cars as $car) {
    if ($car->worthBuying($_GET['price'])) {
        array_push($cars_matching_search, $car);
    }
}

?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
    <link rel="stylesheet" href="css/styles.css" type="text/css" media="all">
    <script src="https://code.jquery.com/jquery-1.12.0.min.js"></script>
    <script src="https://code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
    <script src="js/scripts.js"></script>
    <title>Sparky's Dealership</title>
  </head>
  <body>
    <div class="container">
      <h1>Sparky's Cars</h1>
      <h3>Here's what we found:</h3>
      <ul>
            <?php
                foreach ($cars_matching_search as $car) {
                    echo "<li> $car->make_model </li>";
                    echo "<ul>";
                        echo "<li> $$car->price </li>";
                        echo "<li> Miles: $car->miles </li>";
                        echo "<li><img src='$car->image_path'></li>";
                    echo "</ul>";
                }
            ?>
      </ul>
    </div>
  </body>
</html>
