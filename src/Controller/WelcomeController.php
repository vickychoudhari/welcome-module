<?php

namespace Drupal\welcome\Controller;
use Drupal\Core\Controller\ControllerBase;

class WelcomeController extends ControllerBase {
	/**
   * Generates an user bulk upload page.
   */
  public function welcome() {
    
    return array(
      '#type' => 'markup',
      '#markup' => t('Hello vishal'),
    );
  }
}
?>
