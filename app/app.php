<?php

    require_once __DIR__."/../src/RPSGenerator.php";
    require_once __DIR__."/../vendor/autoload.php";

    session_start();

    if (empty($_SESSION['players_choices']))
    {
        $_SESSION['players_choices'] = array();
    }


    $app = new Silex\Application();

    $app->register(new Silex\Provider\TwigServiceProvider(), array('twig.path'=>__DIR__."/../views"));

    $app->get("/", function() use ($app) {
        return $app['twig']->render('form.twig');
    });

    $app->post("/results", function() use ($app){
        $player1_move = $_POST['player1'];
        $player2_move = $_POST['player2'];
        $RPS = new RPS();
        $RPS_results = $RPS->compareRPS($player1_move, $player2_move);
        return $app['twig']->render('results.twig', array('RPS_results' => $RPS_results));


    });

    return $app;


?>
