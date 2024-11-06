<?php

namespace Base\Route;


class RouteBaseClass {

  private String $routeName;
  private String $url;

  public function __construct(string $url, function|string|array $callback){
    var_dump('Route Base!');
  }

  static function get(string $url, function|string|array $callback):self{
    return self::__construct($url, $callback);
  }

}
