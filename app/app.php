<?php
    date_default_timezone_set("America/Los_Angeles");
    require_once __DIR__."/../vendor/autoload.php";
    require_once __DIR__."/../src/RepeatCounter.php";

    $app = new Silex\Application();
    $app->register(new Silex\Provider\TwigServiceProvider(), array(
        "twig.path" => __DIR__.'/../views'
    ));

    $app->get("/", function() use ($app) {
        return $app['twig']->render('word_frequency_checker.html.twig');
    });


    $app->post("/result", function() use ($app) {
        $new_repeat_counter = new RepeatCounter($_POST['sentence'], $_POST['word']);
        return $app['twig']->render('result.html.twig', array('result' => $new_repeat_counter));
    });

    return $app;
