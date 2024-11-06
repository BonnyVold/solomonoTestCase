<?php

namespace Base\Route;

use Base\Route\RouteBaseClass;

class RouteClass extends RouteBaseClass {

  private string $url;
  private string $path;
  private $callback;

  public function __construct(string $url, array|string $callback){
    parent::__construct($url, $callback);
  }

}
