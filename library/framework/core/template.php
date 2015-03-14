<?php

namespace Framework\Core;

require_once ROOT . DS . 'vendor/autoload.php';

class Template
{

  protected $loader;
  protected $twig;

  public function __construct() {
    $this->loader = new \Twig_Loader_Filesystem(ROOT . DS . 'app/views');
    $this->twig = new \Twig_Environment($this->loader, array(
      'cache' => ROOT . DS . 'tmp'
    ));
  }

  public function render($template_name) {
    $template = $this->twig->loadTemplate($template_name);
    echo $template->render(array());
  }

}