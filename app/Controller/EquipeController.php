<?php

namespace Controller;

use \W\Controller\Controller;
use \W\Model\UsersModel;
use \Model\SkillsModel;
use \Model\PagesModel;

class EquipeController extends Controller
{

    /**
     * Page d'accueil par défaut
     */
    public function showProfile($id)
    {   
        $rq = new UsersModel;
        $userdata = $rq->find($id);

        /*$rq1 = new PagesModel;
        $rq1->getPage(1);
        debug($rq1);*/

        //$this->getSkills($id);
        
        $this->show('equipe/profile', ['user' => $userdata]);
    }
    public function showMain() {
        $rq = new UsersModel;
        $stmt = $rq->findAll();
        //debug($stmt);
        $this->show('equipe/main' , ['array' => $stmt]);
    }

    public function jsonSkills($id) {
        $rqskill  = new SkillsModel;
        $dataskills = $rqskill->getSkills($id);
        $json = $this->showJson($dataskills);
    }
    public function modifProfile($id) {
        $rq = New UsersModel;
        $user = $rq->find($id);
        $rqskill  = new SkillsModel;
        $dataskills = $rqskill->getSkills($id);
        $this->show('equipe/modif', ['user' => $user, 'skills' => $dataskills]);
        
    }
    public function formModif($id) {
        debug($id);
        debug($_POST);
    }
}