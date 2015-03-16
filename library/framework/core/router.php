<?php

namespace Framework\Core;

require_once ROOT . DS . 'vendor/autoload.php';

use Framework\Core\Path;
use Symfony\Component\Yaml\Yaml;

class Router
{

  private $path;

  public function __construct($path)
  {
    $this->path = $path;
  }

  public function parse()
  {
    $routes = Yaml::parse(file_get_contents(ROOT . DS . 'app/config/routing.yml'));
    foreach($routes as $route)
    {
      print_r($route);
      print_r($this->path);
    }
  }

}