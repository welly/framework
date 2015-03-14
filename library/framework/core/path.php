<?php

namespace Framework\Core;

class Path
{

  /**
   * Path
   *
   * @var string
   */
  static protected $path;

  /**
   * Returns a path argument
   * @param  integer $index
   * @return string
   */
  public static function getArg($index)
  {
    self::request_path();
    $arguments = explode('/', self::$path);

    return $arguments[$index];
  }

  /**
   * returns path
   * @return string
   */
  public static function getPath()
  {
    self::request_path();
    return self::$path;
  }

  /**
   * Internal function to get current request path
   * @return string
   */
  protected static function request_path()
  {
    self::$path = $_GET['q'];
  }
}