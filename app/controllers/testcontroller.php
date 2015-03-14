<?php

namespace App\Controllers;

use Framework\Core\BaseController;
use Framework\Core\Template;


class TestController extends BaseController {


  public function show()
  {
    $template = new Template();
    $template->render('show.html.twig');
  }

}