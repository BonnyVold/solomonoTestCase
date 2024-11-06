<?php

namespace Base\Route;
use Base\Route\RouteClass as Route;

class Router {

  private array $routeList = array();
  private Route $baseRoute;
  private array $routeULRList = array();

  public function __construct(){
  }

  public function push(Route $route){
    array_push($this->routeList, $route);
    array_push($this->routeULRList, $route->getUrl());
  }
  public function getList(){
    var_dump($this->routeULRList);
    echo "<hr><br>";
    var_dump($this->routeList);
    die();
  }
  protected function resolve(){
  }
}
