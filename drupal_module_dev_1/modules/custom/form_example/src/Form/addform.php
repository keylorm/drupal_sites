<?php

namespace Drupal\form_example\Form;

use Drupal\Core\Form\FormBase;
use Drupal\Core\Form\FormStateInterface;
use Symfony\Component\HttpFoundation\RedirectResponse;

/**
 * Implements an form_example form.
 */
class addform extends FormBase {

  /**
   * {@inheritdoc}
   */
  public function getFormId() {
    return 'form_example_addform';
  }

  /**
   * {@inheritdoc}
   */
  public function buildForm(array $form, FormStateInterface $form_state) {
    $form['elemento_imagen'] = array(
      '#markup' => '<img class="zoom" src="https://i0.wp.com/arnimartinez.com/wp-content/uploads/2017/12/datos-personales.gif?resize=525%2C238" />',
    );
    
    $form['datos_personales'] = array(
      '#type' => 'fieldset',
      '#title' => 'Datos personales',
      '#attributes' => array(
        'class' => array(
          'mi_clase'
        ),
      ),
    );

    $form['datos_personales']['nombre'] = array(
      '#type' => 'textfield',
      '#title' => $this->t('Digite el nombre'),
      '#default_value' => '',
      '#size' => 60,
      '#maxlength' => 128,
      '#required' => TRUE,
    );

    $form['datos_personales']['apellido'] = array(
      '#type' => 'textfield',
      '#title' => $this->t('Digite el apellido'),
      '#default_value' => '',
      '#size' => 60,
      '#maxlength' => 128,
      '#required' => FALSE,
    );
    
    $form['datos_personales']['correo'] = array(
      '#type' => 'email',
      '#title' => $this->t('Digite el correo'),
      '#default_value' => '',
      '#size' => 60,
      '#maxlength' => 128,
      '#required' => FALSE,
    );


    $form['datos_institucionales'] = array(
      '#type' => 'details',
      '#title' => 'Datos institucionales',
      '#open' => true,
    );
    
    $form['datos_institucionales']['telefono'] = [
      '#type' => 'tel',
      '#title' => $this->t('Digite su telefono'),
    ];

    $form['datos_institucionales']['fecha_contratacion'] = array(
      '#type' => 'date',
      '#title' => $this->t('Digite la fecha de contratación'),
    );



    $form['actions']['#type'] = 'actions';
    $form['actions']['submit'] = [
      '#type' => 'submit',
      '#value' => $this->t('Save'),
      '#button_type' => 'primary',
      '#attributes' => array(
        'class' => array(
          'mibotonprincipal'
        ),
      ),
    ];

    $form['actions']['cancel'] = [
      '#type' => 'submit',
      '#value' => $this->t('Cancel'),
      '#submit' => array(
        'form_example_cancelar'
      ),
      '#limit_validation_errors' => array(),
      '#attributes' => array(
        'class' => array(
          'mibotonprincipal'
        ),
      ),
    ];

    $form['#attached']['library'][] = 'form_example/form-example-libraries';
    return $form;
  }

  /**
   * {@inheritdoc}
   */
  public function validateForm(array &$form, FormStateInterface $form_state) {
    if (strlen($form_state->getValue('telefono')) < 3) {
      $form_state->setErrorByName('telefono', $this->t('Este número telefónico es muy corto'));
    }

    $mystring = $form_state->getValue('correo');
    $findme = '@';
    $pos =  strpos($mystring, $findme);
    if($pos===false) {
      $form_state->setErrorByName('correo', $this->t('Correo no es válido'));
    }

  }

  /**
   * {@inheritdoc}
   */
  public function submitForm(array &$form, FormStateInterface $form_state) {
    $messenger = \Drupal::messenger();
    $messenger->addMessage(t('Su número telefónico es @number', ['@number' => $form_state->getValue('telefono')]), $messenger::TYPE_STATUS);
    global $base_url;
    $response = new RedirectResponse($base_url, 302);
    $response->send();
    return;
  }

}