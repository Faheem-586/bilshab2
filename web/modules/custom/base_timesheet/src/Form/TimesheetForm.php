<?php

namespace Drupal\base_permissions\Form;

use Drupal\Core\Form\FormBase;
use Drupal\Core\Form\FormStateInterface;

class PermissionsForm extends FormBase {


  /**
   * {@inheritdoc}
   */
  public function getFormId() {
    return 'base_permissions_form';
  }

  /**
   * {@inheritdoc}
   */
  public function buildForm(array $form, FormStateInterface $form_state) {

    $form['name'] = [
      '#type' => 'textfield',
      '#title' => $this->t('Nama'),
      '#required' => TRUE
    ];

    $form['#theme'] = 'node__honda-vehicle__full';

    $form['email'] = [
      '#type' => 'email',
      '#title' => $this->t('Alamat email'),
      '#required' => TRUE
    ];

    $form['actions']['#type'] = 'actions';

    $form['actions']['submit'] = [
      '#type' => 'submit',
      '#value' => $this->t('Submit'),
      '#button_type' => 'primary',
    ];
    return $form;
  }

  /**
   * If need to display some var for debugging.
   *
   * @param mixed $var
   *  The variable to display.
   */
  public function display($var) {
    \Drupal::messenger()->addMessage(print_r($var, true));
  }

  /**
   * Log the variable for debugging.
   *
   * @param mixed $var
   *  The variable.
   */
  public function log($var) {
    \Drupal::logger('base_permissions')->info(print_r($var, true));
  }

  /**
   * {@inheritdoc}
   */
  public function submitForm(array &$form, FormStateInterface $form_state) {
  }
}
