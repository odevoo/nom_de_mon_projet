<?php

namespace Controller;

use \W\Controller\Controller;

class DefaultController extends Controller
{

	/**
	 * Page d'accueil par défaut
	 */
	public function home()
	{
		$this->show('default/home');
	}

    public function services() {
        $this->show('services/services');
    }
    public function aPropos() {
        $this->show('default/apropos');
    }
    public function traitement() {
        echo "<pre>";
        print_r($_POST);
        echo "</pre>";
        $this->show('default/apropos');
    }
}