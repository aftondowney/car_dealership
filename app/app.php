<?php

    require_once __DIR__."/../vendor/autoload.php";
    require_once __DIR__."/../src/Car.php";

    session_start();

    if(empty($_SESSION['car_list'])) {
        $_SESSION['car_list'] = array();
    }

    $app = new Silex\Application();

    $app->register(new Silex\Provider\TwigServiceProvider(), array(
    'twig.path' => __DIR__.'/../views'
    ));

    $app->get("/", function() use ($app) {
        return $app['twig']->render('add_car.html.twig');
    });

    $app->post("/confirmation", function() use ($app) {
        $car = new Car($_POST ['make_model'], $_POST ['price'], $_POST ['miles']);
        $car->save();
        return $app['twig']->render('confirmation.html.twig', array('newcar'=> $car));
    });

    $app->post("/car_list", function() use ($app) {
        return $app['twig']->render('car_list.html.twig', array('cars' => Car::getAll()));
    });

    $app->post("/clear-list", function() use ($app) {
      return $app['twig']->render('add_car.html.twig', array('cars'=> Car::deleteAll()));
    });


    return $app;

?>
