<?php
namespace Codefii\Controllers;
use Core\View;
/**
 *
 */
class HomeController  {

  public function index(){
    View::render('Templates/header/header.php');
    View::render('Home/index.php');
    View::render('Templates/footer/footer.php');
  }
}
