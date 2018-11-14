<?php

namespace Drupal\page_test\Controller;

use Drupal\Core\Controller\ControllerBase;

class HelloController extends ControllerBase {

    public function pagina1() {
        return array(
            '#type' => 'markup', 
            '#markup' => 'Esta es mi nueva pagina 1',
        );
    }

    public function hello_world() {
        return array(
            '#type' => 'markup', 
            '#markup' => $this->t('Hello world!'),
        );
    }

    public function pagina() {
        return array(
            '#type' => 'markup', 
            '#markup' => 'Esta es mi nueva pagina',
        );
    }
}
