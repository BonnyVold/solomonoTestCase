<?php

include_once './Autoloader/autoloader.php';
include_once './Autoloader/App.php';

$config = array_merge(
  include_once './config/db.php',
  include_once './config/app.php',
);

$app = new \app\App($config);
$app->run();

// include_once "view/layout.php";
