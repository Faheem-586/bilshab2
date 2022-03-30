<?php
namespace Drupal\base_timesheet\Controller;

// use Drupal\Core\Controller\ControllerBase;

/**
 * Provides route responses for the Example module.
 */
class MyController{

  /**
   * Returns a simple page.
   *
   * @return array
   *   A simple renderable array.
   */
  public function myFunction() {
     return array(
      '#markup' => 'Welcome to our Website.'
    );

  }


}

