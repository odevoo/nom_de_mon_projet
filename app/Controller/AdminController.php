<?php

namespace Controller;

use \W\Controller\Controller;
use \W\Model\UsersModel;
use \W\Security\AuthentificationModel;

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
        //debug($_POST);
        $user = new UsersModel;
        $userlog = new AuthentificationModel;
        $password = $userlog->hashPassword($_POST['password']);
        $data = ['username' => $_POST['username'], 'email' => $_POST['email'], 'password' => $password, 'role' => $_POST['role']];    
        $userdata = $user->insert($data);
        //debug($userdata);
        $userlog->logUserIn($userdata);
        //debug($_SESSION);
        //debug($_SESSION['user']['id']);


    }
    public function showLogin(){
        $this->show('admin/login');
    }

    public function login() {
        //debug($_POST);
        $email = $_POST['email'];
        $password = $_POST['password'];
        $userlogin = new AuthentificationModel;
        $userid = $userlogin->isValidLoginInfo($email, $password);
        //debug($rq);
        $user = new UsersModel;
        $userdata = $user->find($userid);
        //debug($userdata);
        $userlogin->logUserIn($userdata);
        //debug($_SESSION);
    }

}