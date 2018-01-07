<?php
namespace Codefii\Controllers;
use Core\View;
/**
 *
 */
class HomeController  {

  public function index(){
    View::render('Home/Template/header.php');
    View::render('Home/index.php');
    View::render('Home/Template/footer.php');
  }
}
