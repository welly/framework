<?php

use Framework\Core\Path;
use Framework\Core\Router;

function framework_autoload($class)
{

  $root_path = ROOT . DS;
  $library_path = $root_path . 'library' . DS;

  $class_name = str_replace('\\', '/', strtolower($class));

  // Checking if class exists in library directory
  $valid = file_exists($class_file = $library_path . $class_name .'.php');

  if (!$valid) {
    // Checking if class exists in app directory
    $valid = file_exists($class_file = $root_path . $class_name .'.php');
  }

  if ($valid) {
    require_once($class_file);
  }

}

/**
 * Main bootstrap function
 */
function framework_bootstrap()
{

  /**
   * Register libraries
   */

    spl_autoload_register('framework_autoload');
    $router = new Router();
    $router->dispatch();

}