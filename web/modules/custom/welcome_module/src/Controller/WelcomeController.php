<?php
namespace Drupal\welcome_module\Controller;
class WelcomeController {
  public function welcome() {
    $arr = array(
      '#markup' => 'Welcome to our Website.'
    );
    return $arr;
  }
}
