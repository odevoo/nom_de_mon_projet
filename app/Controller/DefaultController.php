<?php

namespace Controller;

use \W\Controller\Controller;
use \Model\PagesModel;

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
    public function displayPage($slug) {
        $page = new PagesModel;
        $page->getPageBySlug($slug);
        if ($page) {
        $this->show('basique/page', ['contenu_page' => $page]);
        } else {
            $this->showNotFound();
        } 
    }
}