<?php

namespace Controller;

use \W\Controller\Controller;
use \W\Model\UsersModel;

class AdminController extends Controller
{

    /**
     * Page d'accueil par défaut
     */
    public function home()
    {
        $this->show('admin/index');
    }
    public function register(){
        debug($_POST);
        $password = password_hash($_POST['password'], PASSWORD_BCRYPT);
        $data = ['username' => $_POST['username'], 'email' => $_POST['email'], 'password' => $password, 'role' => $_POST['role']];    
        $user = new UsersModel;
        $user->insert($data);

    }

}