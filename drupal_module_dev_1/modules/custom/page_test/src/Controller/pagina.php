<?php

namespace Drupal\page_test\Controller;

use Drupal\Core\Controller\ControllerBase;


class pagina extends ControllerBase {
   
    public function paginadesdeotrocontrolador() {
        return array(
            '#type' => 'markup', 
            '#markup' => 'Esta es  pagina desde otro controlador',
        );
    }

    public function verpagina($idpagina = null) {
        return array(
            '#type' => 'markup', 
            '#markup' => 'El parámetro recibido es: '.$idpagina,
        );
    }

    public function verpaginacustom($custom_arg = null) {
        return array(
            '#type' => 'markup', 
            '#markup' => 'El parámetro recibido es: '.$custom_arg,
        );
    }

    public function varias() {
        $contenido = array();

        $contenido['linea1'] = array(
            '#type' => 'markup', 
            '#markup' => 'Linea 1<br><br>',
        );

        $contenido['linea2'] = array(
            '#type' => 'markup', 
            '#markup' => '<strong>Linea 2</strong><br><br>',
        );

        $contenido['linea3'] = array(
            '#type' => 'markup', 
            '#markup' => '<i>Linea 3</i>',
        );

        return $contenido;
    }

    public function form() {
        $contenido = array();

        $contenido['linea1'] = array(
            '#type' => 'markup', 
            '#markup' => 'Linea 1<br><br>',
        );

        $contenido['linea2'] = array(
            '#type' => 'markup', 
            '#markup' => '<strong>Linea 2</strong><br><br>',
        );

        $contenido['linea3'] = array(
            '#type' => 'markup', 
            '#markup' => '<i>Linea 3</i>',
        );

        $contenido['linea4'] = \Drupal::formBuilder()->getForm('Drupal\form_example\Form\addform');



        return $contenido;
    }



    public function template() {
        
        $form = \Drupal::formBuilder()->getForm('Drupal\form_example\Form\addform');
        return array(
            '#theme' => 'my_template',
            '#my_variable' => 'Esta es la variable',
            '#form' => $form,
        ); 
    }
}
