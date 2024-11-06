<?php

namespace app;
use Base;

class App {

  private array $config;
  private Router $router;

  public function __construct(array $config){
    $this->config = $config;
  }

  public function getConfig(){
    return $this->config;
  }

  public function run(){

  }
}
