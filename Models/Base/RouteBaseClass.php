<?php

namespace Base\Route;


class RouteBaseClass {

  private String $routeName;
  private String $url;
  private array $callback;

  public function __construct(string $url, array $callback){
    $this->url = $url;
    $this->callback = $callback;
  }

  public function getUrl(): string{
    return $this->url;
  }

  public function getCallback(): array{
    return $this->callback;
  }

}
