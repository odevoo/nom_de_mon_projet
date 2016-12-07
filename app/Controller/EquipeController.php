<?php

namespace Controller;

use \W\Controller\Controller;
use \W\Model\UsersModel;
use \Model\SkillsModel;

class EquipeController extends Controller
{

    /**
     * Page d'accueil par défaut
     */
    public function showProfile($id)
    {   
        $rq = new UsersModel;
        $userdata = $rq->find($id);


        $rqskill  = new SkillsModel;
        $dataskills = $rqskill->find($id);
        
        debug($dataskills);
        //debug($userdata);
        $this->show('equipe/profile', ['user' => $userdata]);
    }
    public function showMain() {
        $rq = new UsersModel;
        $stmt = $rq->findAll();
        //debug($stmt);
        $this->show('equipe/main' , ['array' => $stmt]);
    }


}