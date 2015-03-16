<?php

namespace Framework\Core;

use Framework\Core\Path;

class Dispatcher
{

  // public function __construct()
  // {
  //   $this->controllerName = 'Framework\Core\BaseController';
  // }

  // private function parse()
  // {
  //   $this->setController(Path::getArg(0));
  //   $this->actionName = Path::getArg(1);
  //   $this->query = Path::getArg(2);
  // }

  // private function setController($controllerName)
  // {
  //   $this->controllerName = 'App\Controllers\\' . ucfirst($controllerName) . 'Controller';
  // }

  // public function dispatch()
  // {
  //   spl_autoload_register('framework_autoload');

  //   $this->parse();
  //   $this->controllerName = class_exists($this->controllerName) ? $this->controllerName : 'BaseController';

  //   $dispatch = new $this->controllerName();

  //   $response = call_user_func_array(array($dispatch, $this->actionName), array());

  //   echo $response;

  // }

}