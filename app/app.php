<?php
  date_default_timezone_set('America/Los_Angeles');
  require_once __DIR__."/../vendor/autoload.php";
  require_once __DIR__."/../src/Translate.php";

  $app = new Silex\Application();

  $app->register(new Silex\Provider\TwigServiceProvider(), array(
    'twig.path' => __DIR__.'/../views'
  ));

  $app->get("/", function() use ($app) {

    return $app['twig']->render('index.html.twig');
  });

  $app->post("/translate", function() use ($app) {
    $input = $_POST['input'];
    $translate_sentence = new Translate;
    $result = $translate_sentence->translateE($input);
    return $app['twig']->render('index.html.twig', array('result'=> $result));
  });

  return $app;
?>
